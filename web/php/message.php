<?php

?>

<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap php.">
    <meta name="author" content="www.girlunity.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


	<meta charset="utf-8">
	<title>My Profile | girl unity</title>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/style.css" />

	<link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicondrawn.png">

 
</head>
<body>

<!-- Navbar -->
		<nav class="navbar navbar-default">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" id="name" href="index.html"><img style="width: 72px;" src="../images/faviconteal2.png" alt="girl unity Lightbulb">girl unity</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="index.html">HOME</a></li>
		        <li><a href="#mission">MISSION</a></li>
		        <li><a href="aboutus.html">ABOUT US</a></li>
		        <li><a href="php/dashboard.php">MY PROFILE</a></li>
		        <li><a href="mailto:girlunity.contact@gmail.com">CONTACT</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

<div class="form">
<h1>girl unity</h1>
<h3><?php echo $_SESSION['username']; ?>'s Messaging Chat</h3>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>Start chatting!</p>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57a9f99937f9b71822fbf032/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<div class="container">
<a href="dashboard.php">Profile</a>
<p><a href="index.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>

