<?php 
	$title = 'Success';
	require_once 'includes/header.php';
	require_once 'db/conn.php';


	if(isset($_POST['submit'])){
		// extract vuales from the $_POST array
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$contact = $_POST['phone'];
		$specialty = $_POST['specialty'];
		// call function to insert and track if success or not
		$isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $specialty);

		if($isSuccess){
			include 'includes/successmessage.php';
		}
		else{
			include 'includes/errormessage.php';
		}
	}
?>

	

	<div class="card" style="width: 18rem;">
	<div class="card-body">
	    <h5 class="card-title">
	    	<!-- 'first_name' is referencing the 'name' attribute in the index file  -->
	    	<?php echo $_POST['first_name'] . ' ' . $_POST['last_name']; ?>
	    </h5>
	    <h6 class="card-subtitle mb-2 text-muted">
	    	<?php echo $_POST['specialty']; ?>
	    </h6>
	    <p class="card-text">Date of Birth: 
	    	<?php echo $_POST['dob'];  ?>
	    </p>
	    <p class="card-text">Email: 
	    	<?php echo $_POST['email']; ?>
	    </p>
	    <p class="card-text">Phone: 
	    	<?php echo $_POST['phone']; ?>
	   	</p>
	  </div>
	</div>


	 <!-- This prints out values that were passed to the action page using method='get' -->
	  <!-- <div class="card-body">
	    <h5 class="card-title"><?php //echo$_GET['first_name'] . ' ' . $_GET['last_name']; ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted"><?php //echo $_GET['specialty']; ?></h6>
	    <p class="card-text">Date of Birth: <?php //echo $_GET['dob'];  ?></p>
	    <p class="card-text">Email: <?php //echo $_GET['email']; ?></p>
	    <p class="card-text">Phone: <?php //echo $_GET['phone']; ?></p>
	  </div>
	</div> -->
	<!-- display data in raw format -->
	<!-- <?php 
		//echo $_GET['first_name'];
		//echo $_GET['last_name'];
		//echo $_GET['dob'];
		//echo $_GET['specialty'];
		//echo $_GET['email'];
		//echo $_GET['phone'];
	?> -->

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?> 