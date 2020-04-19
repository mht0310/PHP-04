<?php
    require_once('../../connection.php');

    $query_authors = "SELECT * FROM authors";
    $result_authors = $conn -> query($query_authors);
    $authors = array();
    while($row = $result_authors -> fetch_assoc()){
        $authors[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quản lý tác giả</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <h3 align="center">News IT | Zent VN</h3>
    <h3 align="center">Danh sách các tác giả</h3>
    <a href="author_add.php" type="button" class="btn btn-primary">Thêm mới</a>
    <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-success">
            <strong>Success - </strong><?= $_COOKIE['msg']?>
        </div>
    <?php } ?>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Giới thiệu</th>
            <th>Liên hệ</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($authors as $author){?>
            <tr>
                <td><?=$author['id']?></td>
                <td><?=$author['name']?></td>
                <td><img src="<?=$author['avatar']?>" width="120px" height="120px"></td>
                <td><?=$author['story']?></td>
                <td><?=$author['contact']?></td>
                <td><?=$author['email']?></td>
                <td>
                    <a href="author_detail.php?id=<?=$author['id']?>" type="button" class="btn btn-primary">Xem</a>
                    <a href="author_edit.php?id=<?=$author['id']?>" type="button" class="btn btn-success">Sửa</a>
                    <a href="author_del_action.php?id=<?=$author['id']?>" type="button" class="btn btn-warning">xoá</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html> 