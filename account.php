<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>

    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter Username">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">

        <button type="submit">Login</button>

    </form>
    
</body>
</html>