<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: lat9  Wed Sep 24 23:03:50 2013 -0500 Modified in v2.2.0 $
 *
 * @since ZC v2.2.0
 */
$define = [
    'EMAIL_AUTH_TOKEN_SUBJECT' => STORE_NAME . ' - Activer le compte',
    'EMAIL_AUTH_TOKEN_BODY' => "Pour activer votre compte, veuillez cliquer sur le lien ci-dessous ou copier et coller le lien entier dans votre navigateur :\n\n%1\$s\n\nCe lien expire dans %2\$u minutes.",

    'SUCCESS_AUTH_TOKEN_SENT' => 'Un e-mail a été envoyé à l’adresse e-mail de votre compte (%1$s). Suivez les instructions pour activer votre compte et vérifiez vos spams.',
];
return $define;
