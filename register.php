<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

$message = "";


if(isset($_POST['register'])){

    $username = $_POST['username'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users(username,password)
            VALUES('$username','$password')";

    if(mysqli_query($conn,$sql)){

        header("Location: login.php");
        exit();

    }else{

        $message = "Registration Failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - BlogCMS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar">

    <div class="logo">
        BlogCMS
    </div>

    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="register.php" class="nav-btn">Get Started</a>
    </div>

</nav>

<section class="register-section">

    <div class="register-left">

        <span class="badge">
            ⚡ Modern Blogging Platform
        </span>

        <h1>
            Create Your
            <span>Account</span>
        </h1>

        <p>
            Join BlogCMS and start sharing your ideas with the world.
            Create, manage, and publish blog posts with a modern CMS.
        </p>

    </div>

    <div class="register-right">

        <div class="register-card">

            <h2>Create Account</h2>

            <p class="subtitle">
                Fill in the details below to get started.
            </p>

            <?php if($message!=""){ ?>

                <div class="error-box">
                    <?php echo $message; ?>
                </div>

            <?php } ?>

            <form method="POST">

                <input
                    type="text"
                    name="username"
                    placeholder="Enter your username"
                    required
                >

                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

                <button
                    type="submit"
                    name="register"
                    class="register-btn">
                    Create Account
                </button>

            </form>

            <p class="login-link">
                Already have an account?
                <a href="login.php">Login Here</a>
            </p>

        </div>

    </div>

</section>

</body>
</html>

