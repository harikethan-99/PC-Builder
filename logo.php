<html>
<head>
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="cameraandassemble.css">
	<link rel="stylesheet" href="cameracapture.css">
	<link rel="stylesheet" href="assem.css">
    <link rel="stylesheet" href="logo.css">
    <link rel="stylesheet" href="logo2.css">
	  <link rel="stylesheet" href="logo.css">
	<title>Upload Image</title>
    <style>
.userprofile{
    margin-Left:1250px;
    }
    .username1
        {
            margin-Left:1320px;
            margin-top:-48px;
            color: azure;
        }
    </style>
</head>
<body bgcolor="mainbod">
    <div class="userprofile">
<img src="user.png" width="40px" height="40px"></div>
    
    <?php
    if(@$_GET['lastusername']==true)
    {
        ?>
    <div class="username1">
        <h3><?php echo $_GET['lastusername']?></h3></div>
    <?php
    }
    ?>
<h1 class="mainheading animated flipInX">SUDO - ASSEMBLER</h1>
	

    <center>





	<!--sdjkfbjbisnsnsnvdnvsnsdnnsn-->
		<div class="animated animatedFadeInUp fadeInUp delay-1s">

	<input type="button" name="image" value=" " id="myBtn" class="camera"><br>
</div>
	<div id="myModal" class="modal">


  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
  </div>
      <form action="camera.php" type="POST" enctype="multipart/form-data">
      	<div>
      	<img src="camera1.png">
    </div>
   <div class="modal-body">
   	  	<div class="upload">
	<input type="file" name="image"></div>
<input type="submit" name="submit" value="Start Test">
</div>
    </form>
</div>

</div>
<div class="animated fadeInRight faster">
<div class="line">
	</div>
</div>

	<div class="animated animatedFadeInDown fadeInDown delay-1s">
	<input type="button" name="button" id="myBtn1" class="assemble"><br>
</div>
<div id="myModal1" class="modal1">
	 <div class="modal-content1">
    <div class="modal-header1">
      <span class="close1">&times;</span>
  </div>
   <div class="modal-body1">
<div class="animated  fadeInLeft delay-1s">
<input type="button" name="submit" id="game" class="game">
</div>
<div class="animated fadeInDown delay-1s">
<input type="button" name="designer" id="design" class="designer">
</div>
<div class="animated fadeInRight delay-1s">
<input type="button" name="developer"  id="develop" class="developer">
</div>
</div>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

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
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
var btn2 = document.getElementById("game");
btn2.onclick = function() {
  window.open("assemble1.php");
}
var btn3 = document.getElementById("design");
btn3.onclick = function() {
  window.open("assemble1.php");
}
var btn4 = document.getElementById("develop");
btn4.onclick = function() {
  window.open("assemble1.php");
}
</script>
    
    
    <!--needing system -->
    
   
    
    
    
    
    <!-- needing system ends -->
    
        <!--GRID LAYOUT BEGINS FOR FEATURES-->
    
    <div class="grid-container">
    
    <div class="grid-items">
        <header class="features-heading"><h3>Why</h3></header>
        <p class="features-desc">We are unique in our own way
        </p>
    <div class="grid-items">


        <header class="features-heading"><h3>Recommendation</h3></header>
        <p class="features-desc">The website will recommend the user with other systems or parts that will best suit. 
        </p>
        <div class="grid-items">
        <header class="features-heading"><h3>Scanning</h3></header>
        <p class="features-desc">Be aware of the part you use it and why you use it because you don't want to waste money and space.
        </p>
        <div class="grid-items">
        <header class="features-heading"><h3>Chat Bot</h3></header>
        <p class="features-desc">This Site has a 24/7 support where you can ask queries and that would be resolved easily and quickly by our bot  
</p>
            
        </div>
                </div>
    
    </div>
        </div>
        
     
    </div>

    <video autoplay muted loop width="780" height="800" class="vid">
            <source src="Buildd.mp4">
            </video>
    <!--GRID LAYOUT ENDS-->
        
    

    <div>
	<nav class="navigation">
<!--


	<div>

	<ul class="heading">

	<li class="heading1"><a href="login.html" class="linkheading1" alt="reload">Member</a></li><br>
	<label class="User">User</label>

        <li class="heading2"><a href="signup.html" class="linkheading1" alt="reload">Signup</li>
</ul>
</div>
-->
        </nav>
          </div>
    
   <!-- </div>-->
  
 <!--    </div>-->
</center>
    
    <!--footer-->
        <footer>
            <div class="down">
                         <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                <li><a herf="#">About us</a></li>
                <li><a herf="#">Forum</a></li>
                <li><a herf="#">Android App</a></li>
                </ul>
            </div>
            <div class="col span-2-of-2">
            <ul class="social-links">
<li><a href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"></a></li>
<li><a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"></a></li>
<li><a href="#"><img src="https://img.icons8.com/officel/16/000000/twitter.png" height="40" width="40"></a></li>
                </ul>
                    </div>
                        </div>
        </div>
           
        </footer>


	</body>