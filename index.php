<!DOCTYPE html>
<html>
<head>
    <title>Library Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>📚 Library Management System</header>

<div class="card">

    <h2>Login</h2>

    <form action="login.php" method="POST">

        Username:
        <input type="text" name="username" required>

        Password:
        <input type="password" name="password" required>

        Role:
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <button class="btn" type="submit">Login</button>

    </form>

</div>

</body>
</html>