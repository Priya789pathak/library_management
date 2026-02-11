<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h1>Welcome Admin 🎉</h1>

<h3>Library Management Options</h3>

<ul>
    <li><a href="maintenance/add_book.php">Add Book</a></li>
    <li><a href="maintenance/add_member.php">Add Member</a></li>
    <li><a href="transactions/issue_book.php">Issue Book</a></li>
    <li><a href="transactions/return_book.php">Return Book</a></li>
    <li><a href="reports/available_books.php">Available Books Report</a></li>
</ul>

</body>
</html>