<?php
include '../include/config.php';
session_start();
if(isset($_GET['type']) && $_GET['type'] == 'delete_category')
{
    $id = $_GET['CatId'];
    $sql = $pdo->prepare("delete from category where cat_id = $id");
    if($sql->execute())
    {
        header("location:home.php?All_Category");
    }else{
        exit;
    }
}
elseif(isset($_GET['type']) && $_GET['type'] == 'delete_course')
{
    $id=$_GET['CourseId'];
    $sql = $pdo->prepare("delete from course where id=$id");
    if($sql->execute())
    {
        header("location:home.php?All_Course");
    }else{
        exit;
    }
}
elseif(isset($_GET['type']) && $_GET['type'] == 'delete_user')
{
    $id=$_GET['UserId'];
    $sql = $pdo->prepare("delete from user where id=$id");
    if($sql->execute())
    {
        header("location:home.php?All_User");
    }else{
        exit;
    }
}
?>