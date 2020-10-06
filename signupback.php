<?php

$var = $_POST['submit'];
if(isset($var))
{
$servername = "localhost";
$username = "root";
$password = "";
$database = "pcbuilder";

$con = mysqli_connect($servername,$username,$password);
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
//	die("connection failed".mysqli_connect_error());
}
else
{
	//echo "Connected succesfully";	
		$sql = "create database signup";
	if(mysqli_query($con,$sql))
	{
//		echo "Database signup created succesfully";
	}
	else
	{
	//echo "connection error".mysqli_error($con);
	}
		$table = "create table signup(firstname varchar(50), secondname varchar(50), mobileno int, email varchar(50), username varchar(20) PRIMARY KEY,pass varchar(10),conpass varchar(10))";
	if(mysqli_query($conn,$table))
	{
	//	echo "Table created succesfully";
	}
	else
	{
//	echo "There was an error in creating a table".mysqli_error($conn);
	}
	/* $name01 = $_POST["fname"];*/
   if(!preg_match("/^[a-zA-Z ]*$/", $_POST["fname"])) {
 	 echo"Only letters and white space allowed";
   }
   		else
   		{
   				$insert = "INSERT into signup(firstname , secondname , mobileno , email , username,pass,conpass)VALUES('$_POST[fname]','$_POST[sname]','$_POST[mobile]','$_POST[email]','$_POST[username]','$_POST[password]','$_POST[confirmpass]')";
	$pass1 = $_POST['password'];
	$pass2 = $_POST['confirmpass'];
	$mob = $_POST['mobile'];
	if(strlen($mob)==10)
	{
		if($pass1==$pass2)
		{
		if(mysqli_query($conn,$insert))
		{
            include "login.html";
		//echo "record added sucessfully";
		}
		else 
		{
		echo "insertion error".mysqli_error($conn);
		}
   		
		}
		else
		{
            $message="Wrong password and confirm password must be same";
            header("location:signuptry.php?wrong=$message"); 

		//header("location:signup.html?notsame=password and confirm password must be same");
		}
	}
	else
	{
        $message01="Wrong password and confirm password must be same";
            header("location:signuptry.php?wrong01=$message01"); 

	}

	}
	
		}
   	
   	}
	


else 
{
	echo "click submit to proceed da";
}

?>
