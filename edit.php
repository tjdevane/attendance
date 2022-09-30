<?php 
	$title = 'Edit Record';
	require_once 'includes/header.php';
	require_once 'includes/auth_check.php';
	require_once 'db/conn.php';

	$results = $crud->getSpecialties();

	if(!isset($_GET['id'])){
		include 'includes/errormessage.php';
		header("Location: viewrecords.php");
	}
	else{
		$id = $_GET['id'];
		$attendee = $crud->getAttendeeDetails($id);	

	
?>


	<h1 class="text-center">Edit Record</h1>

	<form method="post" action="editpost.php">
		<input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
		<div class="form-group">
	    	<label for="first_name" class="form-label">First Name</label>
	    	<input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="first_name" name="first_name">
	    </div>
	    <div class="form-group">
	    	<label for="last_name" class="form-label">Last Name</label>
	    	<input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="last_name" name="last_name">
	    </div>
	    <div class="form-group">
	    	<label for="dob" class="form-label">Date of Birth</label>
	    	<input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
	    </div>
	    <div class="form-group">
	    	<label for="specialty">Area of Expertise</label>
		    	<select class="form-control" id="specialty" name="specialty">
				  <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {  ?>
				  	<option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
				  		<?php echo $r['name']; ?>
				  	</option>
				  <?php } ?>
				</select>
	    </div>
		<div class="form-group">
	    	<label for="exampleInputEmail1" class="form-label">Email address</label>
	    	<input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="email" name="email" aria-describedby="emailHelp">
	    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
	    </div>
	  	</div>
	  	<div class="form-group">
	    	<label for="phone" class="form-label">Contact Number</label>
	    	<input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone">
	    <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.
	    </div>
	  	</div>
		<a href="viewrecords.php" class="btn btn-default" name="submit">Back to List</a>
		<button type="submit" class="btn btn-success" name="submit">Save Changes</button>
	</form>
<?php } ?>
	<br>
	<br>
	<br>
	<br>
<?php require_once 'includes/footer.php'; ?> 











