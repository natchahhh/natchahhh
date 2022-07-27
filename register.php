<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
        <h2>Signin</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>
        <div class="input-group">
            <label for="surname">Surname</label>
            <input type="text" name="surname" required>
        </div>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="tel" name="username" required>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1" required>
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2" required>
        </div>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon">Account Banking</span>
            <select class="form-control"  name="type" id="list">
            <option value=""></option>
            <option value="bangkokbank">กรุงเทพ</option>
            <option value="kbank">กสิกร</option>
            <option value="scbbank">ไทยพาณิช</option>
             </select>
             <input type="accountbanking" required>
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Sign in</button>
        </div>
        <p>Already a member? <a href="login.php">Log In</a></p>
    </form>

</body>
</html>