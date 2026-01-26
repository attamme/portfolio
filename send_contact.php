<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "annaliisa.tamme@voco.ee";
    $subject = "New portfolio message";
    $name = $_POST['name'];
    $userEmail = $_POST['email'];
    $message = $_POST['message'];

    /* to prefent cpanel thinking it's spoofing */
    $headers = "From: noreply@ita23tamme.ita.voco.ee" . "\r\n";
    /* auto put senders email to reply */
    $headers .= "Reply-To: " . $userEmail . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";
    
    $body = "Name: $name\n Email: $userEmail \n \n Message: \n $message";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.php?status=success");
    } else {
        header("Location: contact.php?status=error");
    }
}
?>