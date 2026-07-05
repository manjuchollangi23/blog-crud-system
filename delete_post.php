<?php
session_start();
include 'db.php';

// Check if user is logged in
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

// Allow only admin to delete posts
if($_SESSION['role'] != "admin"){
    die("❌ Access Denied! Only Admin can delete posts.");
}

// Check if post ID is provided
if(isset($_GET['id'])){

    $id = (int)$_GET['id'];

    // Prepared Statement
    $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);

    if($stmt->execute()){

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