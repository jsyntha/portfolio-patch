<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['query'] ?? '';

    echo "<h2>Form Submission</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Subject: $subject</p>";
    echo "<p>Message: $message</p>";

    $to = "fabiollo2006@gmail.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (!empty($email)) {
        mail($to, $subject, $message, $headers);
    }
}
?>
