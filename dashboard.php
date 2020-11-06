<?php 
include('signupuser.php');

$userName = $_SESSION['username'];
if(!$userName){
    header('location: login.php');
}

$db1 = mysqli_connect('localhost', 'root', '', 'haqdarshak');
$query1 = "SELECT * FROM users WHERE username = '$userName'";
$query2 = mysqli_query($db1, $query1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account - Dashboard</title>
    
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
    input[type=text] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 15px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
      color: black;
    }

    label{
        display: block;
        font-size: 20px;
    }
</style>

</head>
<body>
    <?php include('header.php') ?>
    <div class="mainDiv">
        <div class="divOne">
            <h3>Dashboard -> <?php echo $_SESSION['username']; ?></h3>
        </div>

        <div class="divTwo">
            <div class="userDetail">
                <?php while($row = mysqli_fetch_array($query2)){ ?>
                    <div class="col-md-6 col-sm-12">
                        <label for="email">Email</label>
                        <input type="text" placeholder="<?php echo $row['email']; ?>" readonly>
                        
                        <label for="fname">First Name</label>
                        <input type="text" placeholder="<?php echo $row['fname']; ?>" readonly>

                        <label for="dob">Date of Birth</label>
                        <input type="text" placeholder="<?php echo $row['dob']; ?>" readonly>

                        <label for="city">City</label>
                        <input type="text" placeholder="<?php echo $row['city']; ?>" readonly>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="username">Username</label>
                        <input type="text" placeholder="<?php echo $row['username']; ?>" readonly>

                        <label for="lname">Last Name</label>
                        <input type="text" placeholder="<?php echo $row['lname']; ?>" readonly>

                        <label for="address">Address</label>
                        <input type="text" placeholder="<?php echo $row['address']; ?>" readonly>

                        <label for="country">Country</label>
                        <input type="text" placeholder="<?php echo $row['country']; ?>" readonly>
                    </div>
                <?php } ?>
                    
                    <div class="col-md-12 col-sm-12" style="margin-top: 30px; text-align: center;">
                        <a href="updateProfile.php" style="display: inline-block; font-size: 2rem; background: red; color: white; padding: 8px; text-decoration: none; border-radius: 5px;">Edit Profile</a>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>