<?php
session_start();
include 'db.php';

$error = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

   $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if($user && password_verify($password, $user['password'])){

    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    header("Location: dashboard.php");
    exit();

}else{

    $error = "Invalid Username or Password";

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BlogCMS</title>
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
    </div>

</nav>

<section class="login-section">

    <div class="login-left">

        <span class="badge">
            🔐 Secure Login
        </span>

        <h1>
            Welcome
            <span>Back</span>
        </h1>

        <p>
            Login to access your dashboard, manage blog posts,
            and continue sharing your ideas with the world.
        </p>

    </div>

    <div class="login-right">

        <div class="login-card">

            <h2>Sign In</h2>

            <p class="subtitle">
                Enter your credentials to continue.
            </p>

            <?php if($error!=""){ ?>

                <div class="error-box">
                    <?php echo $error; ?>
                </div>

            <?php } ?>

          <form method="POST" class="login-form">

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
        name="login"
        class="login-btn">
        Login
    </button>

</form>
            <p class="register-link">
                Don't have an account?
                <a href="register.php">Register Here</a>
            </p>

        </div>

    </div>

</section>

</body>
</html>

