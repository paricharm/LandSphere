<?php
include 'include/config.php';
if(isset($_GET['type']) && $_GET['type']=='delete_post')
{
    $id = $_GET['postId'];
    $sql = $pdo->prepare("delete from post where post_id=$id");
    if($sql->execute())
    {
        header("location:home.php?All_POST");
    }
}

?>