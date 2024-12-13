<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_log("In send_email.php");
    $name = $_POST["name"];
    $email = $_POST["email"];

    $to = "fabianhorn2010@gmail.com"; // vervang dit door je eigen e-mail
    $subject = "Nieuwe pre-order van $name";
    $message = "$name heeft een pre-order geplaatst. Hun e-mail is $email.";
    $headers = "From: fabianhorn2010@gmail.com"; // vervang dit door je eigen domein

    // Verstuur de e-mail
    if(mail($to, $subject, $message, $headers)) {
        error_log("E-mail versendet");
        echo json_encode(["success" => true]);
    } else {
        error_log("E-mail nicht versendet");
        echo json_encode(["success" => false]);
    }
}
?>