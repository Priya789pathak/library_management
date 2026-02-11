<?php
include("../db.php");

if(isset($_POST['return'])){

    $transaction_id = $_POST['transaction_id'];
    $return_date = date("Y-m-d");

    // Get book_id from transaction
    $result = mysqli_query($conn,"SELECT book_id, issue_date FROM transactions WHERE id='$transaction_id'");
    $row = mysqli_fetch_assoc($result);

    $book_id = $row['book_id'];
    $issue_date = $row['issue_date'];

    // Fine Calculation (₹10 per day after 7 days)
    $days = (strtotime($return_date) - strtotime($issue_date)) / (60*60*24);

    $fine = 0;
    if($days > 7){
        $fine = ($days - 7) * 10;
    }

    // Update transaction
    mysqli_query($conn,"UPDATE transactions SET return_date='$return_date', fine='$fine'
    WHERE id='$transaction_id'");

    // Make book available again
    mysqli_query($conn,"UPDATE books SET available=1 WHERE id='$book_id'");

    echo "<h3>Book Returned Successfully! Fine = ₹$fine</h3>";
}
?>

<h2>Return Book</h2>

<form method="POST">
    Transaction ID: <input type="number" name="transaction_id" required><br><br>

    <button name="return">Return Book</button>
</form>

<br>
<a href="../admin_dashboard.php">Back to Dashboard</a>