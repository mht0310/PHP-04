<?php
    require_once ("../../connection.php");
    $author_id = $_GET['id'];
    $query = "DELETE FROM authors WHERE id=".$author_id;
    $status = $conn->query($query);
    if($status == true) {
        setcookie('msg','Xoá thành công', time()+5);
    }
    else{
        setcookie('msg','Xoá không thành công', time()+5);
    }
    header('Location: authors.php'); 