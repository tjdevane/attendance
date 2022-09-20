<?php 

	require_once 'db/conn.php';

	// get values from post operation
	if(isset($_POST['submit'])){
		// extract vuales from the $_POST array
		$id = $_POST['id'];
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$contact = $_POST['phone'];
		$specialty = $_POST['specialty'];

		//call crud function
		$result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);
		//redirect to index.php
		if($result){
			header("Location: viewrecords.php");
		}else{
			include 'includes/errormessage.php';
		}
	}else{
		include 'includes/errormessage.php';
	}

 ?>