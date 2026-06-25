<?php
include 'db.php';

// Search keyword
$search = "";

if(isset($_GET['search']))
{
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $sql = "SELECT * FROM posts
            WHERE title LIKE '%$search%'
            OR content LIKE '%$search%'
            ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM posts
            ORDER BY id DESC";
}

// Pagination
$limit = 5;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if($page < 1){
    $page = 1;
}

$offset = ($page - 1) * $limit;

// Count total posts
$countQuery = mysqli_query($conn, "SELECT COUNT(*) AS total FROM posts");
$countRow = mysqli_fetch_assoc($countQuery);
$totalPosts = $countRow['total'];
// Count total posts

if($search != "")
{
    $countQuery = mysqli_query(
        $conn,
        "SELECT COUNT(*) AS total
         FROM posts
         WHERE title LIKE '%$search%'
         OR content LIKE '%$search%'"
    );
}
else
{
    $countQuery = mysqli_query(
        $conn,
        "SELECT COUNT(*) AS total FROM posts"
    );
}

$countRow = mysqli_fetch_assoc($countQuery);
$totalPosts = $countRow['total'];

$totalPages = ceil($totalPosts / $limit);


// Add pagination to query
$sql .= " LIMIT $limit OFFSET $offset";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>All Posts</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="posts-section">

<h2>All Blog Posts</h2>

<!-- Search Form -->
<form method="GET" action="view_posts.php" class="search-form">

    <input
    type="text"
    name="search"
    placeholder="Search by title or content..."
    value="<?php echo htmlspecialchars($search); ?>">

    <button type="submit">
        Search
    </button>

    <a href="view_posts.php" class="clear-btn">
        Clear
    </a>

</form>

<?php

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{
?>

<div class="modern-post-card">

<h3>
<?php echo $row['title']; ?>
</h3>

<p>
<?php echo $row['content']; ?>
</p>

<div class="actions">

<a
class="edit-btn"
href="edit_post.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a
class="delete-btn"
href="delete_post.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</div>

</div>

<?php
}
}
else
{
echo "<h3>No posts found.</h3>";
}
?>
<div class="pagination">

<?php
if($page > 1){
?>
<a href="?page=<?php echo $page-1; ?>&search=<?php echo urlencode($search); ?>">
    Previous
</a>
<?php
}
?>

<?php
for($i = 1; $i <= $totalPages; $i++){
?>
<a
    class="<?php echo ($page == $i) ? 'active' : ''; ?>"
    href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>">
    <?php echo $i; ?>
</a>
<?php
}
?>

<?php
if($page < $totalPages){
?>
<a href="?page=<?php echo $page+1; ?>&search=<?php echo urlencode($search); ?>">
    Next
</a>
<?php
}
?>

</div>
</div>

</body>

</html>