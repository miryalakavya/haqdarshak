<?php 
include('signupuser.php');

$userName = $_SESSION['username'];
$db1 = mysqli_connect('localhost', 'root', '', 'assignment');
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
            <h3>Edit Profile -> <?php echo $_SESSION['username']; ?></h3>
        </div>

        <div class="divTwo">
            <div class="userDetail">
                <?php while($row = mysqli_fetch_array($query2)){ ?>
                    <form action="updateProfile.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 col-sm-12">
                        <label for="email">Email</label>
                        <input type="text" value="<?php echo $row['email']; ?>" name="email">
                        
                        <label for="fname">First Name</label>
                        <input type="text" value="<?php echo $row['fname']; ?>" name="fname">

                        <label for="dob">Date of Birth</label>
                        <input type="text" value="<?php echo $row['dob']; ?>" name="dob">

                        <label for="city">City</label>
                        <input type="text" value="<?php echo $row['city']; ?>" name="city">
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <label for="username">Username</label>
                        <input type="text" value="<?php echo $row['username']; ?>" name="username">

                        <label for="lname">Last Name</label>
                        <input type="text" value="<?php echo $row['lname']; ?>" name="lname">

                        <label for="address">Address</label>
                        <input type="text" value="<?php echo $row['address']; ?>" name="address">

                        <label for="country">Country</label>
                        <input type="text" value="<?php echo $row['country']; ?>" name="country">
                    </div>
                <?php } ?>
                    
                    <div class="col-md-12 col-sm-12" style="margin-top: 30px;">
                        <!-- <label for="image">Profile Picture</label>
                        <input type="file" placeholder="Upload an Image" name="image"><br><br> -->

                        <button type="submit" class="btn btn-success" name="update_profile" style="font-size: 2rem; color: white;"><b>Submit</b></button>
                        <a href="dashboard.php" style="background: red; font-size: 2rem; color: white; padding-bottom: 14px; padding-top: 6px; padding-left: 8px; padding-right: 8px; text-decoration: none; border-radius: 5px;">Cancel Edit</a>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['update_profile'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    // $image = mysqli_real_escape_string($db, $_POST['image']);

    $update = "UPDATE users SET email='$email', username='$username', fname='$fname', lname='$lname', dob='$dob', address='$address', city='$city', country='$country' WHERE username='$userName' ";
    mysqli_query($db1, $update);
    echo "<script>alert('Profile updated successfully'); document.location='dashboard.php'</script>";
}
?>