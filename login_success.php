<?php
session_start();

$_SESSION['myusername'] = 'myname';

if (isset($_POST['myusername'])) {
    $user = $_POST['myusername'];
    if (!isset($_SESSION["myusername"]) || $user != $_SESSION['myusername']) {
        header("Location: main_login.php");
    }
}
else {
    echo "
	<h2 align='center'>login successful </h2>";
}
?>

<html>
<body bgcolor="#E3E9F7">


<p align="center" > <font color="#0712AB" size="+2" <hn><B><big><sub>Welcome To Website Library Stories .. Login Successful</sub></big></B> </hn></font></p>
<h3 align="center"><a href="index.html">Click here to back </a></h3>
</body>
</html>