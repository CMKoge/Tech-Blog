<?php
  session_start();

  if(!isset($_SESSION['username']))
  {
    header("location:login.php");
  }
  else
  {  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--bootstrap-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" /><!--Local-->
<link rel="stylesheet"  href="../Bootstrap/css/bootstrap.min.css"/><!--Local-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--/bootstrap-->
<title>Writer Control Panel</title>
<!--Navigation bar css link-->
<link href="../CSS/GlobelNavigationBarCSS.css" rel="stylesheet" type="text/css"/>
<!--/Navigation bar css link-->
<!-- css link-->
<link href="../CSS/bannerplace.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../CSS/FooterCSS.css">
<link rel="stylesheet" type="text/css" href="CSS/ContentCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/AdminCSS.css">
<link rel="stylesheet" type="text/css" href="../CSS/SearchformCSS.css">
<!--/css link-->
<link href="../Images/ttlProfpic.png" rel="icon"><!--Title icon-->
<style type="text/css">
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
    <div class="col-sm-10"><img src="../Images/Banner.png" id="namebanner" alt="Banner" class="img-responsive" align="top" /></div>
   <div class="col-sm-2">
   <ul class="social-media">
    <li class="fb"><a href="https://www.facebook.com/Techfities-607419352755418" target="Blank"><img src="../Images/facebook.png"  class="img-responsive" alt="fbicon"/></a></li>
    <li class="g"><a href="https://plus.google.com/u/0/105103746717715367915/posts?hl=en" target="Blank"><img src="../Images/google-plus.png" class="img-responsive" alt="g+icon" /></a></li>
    <li class="tw"><a href="https://twitter.com/techfities" target="Blank"><img src="../Images/Twittr.png" class="img-responsive" alt="twicon" /></a></li>
  </ul>
  </div>
  </div><!--primary row close-->
    <div class="row"><!--primary row open-->
    <div class="col-xs-12">
 <!--Navigation bar open-->
 <ul class="navbar"><!--Navigation bar open-->
  <li><a href="../index.php">Wall</a></li>
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
<form action="../search.php" method="get" enctype="multipart/form-data">
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
<div class="row">
  <div class="col-xs-12">
    <h2 align="left">Veiw Post</h2>
  </div>
</div>
<div class="row"><!--primary row open-->
<div class="col-sm-2">
<div align="justify" class="wish"><?php echo $_SESSION['username']; ?></div>
  <ul class="nav nav-pills nav-stacked">
  <li><a href="index.php?Insert=Insert">Insert Post</a></li>
  <li><a href="#">Veiw Post</a></li>
  <li><a href="logout.php">Logout</a></li> 
  </ul>
</div>
<div class="col-sm-10">
<?php
 if(isset($_GET['Insert']))
 {
  include 'insert_post.php';
 }  
?>
<table width="99%" border="1"  class="inputbox">
  <tr align="center" valign="middle">
    <th>Post ID</th>
    <th>Post Date</th>
    <th>Post Author</th>
    <th>Post Title</th>
    <th>Post Keyword</th>
    <th>Post Image</th>
    <th>Post Content</th>
    <th>Edit Post</th>
    <th>Delete Post</th>
  </tr>
  <tr align="justify">
  <?php
   include 'connect.php';
   $unmae=$_SESSION['username'];
   $query="SELECT * FROM `post` WHERE `user_name`= '$unmae' ORDER BY 1 DESC";
   $result=mysql_query($query);

   while ($row=mysql_fetch_array($result))
   {
      $post_id=$row['post_id'];
      $post_date=$row['date'];
      $post_author=$row['author'];
      $post_title=$row['title'];
      $post_keyword=$row['keyword'];
      $post_image=$row['image'];
      $post_content=substr($row['content'],0,100);    
  ?>
    <td align="center"><?php echo $post_id; ?></td>
    <td><?php echo $post_date; ?></td>
    <td><?php echo $post_author; ?></td>
    <td><?php echo $post_title; ?></td>
    <td><?php echo $post_keyword; ?></td>
    <td align="center" valign="middle"><img src="../Post_images/<?php echo $post_image; ?>" width="200" height="200" class="img-responsive"></td>
    <td><?php echo $post_content; ?></td>
    <td align="center"><a href="edit.php?edit=<?php echo $post_id ?>">Edit</a></td>
    <td align="center"><a href="delete.php?del=<?php echo $post_id ?>">Delete</a></td>
  </tr>
      <?php } ?>
</table>

</div>
    </div><!--primary row close-->
    <div class="row"><!--Footer primary row open-->
    <div class="col-sm-12">
    <?php include '../includes/footer.php'; ?>
    </div>
    </div><!--Footer primary row close-->
  </div><!--container close-->
<!--javascript-->
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>