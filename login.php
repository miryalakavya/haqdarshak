<?php include('signupuser.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <title>Login</title>

    <style>
#inside-login-container{
    background-color: rgb(112 134 228);
    padding: 0px;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 25px 50px -12px;

}
.login-container{
    text-align: center;
    background-color: rgb(49 79 206);
    padding: 10px;
    color: white;
}
.form-container{
    padding: 30px;
    color: white;    
}
    </style>

</head>

<body style="background-color: #f1f1f1; overflow-y: hidden;">
<?php include('header.php'); ?>

    <div class="container">
        <div class="row" style="padding: 12% 35%;">
            <div class="col-md-12 col-sm-12" id="inside-login-container">
                <div class="login-container">
                    <h2>Login</h2>
                </div>
               
                <form class="form-container" action="login.php" method="post">
                <?php include('errors.php'); ?>

                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Username"/><br><br>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password"/><br><br><br>
                    <input type="submit" value="LOGIN" name="login_user" style="font-size: 1.6rem; letter-spacing: 1px; background-color: #34A853; font-weight: bold; color: white;"><br><br>
                    <p>No account yet? <a href="index.php" style="color: black; text-decoration: none; font-weight: bold;">SIGN UP</a></p>
                </form>
                
            </div>
        </div>
    </div>
</body>

</html>