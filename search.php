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
<title>Wall</title>
<!--Navigation bar css link-->
<link href="CSS/GlobelNavigationBarCSS.css" rel="stylesheet" type="text/css"/>
<!--/Navigation bar css link-->
<!-- css link-->
<link rel="stylesheet" type="text/css" href="CSS/bannerplace.css">
<link rel="stylesheet" type="text/css" href="CSS/FooterCSS.css">
<link rel="stylesheet" type="text/css" href="CSS/ContentCSS.css">
<link rel="stylesheet" type="text/css" href="CSS/SearchformCSS.css">
<link rel="stylesheet" type="text/css" href="CSS/SidebarCSS.css">
<!--/css link-->
<link href="Images/ttlProfpic.png" rel="icon"><!--Title icon-->
<style type="text/css">
.articlelink{
  color:#000;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
}

.articlelink:hover,
.articlelink:focus{
  color:#1E90FF;
  cursor: pointer; 
}

.redmolink{
  color:#1E90FF;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
}

.redmolink:hover,
.redmolink:focus{
  color:#000;
  cursor: pointer; 
}

.pagejump{
  vertical-align:middle;
  text-align:center;
  padding:10px 20px;
  font-size:18px;
  display: inline-block;
  border: none;
  background-color:#F5F5F5;
  color:#1E90FF;
  font-weight:bold;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  border-radius:5px;
  display:inline-block;
  margin-left:10px;
  margin-bottom:10px;
}

.pagejump:hover,
.pagejump:focus{
  background-color:#1E90FF;
  color:#F5F5F5;
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
<div class="col-sm-9">
<?php
error_reporting(E_ALL^E_NOTICE);
include 'includes/connect.php';

if(isset($_GET['search']))
{
  $search_id=$_GET['value'];

  $page=$_GET['page'];

 if ($page=="" || $page=="1") 
 {
   $page1=0;
 }
 else
 {
  $page1=($page*5)-5;
 }

  $query="SELECT * FROM `post` WHERE `keyword` LIKE '%$search_id%' ORDER BY 1 DESC LIMIT $page1,5";
  $result=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($result))
  { 
    $post_id=$row['post_id'];
    $post_title=$row['title'];
    $post_date=$row['date'];
    $post_author=$row['author'];
    $post_keyword=$row['keyword'];
    $post_image=$row['image'];
    $post_content=substr($row['content'],0,500);   
?>
<table width="100%" border="0" align="center" class="artcl-box">
  <tr>
    <td colspan="2">
    <div class="topic">
      <a href="article.php?id=<?php echo $post_id;?>" class="articlelink"><?php echo $post_title; ?></a>
    </div>
    </td>
    </tr>
  <tr>
    <td width="25%" rowspan="2">
    <div class="img-wall">
    <a href="article.php?id=<?php echo $post_id;?>">
    <img src="Post_images/<?php echo $post_image; ?>" alt="" width="200" height="200" class="img-responsive"/>
    </a>
    </div>
    </td>
    <td width="75%">
    <div class="artcl"><a href="article.php?id=<?php echo $post_id;?>" class="articlelink"><?php echo $post_content;?></a></div></br>
    <div class="redmo"><a href="article.php?id=<?php echo $post_id;?>" class="redmolink">Read More</a></div></br>
    </td>
  </tr>
  <tr>
    <td>
      <div class="auth"><b>Post By:</b><?php echo $post_author; ?></div> <div class="date"><b>Published On:</b><?php echo $post_date;?></div>
    </td>
  </tr>
</table>
<?php }
  $rec="SELECT * FROM `post` WHERE `keyword` LIKE '%$search_id%'";
  $run = mysqli_query($conn,$rec);

  $count=mysqli_num_rows($run);
  $pagenum=$count/5;
  $pagenum=ceil($pagenum);
   
   for ($pass=1; $pass <=$pagenum ; $pass++) 
   { 
     ?><a href="index.php?page=<?php echo $pass; ?>" class="pagejump"><?php echo $pass; ?></a><?php
   } 
 }?>
</div>
<div class="col-sm-3">
<?php include 'includes/sidebar.php';?>
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