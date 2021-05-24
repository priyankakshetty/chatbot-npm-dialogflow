<?php 
$con = mysqli_connect("localhost","root", "", "reg");
if(isset($_POST['submit']))
{
	$fname= $_POST['first_name'];
	$lname= $_POST['last_name'];
	$uname= $_POST['display_name'];
	$email= $_POST['email'];
	$pass=$_POST['password'];

$q="INSERT INTO users(fname,lname,uname,email,password)VALUES('$fname','$lname','$uname','$email','$pass')";
$r= mysqli_query($con,$q);
if(!$con)
	?>
<script type="text/javascript">
	 window.location="chat.php";
</script>
<?php

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register to Pantomath</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="azs.css">
<script>
	function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('password_confirmation').value) {
    		    document.getElementById('submit').disabled = false;
    			document.getElementById('validpass').innerHTML = '';
    } else {
        document.getElementById('submit').disabled = true;
        document.getElementById('validpass').style.color = 'red';
    	document.getElementById('validpass').innerHTML = 'not matching';
    }
}
</script>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form"  method="post">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username Name" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" tabindex="5"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onchange='check_pass();'/>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onchange='check_pass();'/> <span id='validpass'></span>
					</div>
				</div>
			</div>
	
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-md-12"><input type="submit" value="Register" class="btn btn-primary btn-lg btn-block" tabindex="7" name="submit" id="submit"/></div>
			</div>
		</form>
	</div>
</div>
</div>
</body>
</html>