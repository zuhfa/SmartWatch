<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form validation</title>
  <?php include'Links.php' ?>
   <?php include'Dbconnect.php' ?>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #98afc7;
}

.wrapper{
  width: 380px;
  padding: 40px 30px 50px 30px;
  background: #e5e4e2;
  border-radius: 5px;
  text-align: center;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.1);
}
.wrapper header{
  font-size: 35px;
  font-weight: 600;
  color: #737ca1;
}
.wrapper .d-flex a i{
  margin-top: 10px;
  padding-right: 20px;
  font-size: 30px;
  color: #737ca1;
}
.wrapper form{
  margin: 40px 0;
}
form .field{
  width: 100%;
  margin-bottom: 20px;
}

form .field .input-area{
  height: 50px;
  width: 100%;
  position: relative;
}
form input{
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 45px;
  font-size: 18px;
  background: none;
  /* caret-color: #5372F0; */
  border-radius: 5px;
  border: 1px solid #bfbfbf;
  border-bottom-width: 2px;
  transition: all 0.2s ease;
}

.field .input-area i{
  position: absolute;
  top: 50%;
  font-size: 18px;
  pointer-events: none;
  transform: translateY(-50%);
}

.input-area .icon{
  left: 15px;
  color: #bfbfbf;
  transition: color 0.2s ease;
}

form input:focus ~ .icon
{
  color: #4863A0;
}

form input::placeholder{
  color: #bfbfbf;
  font-size: 17px;
}

form .pass-txt{
  text-align: left;
  margin-top: -10px;
 
}
form .pass-txt a{
  text-decoration: none;
}

form input[type="submit"]{
  height: 50px;
  margin-top: 30px;
  color: #fff;
  padding: 0;
  border: none;
  background: #2b547e;
  cursor: pointer;
  border-bottom: 2px solid rgba(0,0,0,0.6);
  transition: all 0.3s ease;
}
form input[type="submit"]:hover{
  background: #728fce;
}
</style>
</head>

<?php
if(isset($_POST['submit'])){
    $email = $_POST['nemail'];
    $password = $_POST['npassword'];

    $email_search="select * from adminlogin where Email = '$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $pass = mysqli_fetch_assoc($query);

        
        if ($password === $pass["password"]) {
      
            ?>
            <script>
                alert("Successful")
            </script>
            <?php
             header("Location: Dashboard.php");
        }
        else{
            ?>
    <script>
        alert("invalid password")
    </script>
    <?php
        }
      }
        else{
            ?>
            <script>
                alert("Invalid Email")
            </script>
            <?php
        }
    }

?>

<body>
  <div class="wrapper">
    <div class="d-flex">
  <a href="index.php" ><i class="fa-solid fa-house"></i></a> 
    <header>Login Form</header>
    </div>
    <form action="#" method="post">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email Address" name="nemail" required >
          <i class="icon fas fa-envelope"></i>
        </div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="npassword" required>
          <i class="icon fas fa-lock"></i>
        </div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" value="Login" class="btn" name="submit">
    </form>
   
  </div>

 
</body>
</html>