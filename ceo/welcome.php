<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | FOODIES Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Welcome to Admin Panel</h1>
    </div>
    <br><br>
    <p>
        <a href="export.php" class="btn btn-success">Download Subscriber List</a>
    </p>
    <br><br>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Password</a>
    </p>
    <p>       
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
    </p>
</body>
</html>