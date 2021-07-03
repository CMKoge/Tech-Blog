<?php
  session_start();  
?>
<html>
<head>
  <title>Admin Panel</title>
  <link href="../Images/ttlProfpic.png" rel="icon"><!--Title icon-->
  <link rel="stylesheet" type="text/css" href="../CSS/AdminCSS.css">
</head>
<body>
<form method="post" action="login.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="400" border="0" align="center" class="logbox">
    <tr>
    <td colspan="2" align="center" valign="middle"><div class="admin">Techfities Writer Login</div></td>
    </tr>
    <tr>
        <td width="127"><div class="word">User Name</div></td>
      <td width="255"><div align="justify">
        <input type="text" name="tfs_username" class="logtxt">
      </div></td>
    </tr>
    <tr>
        <td><div class="word">Password</div></td>
      <td><div align="justify">
        <input type="password" name="tfs_password" class="logtxt">
      </div></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input type="submit" name="login" value="Login" class="btnsub"></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
  include 'connect.php';

  if(isset($_POST['login']))
  {
    $username=mysql_real_escape_string($_POST['tfs_username']);
    $password=mysql_real_escape_string($_POST['tfs_password']);

    $encrypt=md5($password);

    $query="SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
    $result=mysql_query($query);

    if(mysql_num_rows($result)>0)
    {
        $_SESSION['username']=$username;
        
        echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
      echo "<script>alert('Username or Password incorrect')</script>";
    }
  }  
?>