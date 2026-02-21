<?php
session_start();
include '../includes/db.php';

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}
?>

<h2>Admin Dashboard</h2>
<a href="add_project.php">Add Project</a><br>
<a href="logout.php">Logout</a><hr>

<?php
$result = $conn->query("SELECT * FROM projects");

while($row = $result->fetch_assoc()){
    echo "<h3>".$row['title']."</h3>";
    echo "<a href='delete_project.php?id=".$row['id']."'>Delete</a><hr>";
}
?>
