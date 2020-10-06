<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database="pcbuilder";
$conn = mysqli_connect($servername,$username,$password);
$con = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
else
{
$myusername = $_POST['username'];
$mypass = $_POST['password'];
$db = mysqli_select_db($conn, "signup");
//echo"sucess";
/*$query = mysqli_query($conn,"SELECT * FROM register where username = '$myusername'and pass='$mypass'");*/
$query = mysqli_query($con, "SELECT * FROM signup WHERE pass='$mypass' AND username='$myusername'");
/*$result = mysqli_query($con,$query);*/
$rows = mysqli_num_rows($query);
if($rows >= 1){
//	echo("Login Successfull");
//    $lastuser = $myusername;
//    header("location:Ram.php?lastusername=$lastuser");
//   
    $_SESSION["varname"] = $myusername;
    $lastuser = $myusername;
    header("location:logo.php?lastusername=$lastuser");
    
	}
else
{
    $message="Wrong Username / Password";
header("location:logintry.php?wrong=$message"); 


}
}
?>
