<div class="artcl-mo" align="center">More Articles</div>
<div >
<?php
include 'connect.php';
$query="SELECT * FROM `post` ORDER BY rand() LIMIT 5";
$result=mysqli_query($conn,$query);

while ($row=mysqli_fetch_array($result)) 
{
  $post_id=$row['post_id'];
  $post_title=$row['title'];
  $post_image=$row['image'];
  $post_content=substr($row['content'],0,200);
?>
<div class="sidebar">
  <div class="topic-side">
  <a href="article.php?id=<?php echo $post_id;?>">
  <?php echo $post_title; ?>
  </a>
  </div>
  <div class="img-side">
  <img src="Post_images/<?php echo $post_image; ?>" alt="" class="img-responsive">
  </div>
  <div class="artcl-side">
  <?php echo $post_content;?><br>
  </div>
  <div class="redmo-side">
    <a href="article.php?id=<?php echo $post_id;?>">Read More</a>
  </div>
</div>
<?php } ?>
</div>