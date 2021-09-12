


<html>
<head>
<title>registration</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
	 <link href="css/ssheet.css" rel="stylesheet">


</Head>
<body>

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
            <li><a href="register.php"  id="myBtn">Register</a></li>
			 <li><a href="main_login.php" id="myBtn" >Log in</a></li>
            <li><a href="Contact-us.php" id="myBtn">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </div>
<div id="myModal" >
  <div class="modal-content"> 
    <span class="close">x</span>
           
<form action="regist.php" method ='POST'  role="form">

            	      	<div class="templatemo_form" >
                	 <input name='name' type='text' class="form-control" id='fullname' placeholder='Name' maxlength='40'><br> <br>
              </div>
			  
			  <div class="templatemo_form" >
                	 <input name='email' type='text'  class="form-control"  id='email' placeholder='Email' maxlength='40'><br> <br>
              </div>
			  
			  
            <div class="templatemo_form" >
               <input name='user_name' type='text' class="form-control"  id='subject' placeholder='Username' maxlength='40'><br> <br>
            </div>
			
			
            <div class="templatemo_form" >  	
	       <input name='passwerd'   type='password' class="form-control"  id='message' placeholder='passwerd' maxlength='40'><br> <br>
              </div>
			
		     <input name='subm'  value ='Register' type='submit' class="btn btn-primary"  id='submit' placeholder='submit' maxlength='40'> 

             </form>
			
  </div> 
  </div>
			
 <!-- end Registration -->
  
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
 <div class="footer text-center" style="background-color:gray">
        <p><a href="#" style="color:white">Mnal</a>  Copyright © 2016 All Rights Reserved </p>
    </div><!-- End Footer -->

  <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
	<script src="js/bootstrape.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>


</body>
</html>