<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>signup</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="animate.css"
  </head>
  <body class="animated fadein">
    <center>

        <?php
if(@$_GET['wrong']==true)
{
  echo '<script>
  window.alert("password and confirm password must be same");
    </script>';
//echo "Wrong Username / Password";
}
        if(@$_GET['wrong01']==true)
        {
            
  echo '<script>
  window.alert("MObile Number should be 10 digits");
    </script>';
        }
?>

        <div class="outer">
      <br>
      <h2 class="header">SignUp</h2>
      <form class="form" action="signupback.php" method="post" >
      <label for="firstname" class="labfirst">FirstName</label>
      <input type="text" name="fname" value="" required="" class="inputfirst"><br>
      <label for="secondname" class="labsecond">SecondName</label>
      <input type="text" name="sname" value="" required="" class="inputsecond"><br>
      <label for="mobileno" class="labmobno">Mobile Number</label>
      <input type="number" name="mobile" value="" required="" class="inputmob"><br>
      <label for="email" class="labemail">Email</label>
      <input type="text" name="email" value="" required="" class="inputemail"><br>
      <label for="username" class="labusername">Username</label>
      <input type="text" required="" name="username" class="inputusername" value=""><br>
      <label for="password" class="labpassword">Password</label>
      <input type="password" name="password" value="" required="" class="inputpassword"><br>
      <label for="confirmpass" class="labconfirmpass">ConfrimPassword</label>
      <input type="password" name="confirmpass" value="" required="" class="inputconfirmpass"><br>
      <input type="submit" name="submit" value="submit" class="submit","animated flip">

      </form>
  
    </div>
    </center>
  </body>
</html>
