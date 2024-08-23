<?php
    session_start();    
    include('./server.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-container">
        <form action="login_db.php" method="post" class="login-form">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3 color="red">
                        <?php  
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
        <h2>Login to AsmrProng</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login_user" class="btn">Login</button>
            <div>
                <a href="signup.php">
                    <p>Create a AsmrProng Account</p>
                </a>
            </div>
        </form>

    </div>

</body>

</html>