
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BlogCMS - Modern Blogging Platform</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">

    <div class="logo">
        BlogCMS
    </div>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
        <a href="register.php" class="nav-btn">Get Started</a>
    </div>

</nav>


<section class="hero">

    <div class="hero-left">

        <span class="badge">Modern Blogging Platform</span>

        <h1>
            Share Your Ideas.<br>
            <span>Inspire the World.</span>
        </h1>

        <p>
            BlogCMS is a powerful content management system designed
            for modern bloggers and writers.
        </p>

        <div class="hero-buttons">
            <a href="register.php" class="btn-primary">Get Started →</a>
            <a href="#posts" class="btn-secondary">Explore Blogs</a>
        </div>

        <div class="features">
            <span>⚡ Fast & Secure</span>
            <span>🛡 SEO Friendly</span>
            <span>📱 Responsive Design</span>
        </div>

    </div>

    <div class="hero-right">

        <div class="dashboard-card">

            <div class="dashboard-header">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1200"
                 alt="Blog Preview">

            <div class="dashboard-content">
                <h3>The Beauty of Nature</h3>
                <p>Exploring breathtaking landscapes and the serenity of nature.</p>
            </div>

        </div>

    </div>

</section>



<footer>
    <p>© <?php echo date('Y'); ?> BlogCMS. All Rights Reserved.</p>
</footer>

</body>
</html>

