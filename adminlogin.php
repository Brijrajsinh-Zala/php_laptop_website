<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
	<title></title>
	<style type="text/css">
		.gradient-custom 
		{
			background: #6a11cb;
			background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
			background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
		}
	</style>
</head>
<body>
	<section class="vh-100 gradient-custom">
  	<div class="container py-5 h-100">
    	<div class="row d-flex justify-content-center align-items-center h-100">
      		<div class="col-12 col-md-8 col-lg-6 col-xl-5">
        		<div class="card bg-dark text-white" style="border-radius: 1rem;">
          			<div class="card-body p-5 text-center">
          				<form name="myForm" onsubmit="return validateForm()" method="post">
            			<div class="mb-md-5 mt-md-4 pb-5">
              				<h2 class="fw-bold mb-2 text-uppercase">Online Laptop Shop Login</h2>
              				<p class="text-white-50 mb-5">Please enter your login and password!</p>
              				<div class="form-outline form-white mb-4">
                				<input type="email" id="typeEmailX" class="form-control form-control-lg" name="Email" />
                				<label class="form-label" for="typeEmailX">Email</label>
              				</div>
              				<div class="form-outline form-white mb-4">
                				<input type="password" id="typePasswordX" class="form-control form-control-lg" name="Password"/>
                				<label class="form-label" for="typePasswordX">Password</label>
              				</div>
              				<p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
              				<button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              				<?php 
								$conn = mysqli_connect('localhost','admin','admin','online_laptop_shop');
								if (isset($_POST['Email']) && isset($_POST['Password'])) 
								{
									$useremail = $_POST['Email'];
									$userpassword = $_POST['Password'];
									if (empty($useremail))
									{
										header("Location: login.php");
										exit();
									}
									else if (empty($userpassword))
									{
										header("Location: login.php");
										exit();
									}
									$sql = "select * from registration_details where user_email ='$useremail' and user_password ='$userpassword'";
									$result = mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) === 1) 
									{
										$rows = mysqli_fetch_assoc($result);
										if ($rows['user_email'] === $useremail && $rows['user_password'] === $userpassword) 
										{
											echo "Login Successful";
											header("Location:adminside.php");	
										}
									}
									else
									{
										echo "Please enter Correct User email or Password";
									}
								}
							?>
              				<div class="d-flex justify-content-center text-center mt-4 pt-1">
                				<a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                				<a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                				<a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              				</div>
						</div>
						</form>
            			<div>
              				<p class="mb-0">Don't have an account? <a href="registration.html" class="text-white-50 fw-bold">Sign Up</a>
              				</p>
            			</div>
          			</div>
        		</div>
      		</div>
    	</div>
  	</div>
	</section>

</body>
</html>