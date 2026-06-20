
<?php
session_start();
include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

if(isset($_GET['id'])){

    $id = (int)$_GET['id'];

    $sql = "DELETE FROM posts WHERE id=$id";

    if(mysqli_query($conn, $sql)){

        header("Location: add_post.php");
        exit();

    }else{

        echo "Error deleting post.";

    }

}else{

    header("Location: add_post.php");
    exit();

}
?>

