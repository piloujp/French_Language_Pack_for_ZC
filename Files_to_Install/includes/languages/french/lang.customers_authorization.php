<?php
$define = [
    'HEADING_TITLE' => 'Autorisation de compte en attente...',
    'HEADING_TITLE_ACTIVATE' => 'Vérifiez votre e-mail : autorisation en attente',

    'CUSTOMERS_AUTHORIZATION_TEXT_INFORMATION' => 'Votre compte est en cours d\'examen pour autorisation.',
    'CUSTOMERS_AUTHORIZATION_STATUS_TEXT' => 'Pour vérifier l\'état de votre autorisation... Cliquez ici :',

    'SUCCESS_AUTHORIZED' => 'Votre compte est désormais autorisé à effectuer des achats. D\'autres fenêtres de votre navigateur sont peut-être ouvertes pour ce site ; vous pouvez les fermer en toute sécurité.',

    'TEXT_EXPIRED' => '**expiré**',
    'TEXT_HERE' => 'ici',          //- Used in the '_RESEND' data's anchor links
    'TEXT_INFORMATION_ACTIVATE' =>  //- %1$s (email address)
        'Nous avons envoyé un e-mail à %1$s contenant un lien pour activer votre compte. Cliquez sur ce lien pour continuer l\'activation de votre compte.',
    'TEXT_INFORMATION_LINK_ACTIVE' => 'Délai d\'expiration du lien :',
    'TEXT_INFORMATION_LINK_EXPIRED' => 'Le lien a expiré.',
    'TEXT_INFORMATION_RESEND' =>    //- %1$s (an anchor link to resend the token), %2$s (a link to the account_edit page)
        'Vous n\'avez pas reçu d\'e-mail ? Vérifiez que l\'adresse e-mail ci-dessus est correcte. Si c\'est le cas (ou si le lien a expiré), cliquez sur %1$s pour renvoyer l\'e-mail ; sinon, cliquez sur %2$s pour modifier votre adresse e-mail.',
];

global $auth_token_info;
$define['NAVBAR_TITLE'] = (($auth_token_info ?? false) === false) ? $define['HEADING_TITLE'] : $define['HEADING_TITLE_ACTIVATE'];

return $define;
