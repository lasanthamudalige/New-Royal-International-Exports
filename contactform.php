<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $phone_number = $_POST['number'];
    $message = $_POST['message'];

    $mailTo = "---email---";
    $headers = "From :" . $mailFrom;
    $txt = "You have received and e-mail from " . $name . "\n\nsubject = " . $subject . "\nphone number = " . $phone_number . "\nmessage = " . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
