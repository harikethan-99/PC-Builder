<?php
$servername="localhost";
$username="root";
$password="";
$database="pcbuilder";
$conn = mysqli_connect($servername,$username,$password);
$con = mysqli_connect($servername,$username,$password,$database);
$updateusername = $_POST['username'];
$updatepassword = $_POST['pass'];
$query = mysqli_query($con,"UPDATE signup SET pass='$updatepassword' WHERE username = '$updateusername'");
$query1 = mysqli_query($con,"UPDATE signup SET conpass='$updatepassword' WHERE username = '$updateusername'" );
if(mysqli_affected_rows($con)>0)
{
	 $message02="Wrong password and confirm password must be same";
            header("location:logintry.php?correct=$message02"); 

}
else
{
    $message03="Wrong username";
    header("location:logintry.php?wrong03=$message03");
}