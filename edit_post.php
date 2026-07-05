
<?php
session_start();
include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$id = (int)$_GET['id'];

$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

if(!$row){
    header("Location: add_post.php");
    exit();
}

if(isset($_POST['update'])){

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if(empty($title) || empty($content)){

        echo "❌ Title and Content cannot be empty.";

    }else{

        $stmt = $conn->prepare("UPDATE posts SET title=?, content=? WHERE id=?");
        $stmt->bind_param("ssi", $title, $content, $id);

        if($stmt->execute()){

            header("Location: add_post.php");
            exit();

        }else{

            echo "❌ Error updating post.";

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post - BlogCMS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">

    <div class="logo">
        BlogCMS
    </div>

    <div class="nav-links">
        <a href="dashboard.php">Dashboard</a>
        <a href="add_post.php">Posts</a>
        <a href="logout.php">Logout</a>
    </div>

</nav>

<section class="posts-section">

    <div class="post-form-card">

        <h1>Edit Blog Post</h1>

        <p class="subtitle">
            Update your blog content below.
        </p>

        <form method="POST">

            <input
                type="text"
                name="title"
                value="<?php echo htmlspecialchars($row['title']); ?>"
                required
            >

            <textarea
                name="content"
                rows="8"
                required><?php echo htmlspecialchars($row['content']); ?></textarea>

            <button
                type="submit"
                name="update"
                class="publish-btn">
                Update Post
            </button>

        </form>

    </div>

</section>

</body>
</html>

