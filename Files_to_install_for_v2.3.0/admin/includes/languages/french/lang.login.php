<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Connexion Admin',
    'HEADING_TITLE_EXPIRED' => 'Connexion Admin - Mot de passe expiré',
    'TEXT_SUBMIT' => 'Soumettre',
    'TEXT_ADMIN_PASS' => 'Mot de passe : ',
    'TEXT_ADMIN_OLD_PASSWORD' => 'Ancien mot de passe : ',
    'TEXT_ADMIN_NEW_PASSWORD' => 'Nouveau mot de passe : ',
    'TEXT_ADMIN_CONFIRM_PASSWORD' => 'Confirmez le mot de passe : ',
    'ERROR_WRONG_LOGIN' => '<p>Erreur dans la saisie de votre nom d’utilisateur et/ou mot de passe.</p>',
    'ERROR_SECURITY_ERROR' => 'Il y a eu une erreur de sécurité en essayant de vous connecter.',
    'TEXT_PASSWORD_FORGOTTEN' => 'Mot de passe oublié ?',
    'LOGIN_EXPIRY_NOTICE' => '',
    'ERROR_PASSWORD_EXPIRED' => 'NOTE : votre mot de passe a expiré. Veuillez choisir un nouveau mot de passe. Votre mot de passe <strong>doit contenir à la fois des chiffres et des lettres, ainsi qu’un minimum de 7 caractères.</strong>',
    'TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED' => 'Pour des raisons de sécurité, votre mot de passe temporaire doit être changé. Veuillez choisir un nouveau mot de passe.<br>Votre mot de passe <strong>doit contenir à la fois des chiffres et des lettres, ainsi qu’un minimum de 7 caractères.</strong>',
    'SUCCESS_PASSWORD_UPDATED' => 'Mot de passe mis à jour',
    'TEXT_EMAIL_SUBJECT_LOGIN_FAILURES' => 'Avertissement d’échec de connexion Admin',
    'TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES' => 'Avertissement important : il y a eu de multiples tentatives de connexion sans succès à votre compte administrateur. Pour votre protection et la sécurité du système, après 6 tentatives le compte sera bloqué pendant 30 minutes, pendant lesquelles il sera impossible de vous connecter même si vous vous rappelez de votre mot de passe. D’autres tentatives de connexion prolongeront le blocage du compte pour encore 30 minutes. Il vous sera impossible de réinitialiser le mot de passe durant cette période. Désolé pour la gêne occasionnée.' . "\n\nLa dernière tentative de connexion a été effectuée depuis cette adresse IP : %s.\n\n\n",
    'EXPIRED_DUE_TO_SSL' => 'Note : votre mot de passe a expiré car votre site est passé de non-SSL (moins sécurisé) à une protection SSL (plus sécurisé). Changer votre mot de passe sous SSL est un acte important pour une plus grnade sécurité. Désolé pour la gêne occasionnée. Les règles standard d’expiration du mot de passe s’appliquent.',
];

return $define;
