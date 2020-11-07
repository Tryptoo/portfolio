<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
$entete  = 'MIME-Version: 1.0' . "\r\n";
$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$entete .= 'From: ' . $_POST['email'] . "\r\n";

$message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' <br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';
$retour = mail('nico.perot@hotmail.fr', 'Envoi depuis la page Contact', $message, $entete );
if ($retour) {
    echo '<p>Merci ! Votre message a bien été envoyé.</p>';
}
?>
</body>
</html>
