<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:  New in v2.0 $
*/

$define = [
    'HEADING_TITLE' => 'Confirmation de connexion administrateur',
    'TEXT_MFA_INTRO' => 'Veuillez saisir ci-dessous le code OTP de votre application d\'authentification.',
    'TEXT_MFA_BOTTOM' => 'Si vous avez perdu l\'acces a votre application d\'authentification, veuillez contacter le proprietaire du magasin.',
    'TEXT_SUBMIT' => 'Envoyer',
    'TEXT_MFA_INPUT' => 'entrer le code',
    'TEXT_MFA_SELECT' => 'Selectionnez une methode d\'authentification multifacteur?: ',
    'ERROR_WRONG_CODE' => 'Le jeton que vous avez saisi n\'est pas valide.',
    'ERROR_SECURITY_ERROR' => 'Une erreur de securite s\'est produite lors de la tentative de connexion.',
    'TEXT_ERROR_ATTEMPTED_MFA_LOGIN_WITHOUT_CSRF_TOKEN' => 'Jeton CSRF invalide lors de la validation MFA',
    'TEXT_ERROR_ATTEMPTED_ADMIN_MFA_LOGIN_WITH_INVALID_CODE' => 'Jeton MFA non valide lors de l\'authentification a deux facteurs',
];

return $define;
