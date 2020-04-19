<?php
    require_once ("../../connection.php");

    $pass = $_POST['password'];
    $password = md5($pass);

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $name = $_POST['name'];
    $story = $_POST['story'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $creat_date = date('Y-m-d H:i:s');

    $query = "INSERT INTO authors (name,story,contact,email,password,creat_date,avatar) VALUES ('".$name."','".$story."','".$contact."','".$email."','".$password."','".$creat_date."')";
    $action = $conn->query($query);
    if($action == true) {
        setcookie('msg','Thêm mới thành công', time()+5);
        header('Location: authors.php');
    }
    else{
        setcookie('msg','Thêm mới không thành công', time()+5);
    //        header('Location: post_edit.php?id='.$id);
}