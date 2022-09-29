<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/site.css" />
	
	<title>Attendance - <?php echo $title ?></title>
</head>
<body>
	<div class="container">

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php">IT Conference</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      
	      <div class="navbar-nav me-auto">
            <a class="nav-item nav-link active" href="index.php">Home</a>
            <a class="nav-item nav-link" href="viewrecords.php">View Attendees</a>
          </div>

          <div class="navbar-nav ms-auto">
          	<?php  
          		if(!isset($_SESSION['userid'])){
          	?>
            <a class="nav-item nav-link active" href="login.php">Login</a>
          <?php }else{  ?>
          		<a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span></a>
          		<a class="nav-item nav-link active" href="logout.php">Logout</a>
          <?php } ?>
          </div>
	    </div>
	  </div>
	</nav>
	<br/>