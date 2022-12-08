<?php  
session_start();
include("connection.php");
include("functions.php");
$user_date=check_login($con);


?>
<html>
<head>
     <title>Coursera</title>
</head>
<body>
     <a href="logout.php">Logout </a>
     <h1>Welcome to coursera</h1>
      <br>
     <h2> Hello , <?php echo $user_date['user_name'];?></h2>
</body>
</html>
