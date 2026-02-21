<?php
session_start();
include '../includes/db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $conn->query("INSERT INTO projects (title,description)
                  VALUES ('$title','$desc')");
    header("Location: dashboard.php");
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Project Title"><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <button type="submit">Add</button>
</form>
