<?php
    require_once ("../../connection.php");

    $author_id=$_POST['id'];
    $query_author = "SELECT * FROM authors WHERE id=".$author_id;
    $result_author = $conn -> query($query_author);
    $author = $result_author -> fetch_assoc();

    //upload file
    $target_dir = "../../uploads/imageAuthor/";
    $avatar=$author['avatar'];
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    if(move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)){
        $avatar1 = basename($_FILES["avatar"]["name"]);
        $avatar = "http://localhost:8080/f0php02/F0-PHP02-B2/blog-php02/uploads/imageAuthor/".$avatar1;
    }
    $name =$_POST['name'];
    $story = $_POST['story'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE authors SET name='".$name."', story='".$story."', contact='".$contact."', email='".$email."', password='".$password."', avatar='".$avatar."' WHERE id=".$author_id;
    $action = $conn->query($query);
    if($action == true) {
        setcookie('msg','Cập nhật thành công', time()+5);
        header('Location: authors.php');
    }
    else{
        setcookie('msg','Cập nhật không thành công', time()+5);
        header('Location: author_edit.php?id='.$author_id);
    }
?> 