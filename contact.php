<?php
include 'includes/db.php';
include 'includes/header.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $conn->query("INSERT INTO contacts (name,email,message)
                  VALUES ('$name','$email','$message')");
    echo "Message Sent!";
}
?>

<h2>Contact Us</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <textarea name="message" placeholder="Message"></textarea><br>
    <button type="submit">Send</button>
</form>

<?php include 'includes/footer.php'; ?>
