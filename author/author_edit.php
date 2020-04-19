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
    <title>Cập nhật tác giả</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 align="center">News IT | Zent VN</h3>

        <h3 align="center">Cập nhật thông tin tác giả</h3>

        <hr>
        <?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-warning">
                <strong>Thất bại</strong>Cập nhật không thành công
            </div>
        <?php } ?>
        <form action="author_edit_action.php" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $author['id']?>">
            <div class="form-group">
                <label for="">Tên tác giả</label>
                <input type="text" class="form-control" id="" value="<?= $author['name']?>" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Giới thiệu</label>
                <textarea class="form-control" id="" name="story" rows="5"><?= $author['story']?></textarea>
            </div>
            <div class="form-group">
                <label for="">Liên hệ</label>
                <input type="text" class="form-control" id="" value="<?= $author['contact']?>" placeholder="" name="contact">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" value="<?= $author['email']?>" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="text" class="form-control" id="" value="<?= $author['password']?>" placeholder="" name="password">
            </div>
            <div class="form-group col-md-12">
                <label for="">Ảnh đại diện</label>
                <img class="col-md-2" src="<?=$author['avatar']?>" width="150px" height="150px">
                <input type="file"  id="" value="" placeholder="" name="avatar">
            </div>
            <br>
            <button type="submit"  class="btn btn-primary">Cập nhật</button>
        </form>
    </div>

</body>
</html> 