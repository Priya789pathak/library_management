<?php
include("../db.php");

$result = mysqli_query($conn,"SELECT * FROM transactions");

echo "<h2>Issued Books Report</h2>";

echo "<table border='1' cellpadding='10'>
<tr>
<th>Transaction ID</th>
<th>Member ID</th>
<th>Book ID</th>
<th>Issue Date</th>
<th>Return Date</th>
<th>Fine</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['member_id']."</td>
    <td>".$row['book_id']."</td>
    <td>".$row['issue_date']."</td>
    <td>".$row['return_date']."</td>
    <td>".$row['fine']."</td>
    </tr>";
}

echo "</table>";
?>

<br>
<a href="../admin_dashboard.php">Back to Dashboard</a>