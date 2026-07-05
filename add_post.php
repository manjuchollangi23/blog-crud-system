
<?php
session_start();
include 'db.php';

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$message = "";

/* ADD POST */

/* ADD POST */

if(isset($_POST['submit'])){

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if(empty($title) || empty($content)){

        $message = "❌ Title and Content are required.";

    }else{

        $stmt = $conn->prepare("INSERT INTO posts(title, content) VALUES(?, ?)");
        $stmt->bind_param("ss", $title, $content);

        if($stmt->execute()){
            $message = "✅ Post Added Successfully!";
        }else{
            $message = "❌ Error Adding Post!";
        }

    }
}

/* FETCH POSTS */

$result = mysqli_query(
    $conn,
    "SELECT * FROM posts ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts - BlogCMS</title>
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

        <h1>Create New Post</h1>

        <p class="subtitle">
            Publish articles and manage your blog content.
        </p>

        <?php if($message!=""){ ?>

        <div class="success-box">
            <?php echo $message; ?>
        </div>

        <?php } ?>

        <form method="POST">

            <input
                type="text"
                name="title"
                placeholder="Enter Post Title"
                required
            >

            <textarea
                name="content"
                rows="8"
                placeholder="Write your blog content here..."
                required
            ></textarea>

            <button
                type="submit"
                name="submit"
                class="publish-btn">
                Publish Post
            </button>

        </form>

    </div>

    <div class="posts-list">

        <h2>All Blog Posts</h2>

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <div class="modern-post-card">

            <h3>
                <?php echo htmlspecialchars($row['title']); ?>
            </h3>

            <p>
                <?php echo htmlspecialchars(substr($row['content'],0,180)); ?>...
            </p>

           <div class="actions">

    <a
    class="edit-btn"
    href="edit_post.php?id=<?php echo $row['id']; ?>">
    Edit
    </a>

    <?php if($_SESSION['role'] == "admin"){ ?>

    <a
    class="delete-btn"
    href="delete_post.php?id=<?php echo $row['id']; ?>"
    onclick="return confirm('Delete this post?');">
    Delete
    </a>

    <?php } ?>

</div>

        </div>

        <?php } ?>

    </div>

</section>

</body>
</html>

