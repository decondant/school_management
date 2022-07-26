<!DOCTYPE html>
<html>
<head><!-- 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body  class="body_deg"> <!-- //background="/img/d.jpg" -->
	<center>
		<div class="form_deg">

			<center class="tittle_deg">
				Login Form
			</center>
			
			<form action="login_check.php" method="POST" class="login_form">
				<div>
					<label class="label_deg">Username</label>
					<input type="text" name="username">
					<i class="fa fa-check-circle"></i>
					<i class="fa fa-exclamation-circle"></i>			
					<small>Error message</small>
				</div>
				<div>
					<label class="label_deg">Password</label>
					<input type="Password" name="password">
					<i class="fa fa-check-circle"></i>
					<i class="fa fa-exclamation-circle"></i>							
				</div>
				<div>
					<input class="btn btn-primary" value="Login" type="submit" name="submit">
				</div>
			</form>
		</div>
	</center>
</body>
</html>