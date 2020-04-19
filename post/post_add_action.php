<?php
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');



	require_once('../../connection.php');
	$target_dir = "../../img/";  // thư mục chứa file upload
	$thumbnail="";

	$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

	$status_upload = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

	if ($status_upload) { // nếu upload file không có lỗi 
	    $thumbnail = basename( $_FILES["thumbnail"]["name"]);
	}

	$title = $_POST['title'];
	$description = $_POST['decription'];
	$contents = $_POST['contents'];
	
	
	$status = 0;
		if(isset($_POST['status'])) $status = $_POST['status'];

		$category_id=1;
		 // $category_id= $_POST['category_id'];

	
		$author_id=1;
		
		$created_at =  date('Y-m-d H:i:s');

	$query = "INSERT INTO posts(title,decription,contents,thumbnail,category_id,author_id,status,created_at) VALUES('".$title."','".$description."','".$contents."','".$thumbnail."','".$category_id."','".$author_id."','".$status."','".$created_at."');";

	$status = $conn->query($query);
	if ($status == true) {
		setcookie('msg','Thêm mới thành công',time()+5);
		header('Location:posts.php ');
	}else{
		setcookie('msg','Thêm mới không thành công',time()+5);
		header('Location:post_add.php ');
	}
?>