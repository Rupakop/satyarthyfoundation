<?php
include 'includes/db.php';
include 'includes/header.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $conn->query("INSERT INTO volunteers (name,email,phone,message)
                  VALUES ('$name','$email','$phone','$message')");
    echo "Registration Successful!";
}
?>

<h2>Volunteer Registration</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <textarea name="message" placeholder="Why join?"></textarea><br>
    <button type="submit">Register</button>
</form>

<?php include 'includes/footer.php'; ?>
