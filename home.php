<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="top-bar">
	 	<div class="logo">
	 	<img src="./img/logo.png" alt="logo" width="150px" height="150px">	 		
        </div>
            <div class="top-bar-text">
              <h3>Opening Hour:-</h3><br>
              <p>Mon - Fri, 8:00am - 9:00pm</p>                                 
              <h3>Call Us:-</h3><br>
              <p style="padding: 50px">+012 345 6789</p>                               
              <h3>Email Us:-</h3><br>
              <p style="padding: 35px">info@example.com</p>
            </div>                              
        </div>
        <ul class="nav-bar">
      	<li><a href="" class="active">Home</a></li>
        <li><a href=""></a></li>
        <li style="float:right"><a href="logout.php"><button class="w3-button w3-round-xlarge">Logout</button></a></li>
        </ul>
    </div>
</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>