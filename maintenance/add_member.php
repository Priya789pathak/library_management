<?php
include("../db.php");

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $type = $_POST['type'];

    mysqli_query($conn,"INSERT INTO members(name,membership_type)
    VALUES('$name','$type')");

    echo "<h3>Member Added Successfully!</h3>";
}
?>

<h2>Add Member</h2>

<form method="POST">
    Member Name: <input type="text" name="name" required><br><br>

    Membership Type:
    <select name="type">
        <option>Student</option>
        <option>Faculty</option>
    </select><br><br>

    <button name="add">Add Member</button>
</form>

<a href="../admin_dashboard.php">Back to Dashboard</a>