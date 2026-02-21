<?php
include 'includes/db.php';
include 'includes/header.php';

$result = $conn->query("SELECT * FROM projects");

echo "<h2>Our Projects</h2>";

while($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h3>".$row['title']."</h3>";
    echo "<p>".$row['description']."</p>";
    echo "</div><hr>";
}

include 'includes/footer.php';
?>
