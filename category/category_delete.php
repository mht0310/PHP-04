<?php
	require_once('../../connection.php'	);
	$id = $_GET['id'];
	$query = "DELETE FROM categories  WHERE id= ".$id; 
	$status = $conn->query($query);

	if($status == true){
		setcookie('msg','Xóa thành công',time()+5);
		
	} else{
		setcookie('msg','Xóa nhật thất bại', time()+5);
		
	}
	header('Location: categories.php' );
 ?>