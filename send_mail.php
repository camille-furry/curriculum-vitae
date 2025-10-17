<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "camille.dupont5.etu@univ-lille.fr";
    $subject = "Nouveau message du formulaire";
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Nom : $nom\nEmail : $email\nMessage :\n$message";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Échec de l'envoi du message.";
    }
}
?>
