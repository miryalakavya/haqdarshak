<?php include('signupuser.php'); ?>

<!DOCTYPE html>
<html>

<head>
<title>Signup</title>
<link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
<link rel="stylesheet" href="style.css" type="text/css"/>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
    body{
        background-color: #6fc349;
        background-repeat: no-repeat;
        width:100%;
    }
    #signupDesign{
        padding: 90px 40px;
    }
    input[type=text], input[type=password], input[type=date] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 15px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    input[type=text]:focus, input[type=password]:focus, input[type=date]:focus {
      background-color: #ddd;
      outline: none;
    }
</style>

</head>
<body>
<?php include('header.php') ?>

    <div class="container" id="signupDesign">
        <div class="row">
            
            <div class="col-md-6 col-sm-6" style="float:right;">
                <h3 style="font-size: 48px;taxt-align:center;">Get Startedt</h3>
               
                <form method="post" action="index.php">
                <?php include('errors.php'); ?>
                
                    <label for="email">Email <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="usrname">Username <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="fname">First Name <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter First Name" name="fname" required>

                    <label for="lname">Last Name <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter Last Name" name="lname" required>

                    <label for="dob">Date of Birth <span style="color: red;">*</span></label>
                    <input type="date" placeholder="Enter DOB" name="dob" required>

                    <label for="address">Address <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter Address" name="address" required>

                    <label for="city">City <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter City" name="city" required>

                    <label for="country">Country <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter Country" name="country" required>

                    <label for="psw">Password <span style="color: red;">*</span></label></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-confirm">Confirm Password <span style="color: red;">*</span></label></label>
                    <input type="password" placeholder="Confirm Password" name="psw_confirm" required><br><br>

                    <div class="col-md-4 col-sm-4" style="padding: 0px;">
                        <button type="submit" class="btn btn-danger" name="reg_user" style="font-size: 2rem; color: white; width: 90%;"><b>Register</b></button>
                    </div>
                    <div class="col-md-8 col-sm-8" style="padding: 0px;">
                        <p>By creating an account you agree to our <a href="#" style="color: dodgerblue">Terms & Privacy</a>.</p>
                        <p>Already have an account? <span><a href="login.php" style="color: black; text-decoration: none; font-weight: bold;">LOGIN</a></span></p>
                    </div>
                    
          </form>
            </div>
        </div>
    </div>

</body>
</html>