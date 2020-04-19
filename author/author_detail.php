<?php
    require_once ('../../connection.php');
    $author_id=$_GET['id'];
    $query_author = "SELECT * FROM authors WHERE id=".$author_id;
    $result_author = $conn -> query($query_author);
    $author = $result_author -> fetch_assoc();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết tác giả</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 align="center">News IT | Zent VN</h3>

        <h3 align="center">Xem chi tiết tác giả</h3>

        <hr>
        <div class="col-md-4">
            <img src="<?= $author['avatar']?>" width="100%">
        </div>
        <div class="col-md-8">
            <h2>Tác giả: <?= $author['name']?></h2>
            <h2>Liên hệ: <?= $author['contact']?></h2>
            <h2>Email: <?= $author['email']?></h2>
            <?php if($author['status']==1) { ?>
                <h2 style="color: green"> Trang thái tài khoản: Đang mở </h2>
             <?php
            }
            else{ ?>
                <h2 style="color: red"> Trang thái tài khoản: Đang khoá </h2>
            <?php
            }
            ?>
            </h2>
            <a href="author_edit.php?id=<?=$author['id']?>" type="button" class="btn btn-success">Sửa</a>
            <a href="author_del_action.php?id=<?=$author['id']?>" type="button" class="btn btn-warning">xoá</a>
        </div>

        <div class="col-md-12">
            <h2>Giới thiệu: <?= $author['story']?></h2>
        </div>
    </div>
</body>
</html> 