<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
	<div class="signup-form">
		<?php 
			$conn = mysqli_connect('localhost','admin','admin','online_laptop_shop');
			if ($conn) 
			{
				echo '<span style="font-size: 30px;">Connection Succesfull</span>';
			}
			else
			{
				echo '<span style="font-size: 30px;">Connection Unsuccesfull</span>';
			}
		?>
	    <form name="myForm" onsubmit="return validateForm()" method="post">
			<h2>Sign Up</h2>
			<p>Please fill in this form to create an account!</p>
			<hr>
	        <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<span class="fa fa-user"></span>
						</span>                    
					</div>
					<input type="text" class="form-control" name="username" placeholder="Username" id="txtusername">
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['username'])) 
					{
						echo '<span style="color:red;">Username is required</span>';
					}
				}
			?>
	        <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-paper-plane"></i>
						</span>                    
					</div>
					<input type="email" class="form-control" name="email" placeholder="Email Address">
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['email'])) 
					{
						echo '<span style="color:red;">Email is required</span>';
					}
				}
			?>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-lock"></i>
						</span>                    
					</div>
					<input type="text" class="form-control" name="password" placeholder="Password">
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['password'])) 
					{
						echo '<span style="color:red;">Password is required</span>';
					}
				}
			?>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-lock"></i>
							<i class="fa fa-check"></i>
						</span>                    
					</div>
					<input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password">
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['confirm_password'])) 
					{
						echo '<span style="color:red;">Confirm password is required</span>';
					}
					elseif ($_POST['password']!=$_POST['confirm_password']) 
					{
						echo '<span style="color:red;">Password doesnt match</span>';
					}
				}
			?>
	        <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<img src="person-lines-fill.svg" />
						</span>                    
					</div>
					<input type="text" class="form-control" name="Contact" placeholder="Contact Number">
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['Contact'])) 
					{
						echo '<span style="color:red;">Contact is required</span>';
					}
				}
			?>
	        <div class="form-group" >
				<div class="input-group">
					<div class="input-group-prepend" style="margin-right: 20px;">
						<span class="input-group-text">
							<img src="gender-ambiguous.svg">
						</span>                    
					</div>
					<div class="form-check" style="margin-right: 20px;">
	  					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	  					<label class="form-check-label" for="flexRadioDefault1" >
	    				MALE
	  					</label>
	  					<p>   </p>
	  					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	  					<label class="form-check-label" for="flexRadioDefault1">
	    				FEMALE
	  					</label>
					</div>
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['flexRadioDefault'])) 
					{
						echo '<span style="color:red;">Gender is required</span>';
					}
				}
			?>
	        <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<img src="house.svg">
						</span>                    
					</div>
					<input type="text" class="form-control" name="add" placeholder="Address">
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['add'])) 
					{
						echo '<span style="color:red;">Username is required</span>';
					}
				}
			?>
	        <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<img src="buildings.svg">
						</span>                    
					</div>
					<input type="text" class="form-control" name="city" placeholder="City">
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['city'])) 
					{
						echo '<span style="color:red;">Username is required</span>';
					}
				}
			?>
	        <div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<img src="globe-central-south-asia.svg">
						</span>                    
					</div>
					<input type="text" class="form-control" name="state" placeholder="State">
				</div>
	        </div>
	        <?php
	        	if (isset($_POST['submit'])) 
	        	{	 	
	        		if (empty($_POST['state'])) 
					{
						echo '<span style="color:red;">Username is required</span>';
					}
				}
			?>
	        <div class="form-group">
				<label class="form-check-label"><input type="checkbox"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
			</div>
			<div class="form-group">
	            <button type="submit" id="btncheck" name="submit" class="btn btn-primary btn-lg">Sign Up</button>
	        </div>
	    </form>
	</div>
		<div class="text-center">Already have an account? <a href="login.html">Login here</a></div>
	</div>
	
	<script type="text/javascript">
		/*function validateForm ()
      	{
	        let a = document.forms["myForm"]["username"].value;
	        if (a == "") 
	        {
	          alert("Username must be filled out");
	          return false;
	        }
	        let b = document.forms["myForm"]["email"].value;
	        if (b == "") 
	        {
	          alert("Email must be filled out");
	          return false;
	        }
	        let c = document.forms["myForm"]["password"].value;
	        if (c == "") 
	        {
	          alert("Password must be filled out");
	          return false;
	        }
	        let d = document.forms["myForm"]["confirm_password"].value;
	        if (d == "") 
	        {
	          alert("Confirm Password must be filled out");
	          return false;
	        }
	        let e = document.forms["myForm"]["Contact"].value;
	        if (e == "") 
	        {
	          alert("Contact must be filled out");
	          return false;
	        }
	        let f = document.forms["myForm"]["flexRadioDefault"].value;
	        if (f == "") 
	        {
	          alert("Gender must be filled out");
	          return false;
	        }
	        let g = document.forms["myForm"]["add"].value;
	        if (g == "") 
	        {
	          alert("Address must be filled out");
	          return false;
	        }
	        let h = document.forms["myForm"]["city"].value;
	        if (h == "") 
	        {
	          alert("City must be filled out");
	          return false;
	        }
	        let i = document.forms["myForm"]["state"].value;
	        if (i == "") 
	        {
	          alert("State must be filled out");
	          return false;
	        }
        }*/
	</script>
</body>
</html>