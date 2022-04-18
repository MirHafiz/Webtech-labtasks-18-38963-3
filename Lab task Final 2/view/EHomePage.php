<!DOCTYPE html>
<html lang="en">
<head>
<title>Daily Outfit Attire Management System. </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PRODUCT</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <a href="EProfile.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PROFILE</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="addProduct.php" class="w3-bar-item w3-button">PRODUCT UPLOAD</a>
        <a href="showALLProducts.php" class="w3-bar-item w3-button">ALL PRODUCT</a>
         <a href="searchProduct.php" class="w3-bar-item w3-button">SEARCH PRODUCT</a>
        <a href="ELogout.php" class="w3-bar-item w3-button">LOGOUT</a>
      </div>
    </div>
    <a href="EAllUserinfo.html" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT US</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PRODUCT</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>

</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="img/1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>BOLD</h3>  
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>ClASSIC</h3>  
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="img/3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>STYLE</h3>   
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ABOUT US</h2>
    <p class="w3-opacity"><i>DAILY OUTFIT ATTIRE MANAGEMENT SYSTEM</i></p>
    <p class="w3-justify">Influential, innovative and progressive, This is reinventing a wholly modern approach to fashion. Under the new vision of creative director Alessandro Michele, the House has redefined luxury for the 21st century, further reinforcing its position as one of the world’s most desirable fashion houses. Eclectic, contemporary, romantic products represent the pinnacle of Italian craftsmanship and are unsurpassed for their quality and attention to detail.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>BE BOLD</p>
        <img src="img/4.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>BE CLASSIC</p>
        <img src="img/5.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>BE STYLIST</p>
        <img src="img/6.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">PRODUCTS</h2>


      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="img/7.jpg" alt="T-SHIRT" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>T-SHIRT</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">View Products</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img/8.jpg" alt="TOPS" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>TOPS</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal2').style.display='block'">View Products</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="img/9.jpg" alt="Pants" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>PANTS</b></p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal3').style.display='block'">View Products</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>T-SHIRT</h2>
      </header>
      <div class="w3-third">
        <p>800TAKA</p>
        <img src="img/13.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>900TAKA</p>
        <img src="img/14.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>1000TAKA</p>
        <img src="img/15.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>

        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
      </div>
    </div>
  </div>
  <!-- Ticket Modal2 -->
  <div id="ticketModal2" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal2').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>TOPS</h2>
      </header>
      <div class="w3-third">
        <p>800TAKA</p>
        <img src="img/16.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>900TAKA</p>
        <img src="img/17.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>1000TAKA</p>
        <img src="img/18.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal2').style.display='none'">Close <i class="fa fa-remove"></i></button>
      </div>
    </div>
  </div>
  <!-- Ticket Modal3 -->
  <div id="ticketModal3" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal3').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>PANTS</h2>
      </header>
      <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>800TAKA</p>
        <img src="img/10.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>900TAKA</p>
        <img src="img/11.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>1000TAKA</p>
        <img src="img/12.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal3').style.display='none'">Close <i class="fa fa-remove"></i></button>
      </div>
    </div>
  </div>
  <iframe src="EHomepageProduct.php"style="width: 1679px; height: 200px;" style="border: 2px solid black;"></iframe>
  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>

    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Dhaka,Banani<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +01765946465<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <p id="demo"></p>
      <click type="button" onclick='document.getElementById("demo").innerHTML ="https//www.facebook.com"'>Click For Fb Page Link</click>
        
    </div>
  </div>
  </div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">&copy; Daily Outfit Attire Management System. 2022</p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var modal = document.getElementById('ticketModal2');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var modal = document.getElementById('ticketModal3');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>