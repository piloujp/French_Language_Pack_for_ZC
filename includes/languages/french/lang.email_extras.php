<?php
$define = [
    'EMAIL_LOGO_ALT_TITLE_TEXT' => 'Zen Cart! The Art of E-commerce',
    'EMAIL_LOGO_FILENAME' => 'header.jpg',
    'EMAIL_LOGO_WIDTH' => '550',
    'EMAIL_LOGO_HEIGHT' => '110',
    'EMAIL_EXTRA_HEADER_INFO' => '',
    'OFFICE_FROM' => '<strong>De :</strong>',
    'OFFICE_EMAIL' => '<strong>E-mail :</strong>',
    'OFFICE_USE' => '<strong>Usage professionnel uniquement:</strong>',
    'OFFICE_LOGIN_NAME' => '<strong>Nom de connexion:</strong>',
    'OFFICE_LOGIN_EMAIL' => '<strong>E-mail de connexion </strong>',
    'OFFICE_LOGIN_PHONE' => '<strong>Téléphone:</strong>',
    'OFFICE_LOGIN_FAX' => '<strong>Fax:</strong>',
    'OFFICE_IP_ADDRESS' => '<strong>Adresse IP:</strong>',
    'OFFICE_HOST_ADDRESS' => '<strong>Adresse de l\'hôte:</strong>',
    'OFFICE_DATE_TIME' => '<strong>Date et heure:</strong>',
    'EMAIL_TEXT_TELEPHONE' => 'Telephone: ',
    'EMAIL_DISCLAIMER' => 'Cette adresse e-mail nous a été donnée par vous ou par un de nos clients. Si vous pensez avoir reçu cet e-mail par erreur, veuillez envoyer un e-mail à: %s',
    'EMAIL_SPAM_DISCLAIMER' => '',
    'EMAIL_ORDER_MESSAGE' => '',
    'EMAIL_FOOTER_COPYRIGHT' => 'Copyright (c) '.date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a>. Powered by <a href="https://www.zen-cart.com">Zen Cart</a>',
    'TEXT_UNSUBSCRIBE' => "\n\nPour vous désabonner de nos futurs bulletins et e-mails promotionnels, cliquez simplement sur le lien suivant: \n",
    'EMAIL_ADVISORY' => '-----'."\n".'<strong>IMPORTANT:</strong> Pour votre protection et pour empêcher tout usage malveillant, tous les mails envoyés depuis ce site web sont journalisés, leur contenu enregistré et disponible pour le gérant. Si vous estimez avoir reçu cet e-mail par erreur, veuillez contacter par mail : ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n",
    'EMAIL_ADVISORY_INCLUDED_WARNING' => '<strong>Ce message figure dans tous les e-mails envoyés depuis ce site :</strong>',
    'SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT' => '[CRÉER UN COMPTE]',
    'SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT' => '[CHÈQUE CADEAU CLIENT ENVOYÉ]',
    'SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT' => '[NOUVELLE COMMANDE]',
    'EMAIL_TEXT_SUBJECT_LOWSTOCK' => 'ATTENTION: Stock bas',
    'SEND_EXTRA_LOW_STOCK_EMAIL_TITLE' => 'Rapport de stock bas: ',
];

return $define;
