<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới tác giả</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 align="center">News IT | Zent VN</h3>
        <h3 align="center">Thêm mới tác giả</h3>
        <hr>
        <?php if(isset($_COOKIE['msg'])){ ?>
            <div class="alert alert-warning">
                <strong>Thất bại</strong>Thêm mới không thành công
            </div>
        <?php } ?>
        <form action="author_add_action.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Giới thiệu</label>
                <textarea class="form-control" id="" placeholder="" name="story" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="">Liên hệ</label>
                <input type="text" class="form-control" id="" placeholder="" name="contact">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="" name="password">
            </div>
            <div class="form-group">
                <label for="">Ảnh đại diện</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar">
            </div>
            <button type="submit"  class="btn btn-primary">Thêm</button>
        </form>
    </div>

</body>
</html>