<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formulardaten auslesen
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // E-Mail-Adresse des Empfängers
    $to = "fabianhorn2010@gmail.com"; // Ersetze dies durch deine E-Mail-Adresse
    $subject = "Neue Nachricht von $name über das Kontaktformular";

    // Nachricht formatieren
    $emailMessage = "Name: $name\n";
    $emailMessage .= "E-Mail: $email\n";
    $emailMessage .= "Nachricht:\n$message\n";

    // Header für die E-Mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // E-Mail senden
    if (mail($to, $subject, $emailMessage, $headers)) {
        echo "Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet.";
    } else {
        echo "Es gab ein Problem beim Senden der Nachricht. Bitte versuchen Sie es später erneut.";
    }
} else {
    echo "Ungültige Anfrage.";
}
