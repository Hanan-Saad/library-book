<?php
session_start();

ob_start();

$host="localhost"; // Host name 
$username="root";   // username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
$conn = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 

mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
if(isset($_POST['myusername']) && $_POST['myusername']!=''){
    $myusername=$_POST['myusername']; 
   $mypassword=$_POST['mypassword']; 

    // To protect MySQL injection (more detail about MySQL injection)
   $myusername = stripslashes($myusername);
   $mypassword = stripslashes($mypassword);
   $myusername = mysql_real_escape_string($myusername);
   $mypassword = mysql_real_escape_string($mypassword);
   $sql="SELECT * FROM members WHERE username='$myusername' and     password='$mypassword'";
  $result=mysql_query($sql);  

  // Mysql_num_row is counting table row
if ($result) {
    $count = mysql_num_rows($result);
}
else {
    $count = 0;
}

 // If result matched $myusername and $mypassword, table row must be 1 row
 if($count==1){

 // Register $myusername, $mypassword and redirect to file "login_success.php"

   $_SESSION['myusername'] = "myusername";
    $_SESSION['mypassword'] = "mypassword";
  header("location:login_success.php");
 }
else {
 echo "Wrong Username or Password";
}


}
ob_end_flush();
?>