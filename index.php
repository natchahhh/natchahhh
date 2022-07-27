<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">

<style>
        footer {
        text-align: center;
        padding: 20px;
        background-color: #ABD1FF;
        color: white;
}
</style>
</head>
<body>
    
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" ></a>
  <a href="#">Home</a>
  <a href="#">Profile</a>
  <a href="index.php?logout='1'" style="color: red;">Logout</a>
</div>
<div id="main">
</div>
    <div class="homeheader">
        <h2>Home Page</h2>
    </div>

    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
    </div>
    <footer>
        <a href="http://www.facebook.com">Facebook</a></p>
    </footer>
</body>
</html>