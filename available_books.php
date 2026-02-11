<?php
include("../db.php");

$result = mysqli_query($conn,"SELECT * FROM books WHERE available=1");

echo "<h2>Available Books Report</h2>";

echo "<table border='1' cellpadding='10'>
<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['title']."</td>
    <td>".$row['author']."</td>
    </tr>";
}

echo "</table>";
?>

<br>
<a href="../admin_dashboard.php">Back to Dashboard</a>