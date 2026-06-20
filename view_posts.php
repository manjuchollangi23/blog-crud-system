<?php
include 'db.php';

$result=mysqli_query(
$conn,
"SELECT * FROM posts
ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>All Posts</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>All Blog Posts</h2>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<div class="post">

<h3>
<?php echo $row['title']; ?>
</h3>

<p>
<?php echo $row['content']; ?>
</p>

<br>

<a
class="action-btn"
href="edit_post.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a
class="action-btn"
href="delete_post.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</div>

<?php } ?>

</body>
</html>