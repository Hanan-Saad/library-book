<html>
<body bgcolor="#E3E9F7">

<p align="center" > <font color="#0712AB" size="+2" <hn><B><big><sub>Welcome To Website Library Stories .. We Hope You Like It</sub></big></B> </hn></font></p>
<h3 align="center"><a href="index.html">Click here to back </a></h3>


<?php
include 'conne.php';
$name=  $email= $user_name= $passwerd= "";

@$name=$_POST['name'];
@$email=$_POST['email'];
@$user_name=$_POST['user_name'];
@$passwerd=$_POST['passwerd'];

$serv_name= $_SERVER['PHP_SELF'];

if (isset ($_POST['subm'])){
	$submt = mysqli_query($conn , "INSERT INTO users(name , email, user_name , passwerd)
	VALUES ('$name','$email','$user_name' , '$passwerd')" );

	if (isset ($submt)){
		
		echo "
		
		<h2 align='center'>insert is done </h2>
		
		";
		exit;
		
	}
	
	}
	
mysqli_close($conn);

?>


</body>
</html>
	
