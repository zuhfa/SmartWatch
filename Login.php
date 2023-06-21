<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="loginstyle.css" />
    <title>Sign in & Sign up Form</title>
     <!-- PHP CONNECTION FILE -->
	 <?php include 'Dbconnect.php' ?>
  </head>
  <?php

if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($conn, $_POST['nname']);
    $email = mysqli_real_escape_string($conn, $_POST['nemail']);
    $mobile = mysqli_real_escape_string($conn, $_POST['nphone']);
    $password = mysqli_real_escape_string($conn, $_POST['npassword']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['ncpassword']);
   

    $emailquery = "select * from signupdb where Email = '$email'"; 
    $emailquery_run = mysqli_query($conn, $emailquery);
    $emailquery_num = mysqli_num_rows($emailquery_run);
    if($emailquery_num > 0)
    {
		?>
		<script>
			alert("Email Already Exists");
		</script>
		<?php
    }
	else 
	{
		if($password === $cpassword)
		{
			$insertquery = "insert into signupdb (UName,	Email,	Phone,	Password,	CPassword) values ('$name', '$email', '$mobile', '$password', '$cpassword')";
			$iquery = mysqli_query($conn, $insertquery);
			if($iquery)
            {
				?>
				<script>
					alert("Account Created Successfully");
					window.location.href = "success.php";
				</script>
				<?php
            }
            else
            {
               ?>
			   <script>
				alert("Error Occured");
				</script>
				<?php
            }
		}
		else
		{
			?>
			<script>
				alert("Passwords do not match");
			</script>
			<?php
		}
	}
}
?>

<?php
if(isset($_POST['login']))
{
  $email = $_POST['nemail'];
	$password = $_POST['npassword'];

	$loginquery = "select * from signupdb where Email = '$email'";
	$query = mysqli_query($conn, $loginquery);
	
	$count = mysqli_num_rows($query);
	
	if($count)
	{
		$pass = mysqli_fetch_assoc($query);
    $_SESSION['user_id'] = $pass['id'];

		if($password === $pass["Password"])
		{
			?>
		    <script>
			   alert("Login Successfull");
			   window.location.href = "index.php";
		    </script>
		    <?php
		}
		else
		{
			?>
		    <script>
			  alert("Invalid Password");
		    </script>
		    <?php
		}	
	}
	else
	{
		?>
		<script>
			alert("Invalid Email");
		</script>
		<?php
	}	
}
?>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name= "nemail" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name= "npassword" placeholder="Password" />
            </div>
            <div class="pass-txt"><a href="forgot.php">Change/Forgot password?</a></div>
            <input type="submit" value="Login"  name="login" class="btn solid" />
           
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name= "nname" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name= "nemail" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" name= "nphone" placeholder="Contact" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name= "npassword" placeholder="Password" />
            </div>
            <div class="input-field"> 
              <i class="fas fa-lock"></i>
              <input type="password" name= "ncpassword" placeholder="Confirm Password" />
            </div>
            <input type="submit" class="btn" name="submit" value="Sign up" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
