<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post" action="insert_post.php" enctype="multipart/form-data">
<table width="99%" border="0" class="inputbox">
  <tr>
    <td width="16%"><div class="word">Post Title</div></td>
    <td width="84%"><input type="text" name="tfs_title" class="txt"></td>
  </tr>
  <tr>
    <td><div class="word">Post Author</div></td>
    <td><input type="text" name="tfs_author" class="txt"></td>
  </tr>
  <tr>
    <td><div class="word">Post Keyword</div></td>
    <td><input type="text" name="tfs_keyword" class="txt"></td>
  </tr>
  <tr>
    <td><div class="word">Post Image</div></td>
    <td><input type="file" name="tfs_image" class="btnfile"></td>
  </tr>
  <tr>
    <td valign="top"><div class="word">Post Content</div></td>
    <td><p>
      <textarea name="tfs_content" class="tinymce"></textarea>
      <script type="text/javascript" src="../js/jquery.min.js"></script>
      <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>
      <script type="text/javascript" src="../tinymce/js/tinymce/init-tinymce.js"></script>
    </p></td>
  </tr>
    <tr>
    <td><input type="hidden" name="tfs_username" value=<?php echo $_SESSION['username']; ?>></td>
  </tr>
  <tr align="center" valign="middle">
  <td></td>
    <td><p>&nbsp;
      </p>
      <p>
        <input type="submit" name="submit" value="Publish" class="btnsub">
      </p></td>
    </tr>
</table>  
</form>
</body>
</html>
<?php
include 'connect.php';

if (isset($_POST['submit'])) 
{
  $post_title=$_POST['tfs_title'];
  $post_date=date('y-m-d');
  $post_author=$_POST['tfs_author'];
  $post_keyword=$_POST['tfs_keyword'];
  $post_image=$_FILES['tfs_image']['name'];
  $post_imagetmp=$_FILES['tfs_image']['tmp_name'];
  $post_content=$_POST['tfs_content'];
  $post_uname=$_POST['tfs_username'];

  if ($post_title=='' or $post_content=='') 
  {
    echo "<script>alert('Some filed left')</script>";
    exit();
  }
  else
  {
    move_uploaded_file($post_imagetmp,"../Post_images/$post_image");
    $query="INSERT INTO `post`(title,date,author,keyword,image,content,user_name) VALUES ('$post_title','$post_date','$post_author','$post_keyword','$post_image','$post_content','$post_uname')";

    if(mysql_query($query))
    {
      echo "<script>alert('Post Published')</script>";
      echo "<script>window.open('veiw_post.php','_self')</script>";
    }
  }
}
?>