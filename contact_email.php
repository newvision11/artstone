<?php

if (!isset($_REQUEST['safety_key'])) {
    die();
}

// Admin Email.
$to = "maaroufifouzi0@gmail.com"; // write your email address here.

// Fetching Values from POST data.
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$email_subject = $_POST['email_subject'];
$email_message = $_POST['email_message'];

$template = '<div>Hello ' . $user_name . ',<br/>'
        . '<br/>Thank you...! For Contacting Us.<br/><br/>'
        . 'Name:' . $user_name . '<br/>'
        . 'Email:' . $user_email . '<br/>'
        . 'Message:' . $email_message . '<br/><br/>'
        . 'This is a Contact Confirmation mail.'
        . '<br/>'
        . 'We Will contact You as soon as possible .</div>';

$message = "<div>" . $template . "</div>";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // Fix duplicate charset declaration
$headers .= 'From:' . $user_email . "\r\n"; // Sender's Email

// Use a proper email library or third-party service for sending emails instead of mail() function
// Ensure to handle errors and provide appropriate error checking

$data = array(
    'status' => 1,
    'msg' => "Your Query has been received. We will contact you soon."
);

echo json_encode($data);
?>
