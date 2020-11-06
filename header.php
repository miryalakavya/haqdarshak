<?php 
  // session_start();
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!--container-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="top">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#" id="website-name" style="color: white;"><span class="glyphicon glyphicon-education"></span> My Account </a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['username'])): ?>
        <li style="color: #3BABFD; padding: 12px;">Welcome <?php echo $_SESSION['username']; ?> !!</li>
        <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-home" id="span-hover"></span> Dashboard</a></li>
        <li style="background-color: #3BABFD;"><a href="dashboard.php?logout='1'" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      <?php else: ?>
        <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li style="background-color: #3BABFD;"><a href="login.php" style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php endif; ?>
    </ul>
   </div>
  </div>
</nav>
<!--/container-->