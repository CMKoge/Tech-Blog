<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--bootstrap-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" /><!--Local-->
<link rel="stylesheet"  href="Bootstrap/css/bootstrap.min.css"/><!--Local-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--/bootstrap-->
<title>About Techfities</title>
<!--Navigation bar css link-->
<link href="CSS/GlobelNavigationBarCSS.css" rel="stylesheet" type="text/css"/>
<!--/Navigation bar css link-->
<!-- css link-->
<link rel="stylesheet" type="text/css" href="CSS/bannerplace.css">
<link rel="stylesheet" type="text/css" href="CSS/FooterCSS.css">
<link rel="stylesheet" type="text/css" href="CSS/ContentCSS.css">
<link rel="stylesheet" type="text/css" href="CSS/SearchformCSS.css">
<link rel="stylesheet" type="text/css" href="CSS/SidebarCSS.css">
<link rel="stylesheet" type="text/css" href="CSS/AboutCSS.css">
<!--/css link-->
<link href="Images/ttlProfpic.png" rel="icon"><!--Title icon-->
<style type="text/css">

.visit{
  font-style:italic;
  color:#808080;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
}

.visit:hover,
.visit:focus{
  color:#1E90FF;
  cursor: pointer; 
}

a:link {
  text-decoration: none;
}
a:visited {
  text-decoration: none;
}
a:hover {
  text-decoration: none;
}
a:active {
  text-decoration: none;
}
</style>
<!--JavaScript-->
<script type="text/javascript">
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function NavFunc() {
    document.getElementsByClassName("navbar")[0].classList.toggle("responsive");
}
</script>
<style type="text/css">
.topic{
  font-size:36px;
  }
  .artcl-mo{
  vertical-align:middle;
  text-align:center;
  font-size:18x;
}
</style>
</head>
<body>
<div class="container"><!--container open-->
  <div class="row"><!--primary row open-->
    <div class="col-sm-10"><img src="Images/Banner.png" id="namebanner" alt="Banner" class="img-responsive" align="top" /></div>
   <div class="col-sm-2">
   <ul class="social-media">
    <li class="fb"><a href="https://www.facebook.com/Techfities-607419352755418" target="Blank"><img src="Images/facebook.png"  class="img-responsive" alt="fbicon"/></a></li>
    <li class="g"><a href="https://plus.google.com/u/0/105103746717715367915/posts?hl=en" target="Blank"><img src="Images/google-plus.png" class="img-responsive" alt="g+icon" /></a></li>
    <li class="tw"><a href="https://twitter.com/techfities" target="Blank"><img src="Images/Twittr.png" class="img-responsive" alt="twicon" /></a></li>
  </ul>
  </div>
  </div><!--primary row close-->
    <div class="row"><!--primary row open-->
    <div class="col-xs-12">
 <!--Navigation bar open-->
 <ul class="navbar"><!--Navigation bar open-->
  <li><a href="index.php">Wall</a></li>
  <li><a href="http://www.techfities.online/forum/">Forum</a></li>
  <li class="search"> 
  <!-- Trigger/Open The Modal -->
          <div id="myBtn">Search</div>
            <!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content -->
<div class="modal-content">
<span class="close">×</span>
<!--Search Box-->
<form action="search.php" method="get" enctype="multipart/form-data">
  <input type="text" name="value" placeholder="Search..." class="srhtxt">
  <input type="submit" name="search" value="Search" class="btnsrh">
</form>
 </div>
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
</div>
</li>
  <li class="icon"><a href="javascript:void(0);" onclick="NavFunc()">&#9776;</a></li>
</ul><!--Navigation bar close-->
<!--Navigation bar close-->
</div>
</div><!--primary row close-->
<div class="row"><!--primary row open-->
<div class="col-xs-12">
<div class="row"><!--secondary row open-->
<div class="col-xs-12">
 <p class="detail-box"><font class="name"><font class="t">T</font>echfities</font> is a Sri Lankan Technology Blogsite That Willing to Share Knowledge About Technology.
    In substance <fontclass="name">Techfities</font> Blogsite Publish Prticles in Sinhala With Hope of Provide Our Service to All Knowledge Hunters in Sri Lanka. Also visit <a href="http://www.cybercreations.online/" target="Blank" class="visit">Cyber Creation</a> Site to Veiw More About Our Other Services.</p> 
</div>
</div><!--secondary row close-->
<div class="row"><!--secondary row open-->
<div class="col-xs-12">
 <p class="detail-box">I, Charuna Madubasha Kotawalagedara, am a IT student living in Kandy, Sri Lanka. <font class="name">Techfities</font> Blogsite Created as A Web Project for HDCS/SE in <a href="http://www.infortec.lk/web/" target="Blank" class="visit">Infortec International Asia Campus</a>. Visit <a href="http://www.cybercreations.online/" target="Blank" class="visit">Cyber Creation</a> Site Get Know About Interesting IT Solution You Can Purchase In Sri Lanka.</p> 
</div>
</div><!--secondary row close-->
<div class="row"><!--secondary row open-->
<div class="col-xs-12">
  <p class="detail-box">Design of <font class="name">Techfities</font> is Originally Created for <font class="name">Techfities</font>.</p>
</div>
</div><!--secondary row close-->
<div class="row"><!--secondary row open-->
<div class="col-xs-12">
  <P class="detail-box">Using Word <font class="name">Techfities</font> for Other Purposes is Prohibited.</P>
</div>
</div><!--secondary row close-->
</div>
</div><!--primary row close-->
<div class="row"><!--primary row open-->
<div class="col-xs-12">
<?php include 'includes/footer.php'; ?>
</div>
</div><!--primary row close-->
  </div><!--container close-->
<!--javascript-->
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>