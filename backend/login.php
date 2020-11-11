<?php 
error_reporting(0);
$con = mysqli_connect("localhost","root", "", "reg");
if(isset($_POST['submit']))
    {
            $uname = $_POST["uname"];
            $password = $_POST["password"];
            $q = "select * from users where uname='$uname' and password='$password' LIMIT 1";
            $r= mysqli_query($con,$q);
            $count=mysqli_num_rows($r);
                if($count==1)
                {
                
?>
<script>
    window.location="chat.php";
</script>
<?php
}
?>
<script>
    alert("Username and password is incorrect!!");
</script>
<?php 
     }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="abc.css">

</head>
<body>
    <div id="database">
        
    </div>
<div class="container">
    <div class="row">

        <div align="center"><h2>  </h2>
        <img src="abc.png" alt="Chatbot img" class="chat" style="width:200px;height:200px;">
        </div>

            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login" action="#" method="post">
                <input type="text" placeholder="Username" name="uname" id="uname" required />
                <br><br>
                <input type="password" placeholder="Password" name="password" id="password" required />
                <br>
                <input type="submit" value="Sign In" name="submit" id="submit" class="btn btn-success btn-sm" />
                <br>
                <div class="remember-forgot">
                    
                </div>
                </form>
            </div>
        </div>
    </div>
    
</div>

</body>
</html>