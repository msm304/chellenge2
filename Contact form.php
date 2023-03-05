<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $to = 'admin@example.com';
    $subject = 'New message from contact form';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $name <$email>" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Message sent successfully';
    } else {
        echo 'Error sending message';
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <input type="submit" value="Send">
</form>
