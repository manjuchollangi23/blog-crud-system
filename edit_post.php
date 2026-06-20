
<?php
session_start();
include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$id = (int)$_GET['id'];

$result = mysqli_query(
    $conn,
    "SELECT * FROM posts WHERE id=$id"
);

$row = mysqli_fetch_assoc($result);

if(!$row){
    header("Location: add_post.php");
    exit();
}

if(isset($_POST['update'])){

    $title = mysqli_real_escape_string(
        $conn,
        $_POST['title']
    );

    $content = mysqli_real_escape_string(
        $conn,
        $_POST['content']
    );

    mysqli_query(
        $conn,
        "UPDATE posts
         SET title='$title',
             content='$content'
         WHERE id=$id"
    );

    header("Location: add_post.php");
    exit();
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

