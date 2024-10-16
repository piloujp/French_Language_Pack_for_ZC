<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Réinitialisation de mot de passe',
    'TEXT_ADMIN_EMAIL' => 'Adresse e-mail de l\'administrateur : ',
    'TEXT_ADMIN_USERNAME' => 'Nom d\'utilisateur de l\'administrateur',
    'TEXT_BUTTON_REQUEST_RESET' => 'Demande de réinitialisation',
    'TEXT_BUTTON_LOGIN' => 'Connexion',
    'TEXT_BUTTON_CANCEL' => 'Annuler',
    'ERROR_WRONG_EMAIL' => 'Vous avez saisi une mauvaise adresse e-mail.',
    'ERROR_WRONG_EMAIL_NULL' => 'Bien vu... :-P',
    'MESSAGE_PASSWORD_SENT' => 'Merci. Si l\'adresse e-mail et le nom d\'utilisateur que vous avez saisis correspondent à un compte administrateur dans notre base de données, un nouveau mot de passe sera envoyé à cette adresse e-mail.<br>Veuillez lire le message et cliquez sur "Connexion" ci-dessous pour vous connecter avec le nouveau mot de passe temporaire.',
    'TEXT_EMAIL_SUBJECT_PWD_RESET' => 'Votre demande de modification',
    'TEXT_EMAIL_MESSAGE_PWD_RESET' => 'Un nouveau mot de passe a été demandé depuis %1$s.' . "\n\n" . 'Votre nouveau mot de passe temporaire est :' . "\n\n   %2$s\n\nIl vous sera demandé de choisir un nouveau mot de passe avant de vous connecter.\n\nCe mot de passe temporaire expire dans 24 heures.\n\n\n",
    'TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET' => 'Alerte, tentative d\'accès !',
    'TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET' => "Des tentatives infructueuses de réinitialisation du mot de passe administrateur ont été reçues de %s\n\nE-mail et/ou nom d'utilisateur fournis non valides.\n\nSi vous avez des comptes administrateur partageant la même adresse e-mail, vous devriez envisager de leur attribuer des adresses e-mail uniques, pour faciliter les réinitialisations.",
];

return $define;
