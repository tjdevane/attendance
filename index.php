<?php 
	$title = 'Index';
	require_once 'includes/header.php';
	require_once 'db/conn.php';

	$results = $crud->getSpecialties();
?>

<!-- 
	- first name
	- last name
	- DOB
	- Specialty (Database Admin, Software Developer, Web Admin)
	- Email
	- Contact Number
	- -->
<!-- 
	- name attribute
	- for server side
	- it's like a variable
	- the only way php can access the value inside
	- -->
	<h1 class="text-center">Registation for IT Conference</h1>

	<form method="post" action="success.php">
		<div class="form-group">
	    	<label for="first_name" class="form-label">First Name</label>
	    	<input required type="text" class="form-control" id="first_name" name="first_name">
	    </div>
	    <div class="form-group">
	    	<label for="last_name" class="form-label">Last Name</label>
	    	<input required type="text" class="form-control" id="last_name" name="last_name">
	    </div>
	    <div class="form-group">
	    	<label for="dob" class="form-label">Date of Birth</label>
	    	<input type="text" class="form-control" id="dob" name="dob">
	    </div>
	    <div class="form-group">
	    	<label for="specialty" class="form-label">Area of Expertise</label>
		    	<select class="form-select" id="specialty" name="specialty">
				  <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {  ?>
				  	<option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
				  <?php } ?>
				</select>
	    </div>
		<div class="form-group">
	    	<label for="exampleInputEmail1" class="form-label">Email address</label>
	    	<input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
	    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
	    </div>
	  	</div>
	  	<div class="form-group">
	    	<label for="phone" class="form-label">Contact Number</label>
	    	<input type="text" class="form-control" id="phone" name="phone">
	    <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.
	    </div>
	  	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
	<br>
	<br>
	<br>
	<br>
<?php require_once 'includes/footer.php'; ?> 











