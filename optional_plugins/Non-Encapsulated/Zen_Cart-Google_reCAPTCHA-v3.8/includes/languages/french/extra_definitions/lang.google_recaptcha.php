<?php

declare(strict_types=1);
/**
 * Plugin Google reCaptcha
 * https://github.com/torvista/Zen_Cart-Google_reCAPTCHA
 * @license https://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @updated  $Id: torvista 2024 11 04
 */

/* https://developers.google.com/recaptcha/docs/verify
Last updated 2024-10-14 UTC.
    missing-input-secret    The secret parameter is missing.
    invalid-input-secret    The secret parameter is invalid or malformed.
    missing-input-response  The response parameter is missing.
    invalid-input-response  The response parameter is invalid or malformed.
    bad-request             The request is invalid or malformed.
    timeout-or-duplicate    The response is no longer valid: either is too old or has been used previously
 */
$define = [
     'RECAPTCHA_UNDEFINED_SITEKEY' => '** reCaptcha : clé de site indéfinie  **',
     'RECAPTCHA_MISSING_INPUT_SECRET' => 'reCaptcha : clé secrète manquante',
     'RECAPTCHA_INVALID_INPUT_SECRET' => 'reCaptcha : clé secrète invalide',
     'RECAPTCHA_MISSING_INPUT_RESPONSE' => 'Veuillez cliquer sur la case reCaptcha « Je ne suis pas un robot » pour prouver que vous êtes humain !',
     'RECAPTCHA_INVALID_INPUT_RESPONSE' => 'Désolé, veuillez vérifier à nouveau que vous n\'êtes pas un robot',
     'RECAPTCHA_BAD_REQUEST' => 'reCaptcha : la demande est invalide ou mal formulée',
     'RECAPTCHA_TIMEOUT_OR_DUPLICATE' => 'reCaptcha : dépassement de délai ou demande en double',
     'RECAPTCHA_PRIVATE_KEY_NOT_MATCHED' => 'reCaptcha: la clé privée ne correspond pas à ce domaine',
];

return $define;
