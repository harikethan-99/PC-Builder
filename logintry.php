<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
  </head>
  <body>
    <center>
        
<?php
if(@$_GET['wrong']==true)
{
  echo '<script>
  window.alert("wrong username/password");
    </script>';
//echo "Wrong Username / Password";
}
        if(@$_GET['correct']==true)
        {
            echo '<script>
            window.alert("record updated successfully");
            </script>
            ';
        }
        if(@$_GET['wrong03']==true)
        {
            echo '<script>
            window.alert("Wrong Username");
            </script>
            ';
        }
?>
      <div class="animated fadeindown">

      <div class="logincomp">

    <div class="LOGIN">
      <img src="4.jpeg" alt="reload" width="100%" height="40%" >
      <form method="post" action="loginback.php">
      <label for="Username" class="logincompusername">Username</label>
      <input type="text" name="username" class="logincompusernameinput" placeholder="Username" required=""><br>
      <label for="Password" class="logincomppassword">password</label>
      <input type="password" name="password" class="logincomppasswordinput" placeholder="password" required=""><br>
      <a href="forgotpass.html" class="forgotpass">Forgot Password</a>
      <input type="submit" name="submit" class="logincompsubmit">

    </form>
                  <a href="signup.html" class="signup">Not a User ?</a>
  </div>
</div>
</div>
</center>

  </body>
</html>
