<?php
include("../db.php");

if(isset($_POST['add'])){
    $title = $_POST['title'];
    $author = $_POST['author'];

    mysqli_query($conn,"INSERT INTO books(title,author)
    VALUES('$title','$author')");

    echo "<h3>Book Added Successfully!</h3>";
}
?>

<h2>Add Book</h2>

<form method="POST">
    Book Title: <input type="text" name="title" required><br><br>
    Author Name: <input type="text" name="author" required><br><br>

    <button name="add">Add Book</button>
</form>

<a href="../admin_dashboard.php">Back to Dashboard</a>