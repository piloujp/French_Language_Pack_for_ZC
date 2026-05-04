<?php

// change this to match your store's theme colour
// You can define this in your /includes/extra_datafiles/site_specific_overrides.php file to avoid editing this file directly.
$password_reset_email_button_colour ??= '#00BCE4'; 

// Simple sanitization
$password_reset_email_button_colour = htmlspecialchars(substr($password_reset_email_button_colour, 0, 32), ENT_QUOTES);

$define = [
    'NAVBAR_TITLE_1' => 'Connexion',
    'NAVBAR_TITLE_2' => 'Mot de passe oublié',
    'HEADING_TITLE' => 'Mot de passe oublié',

    'TEXT_MAIN' => 'Saisissez votre adresse e-mail ci-dessous et nous vous enverrons des instructions pour réinitialiser votre mot de passe.',

    'EMAIL_PASSWORD_RESET_SUBJECT' => STORE_NAME . ' - Réinitialisation du mot de passe',

    'EMAIL_PASSWORD_RESET_BODY' =>
        "Bonjour,\n\n" .
        "Nous avons reçu une demande de réinitialisation du mot de passe de votre compte %2\$s.\n\n" .
        "Pour choisir un nouveau mot de passe, veuillez cliquer sur le lien ci-dessous :\n\n" .
        "%3\$s\n\n" .
        "This link is for password reset only. If you did not request this, you can safely ignore this email and your password will not be changed.\n\n" .
        "Pour votre sécurité, cette requête a été effectuée depuis l’adresse IP : %1\$s\n\n" .
        "Cordialement,\n" .
        STORE_NAME . "\n",

    'EMAIL_PASSWORD_RESET_HTML' =>
        '<p>Bonjour,</p>' .
        '<p>Nous avons reçu une demande de réinitialisation du mot de passe de votre compte %2\$s.</p>' .
        '<p>Pour choisir un nouveau mot de passe, veuillez cliquer sur le lien ci-dessous :</p>' .
        '<p><a href="%3$s" style="display:inline-block;padding:10px 16px;background:' . $password_reset_email_button_colour . ';color:#ffffff;text-decoration:none;border-radius:4px;font-weight:bold;">Réinitialisez votre mot de passe</a></p>' .
        '<p>Ou copiez et collez ce lien dans votre navigateur :<br><a href="%3$s">%3$s</a></p>' .
        '<p>Ce lien sert uniquement à réinitialiser votre mot de passe. Si vous n’avez pas fait cette demande, vous pouvez ignorer ce courriel sans risque ; votre mot de passe restera inchangé.</p>' .
        '<p>Pour votre sécurité, cette requête a été effectuée depuis l’adresse IP : %1$s</p>' .
        '<p>Cordialement,<br>' .
        '%2$s' .
        '</p>',

    'SUCCESS_PASSWORD_RESET_SENT' =>
        'Merci. Si cette adresse e-mail se trouve dans notre système, nous l’utiliserons pour envoyer des instructions de récupération de mot de passe. Veuillez vérifier votre dossier Spam si vous ne le recevez pas sous peu.',
];

return $define;
