<?php
// -----
// Part of the Ty Package Tracker plugin, v4.0.0 and later.  Provides integration with the
// admin's Customers :: Orders and Edit Orders display and update of an order's tracking information.
//
// Last updated: v5.0.0
//

// -----
// Various language definitions, used for both the Customers::Orders and EditOrders notifications.
//
$define = [
    'TABLE_HEADING_TRACKING_ID' => 'ID de suivi',
    'TABLE_HEADING_CARRIER_NAME' => 'Transporteur',
    'ENTRY_ADD_TRACK' => 'Ajouter un identifiant de suivi',
    'EMAIL_TEXT_COMMENTS_TRACKING_UPDATE' => '<em>Les articles de votre commande seront bientôt expédiés !</em>',

    // -----
    // Used to sprintf the carrier-name (%1$s), tracking-id (%2$s) and the carrier-link (%3$s) into the to-be-sent tracking-update email.
    //
    'EMAIL_TEXT_TRACKID_UPDATE' => "\n\n" . 'Votre identifiant de suivi %1$s est %2$s' . "\n" . '<br><a href=\"%3$s\">Cliquez ici</a> pour suivre votre colis.' . "\n" . '<br>Si le lien ci-dessus ne fonctionne pas, copiez l’adresse URL suivante et collez-la dans votre navigateur Web.' . "\n" . '<br>%3$s' . "\n\n" . '<br><br>Un délai de 24 heures peut être nécessaire pour que les informations de suivi apparaissent sur le site Web.' . "\n<br>",

    // -----
    // Defines the label used for the plugin's configuration settings.
    //
    'BOX_CONFIGURATION_TY_PACKAGE_TRACKER' => 'Suivi de colis Ty',
];
return $define;
