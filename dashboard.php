<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BlogCMS</title>
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

<section class="dashboard-section">

    <div class="welcome-card">

        <div>
            <h1>
                Welcome Back,
                <?php echo $_SESSION['username']; ?> 👋
            </h1>

            <p>
                Manage your content, publish new articles,
                and track your blogging activity from one place.
            </p>
        </div>

        <a href="add_post.php" class="dashboard-btn">
            + Create Post
        </a>

    </div>

    <div class="stats-grid">

        <div class="stat-card">
            <h2>📝 Posts</h2>
            <p>Create & Manage Articles</p>
        </div>

        <div class="stat-card">
            <h2>⚡ PHP</h2>
            <p>Backend Development</p>
        </div>

        <div class="stat-card">
            <h2>🗄 MySQL</h2>
            <p>Database Management</p>
        </div>

        <div class="stat-card">
            <h2>🔒 Security</h2>
            <p>Protected User Sessions</p>
        </div>

    </div>

    <div class="dashboard-panel">

        <h2>Quick Actions</h2>

        <div class="action-buttons">

            <a href="add_post.php" class="action-btn">
                Create New Post
            </a>

           <a href="view_posts.php" class="action-btn">Manage Posts</a>
            </a>

            <a href="logout.php" class="action-btn logout-btn">
                Logout
            </a>

        </div>

    </div>

</section>

</body>
</html>
