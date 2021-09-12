<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css\bootstrap.css" rel="stylesheet">
       <link href="css\ssheet.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

 <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
</head>
<body>
<!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">the list</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Library Stories</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">List Stories <b class="caret"></b></a>
              <ul class="dropdown-menu">

                <li class="active"><a href="Islamic.html">Mystery novels</a></li>
                <li><a href="Social.html"> Fantasy novels </a></li>
                <li><a href="romance.html">Romance novels </a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="register.php" id="myBtn">Register</a></li>
			<li><a href="Log in.html" id="myBtn" >Log in</a></li>
            <li><a href="Contact-us.php" id="myBtn">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </div>
	<br>
   
	  <!-- The Modal -->
<div id="myModal" >
  <!-- Modal content -->
  <!-- Send Message-->
  <div class="modal-content">
    <span class="close">x</span>
	
<h2>Contact Us</h2><br>
<?php
@$name = $_POST['name'];
@$email = $_POST['email'];
@$subject = $_POST['subject'];
@$msg = $_POST['msg'];
$header = "<br>My name is ".$name." and this is my Email ".$email."<br>";
$msg = $header;
@$send = mail("ahmed2ubuntu@gmail.com",$subject,$msg);
if($send){
echo "Sent!";
}else{
"There is something went wrong!";
}
?>
<form action="" method="post">
<div class="templatemo_form" >
                	<input name="name" type="text" class="form-control" id="fullname" placeholder="fullname" maxlength="40">
              	</div>
              	<div class="templatemo_form">
                	<input name="email" type="text" class="form-control" id="email" placeholder="email" maxlength="40">
              	</div>
               	<div class="templatemo_form">
                	<input name="subject" type="text" class="form-control" id="subject" placeholder="subject" maxlength="40">
              	</div>
              	<div class="templatemo_form">
	            	<textarea name="msg" rows="10" class="form-control" id="message" placeholder="message"></textarea>
              	</div>
              	<div class="templatemo_form" ><button type="button" class="btn btn-primary">submit</button></a>
				</div>
</form>


<script>
// Get the modal
var modal = document.getElementById('myModal');
 

// Get the button that opens the modal
var btn = document.getElementById("myBtn");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	
}
</script>

  <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
	<script src="js/bootstrape.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	


</body>
</html>