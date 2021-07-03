<?php
include 'connect.php';

if(isset($_GET['del']))
{
	$delete_id=$_GET['del'];

	$query="DELETE FROM `post` WHERE `post_id`='$delete_id' ";

	if (mysql_query($query)) 
	{
		 echo "<script>alert('Post Has Been Deleted')</script>";
		 echo "<script>window.open('veiw_post.php','_self')</script>";
		 exit();
	}
} 
?>
