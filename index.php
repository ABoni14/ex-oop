<?php 
require_once __DIR__."/Post.php";
require_once __DIR__."/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php foreach($posts as $post) : 
  $new_post = new Post($post["title"], $post["date"], $post["author"], $post["text"])
  ?>
  <div>
    <h3><?php echo $new_post->title ?></h3>
    <h4><?php echo $new_post->date ?></h4>
    <p><?php echo $new_post->author ?></p>
    <p><?php echo $new_post->getExcept() ?></p>
  </div>
  <?php endforeach; ?>

</body>
</html>