<?php 

require_once('../../connection.php' );

$id=$_GET['id'];
//Load category
$query_post= "SELECT * FROM posts WHERE id= ".$id;
$post = $conn->query($query_post)->fetch_assoc();


 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">POST Detail</h3> 
    <hr>
    <h2>Title:<?= $post['title']?></h2>
    <h2>Description: <?= $post['decription']?></h2>
    <h2>Thumbnail: <img src="<?= $post['thumbnail']?>" width="200px" height="150px" ></h2>
    <h2>Created_at:  <?= $post['created_at']?></h2>
    <p><?= $post['contents']?></p>
    </div>
</body>
</html> 