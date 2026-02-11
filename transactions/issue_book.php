<?php
include("../db.php");

if(isset($_POST['issue'])){

    $member_id = $_POST['member_id'];
    $book_id   = $_POST['book_id'];

    $issue_date = date("Y-m-d");

    // Insert transaction
    mysqli_query($conn,"INSERT INTO transactions(member_id, book_id, issue_date)
    VALUES('$member_id','$book_id','$issue_date')");

    // Mark book unavailable
    mysqli_query($conn,"UPDATE books SET available=0 WHERE id='$book_id'");

    echo "<h3>Book Issued Successfully!</h3>";
}
?>

<h2>Issue Book</h2>

<form method="POST">
    Member ID: <input type="number" name="member_id" required><br><br>
    Book ID: <input type="number" name="book_id" required><br><br>

    <button name="issue">Issue Book</button>
</form>

<br>
<a href="../admin_dashboard.php">Back to Dashboard</a>