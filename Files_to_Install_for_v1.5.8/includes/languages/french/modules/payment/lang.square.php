<?php
$define = [
    'MODULE_PAYMENT_SQUARE_TEXT_DESCRIPTION' => 'Acceptez les cartes de crédit en moins de 5 minutes.<br>Pas de frais mensuels ni de frais d\'installation.<br>Conforme à la norme PCI. Le client ne quitte jamais votre magasin !<br>Les taux standard sont de 2,9 % + 0,30 $ par transaction.<br>Les fonds sont déposés sur votre compte bancaire en 1 à 2 jours ouvrables.<br><br>
       <a href="https://www.zen-cart.com/partners/square" rel="noopener" target="_blank">Obtenez plus d\'informations ou créez un compte</a><br><br>
       <a href="https://squareup.com/login" rel="noopener" target="_blank">Connectez-vous à votre compte Square</a>',
    'MODULE_PAYMENT_SQUARE_TEXT_ADMIN_TITLE' => 'Square',
    'MODULE_PAYMENT_SQUARE_TEXT_CATALOG_TITLE' => 'Carte de crédit',
    'MODULE_PAYMENT_SQUARE_TEXT_NOTICES_TO_CUSTOMER' => '',
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_POSTCODE' => 'Code Postal :',
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_NUMBER' => 'Numéro de carte :',
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_EXPIRES' => 'Date d\'expiration :',
    'MODULE_PAYMENT_SQUARE_TEXT_CVV' => 'Numéro CVV :',
    'MODULE_PAYMENT_SQUARE_TEXT_CREDIT_CARD_TYPE' => 'Type de carte de crédit :',
    'MODULE_PAYMENT_SQUARE_TEXT_ERROR' => '(SQ-ERR) Votre transaction n\'a pas pu être finalisée en raison d\'une erreur : ',
    'MODULE_PAYMENT_SQUARE_TEXT_MISCONFIGURATION' => 'Votre transaction n\'a pas pu être finalisée en raison d\'une mauvaise configuration dans notre boutique. Veuillez signaler cette erreur au propriétaire de la boutique : SQ-MISCONF',
    'MODULE_PAYMENT_SQUARE_TEXT_COMM_ERROR' => 'Impossible de traiter le paiement en raison d\'une erreur de communication. Vous pouvez réessayer ou nous contacter pour obtenir de l\'aide.',
    'MODULE_PAYMENT_SQUARE_ERROR_INVALID_CARD_DATA' => 'Nous n\'avons pas pu lancer votre transaction en raison d\'un problème avec les données de carte que vous avez saisies. Veuillez corriger les données de la carte ou signaler cette erreur au propriétaire du magasin : SQ-NONCE-FAILURE',
    'MODULE_PAYMENT_SQUARE_ERROR_DECLINED' => 'Désolé, votre paiement n\'a pas pu être autorisé. Veuillez sélectionner un autre mode de paiement.',
    'MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_ACTIONS' => '<strong>Actions</strong>',
    'MODULE_PAYMENT_SQUARE_TEXT_UPDATE_FAILED' => 'Désolé, la tentative de mise à jour de la transaction a échoué de manière inattendue. Consultez les logs pour plus de détails.',
    'MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_ERROR' => 'Erreur : vous avez demandé un remboursement mais n\'avez pas coché la case Confirmation.',
    'MODULE_PAYMENT_SQUARE_TEXT_INVALID_REFUND_AMOUNT' => 'Erreur : vous avez demandé un remboursement mais avez saisi un montant non valide.',
    'MODULE_PAYMENT_SQUARE_TEXT_REFUND_INITIATED' => 'Remboursé ',
    'MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_ERROR' => 'Erreur : Vous avez demandé à effectuer une capture mais n\'avez pas coché la case Confirmation.',
    'MODULE_PAYMENT_SQUARE_TEXT_TRANS_ID_REQUIRED_ERROR' => 'Erreur : vous devez spécifier un ID de transaction.',
    'MODULE_PAYMENT_SQUARE_TEXT_CAPT_INITIATED' => 'Capture de fonds initiée. ID de transaction : %s',
    'MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_ERROR' => 'Erreur : vous avez demandé une annulation mais n\'avez pas coché la case Confirmation.',
    'MODULE_PAYMENT_SQUARE_TEXT_VOID_INITIATED' => 'Void Initiated. Transaction ID: %s',
];

// Check current directory to see if SquareWebpay is installed have include lang.square_webPay.php in case it changes before Square is fully removed from zen cart
// This prevents the duplication message as square_webPay defines all below as constants.
if (file_exists(dirname(__FILE__) . '/square_webPay.php') === false && file_exists(dirname(__FILE__) . '/lang.square_webPay.php') === false) {
    $defineExtra = [
        'MODULE_PAYMENT_SQUARE_ENTRY_TRANSACTION_SUMMARY' => '<strong>Résumé de la transaction</strong>',
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TITLE' => '<strong>Transaction de remboursement</strong>',
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND' => 'Vous pouvez rembourser l\'argent au client ici :',
        'MODULE_PAYMENT_SQUARE_TEXT_REFUND_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention : ',
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_AMOUNT_TEXT' => 'Entrez le montant que vous souhaitez rembourser',
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_TEXT_COMMENTS' => 'Remarques (s\'afficheront dans l\'historique des commandes) :',
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Remboursement effectué',
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_SUFFIX' => 'Vous pouvez rembourser une commande dans un délai de 120 jours, jusqu\'au montant initial versé. Vous devez fournir l\'identifiant de transaction et l\'identifiant de paiement d\'origine.<br>Consultez le site Square pour plus d\'<a href="https://squareup.com/help/us/en/article/5060" rel="noopener" target="_blank">informations sur les remboursements Square</a>.',
        'MODULE_PAYMENT_SQUARE_ENTRY_REFUND_BUTTON_TEXT' => 'Faire un remboursement',
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TITLE' => '<strong>Capturer une transaction</strong>',
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE' => 'Vous pouvez récupérer ici les fonds préalablement autorisés :',
        'MODULE_PAYMENT_SQUARE_TEXT_CAPTURE_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention : ',
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_TEXT_COMMENTS' => 'Remarques (s\'afficheront dans l\'historique des commandes) :',
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_DEFAULT_MESSAGE' => '',
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_SUFFIX' => 'Les captures doivent être effectuées dans les 6 jours suivant l\'autorisation initiale. Vous ne pouvez capturer une commande qu\'UNE SEULE FOIS.',
        'MODULE_PAYMENT_SQUARE_ENTRY_CAPTURE_BUTTON_TEXT' => 'Faire une capture',
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_TITLE' => '<strong>Annulation de la transaction</strong>',
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID' => 'Vous pouvez annuler une autorisation qui n’a pas été capturée.',
        'MODULE_PAYMENT_SQUARE_TEXT_VOID_CONFIRM_CHECK' => 'Cochez cette case pour confirmer votre intention :',
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_TEXT_COMMENTS' => 'Remarques (s\'afficheront dans l\'historique des commandes) :',
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_DEFAULT_MESSAGE' => 'Transaction annulée',
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_SUFFIX' => '',
        'MODULE_PAYMENT_SQUARE_ENTRY_VOID_BUTTON_TEXT' => 'Annuler',
    ];
    $define = array_merge($define, $defineExtra);       
}


if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_SQUARE_TEXT_NEED_ACCESS_TOKEN'] =
        '<span class="text-danger"><strong>ALERTE : jeton d\'accès non défini :</strong></span> <br>
    1. Assurez-vous que l\'URL de redirection OAuth dans votre « application » de compte Square est définie sur <u><nobr><pre>' . str_replace(array('index.php?main_page=index' => 'http://'), array('square_handler.php' => 'https://'), zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre></nobr></u><br>
    2. Et puis <a href="%s" rel="noopener" target="_blank" class="onClickStartCheck"><button class="btn btn-xs btn-success">Cliquez ici pour vous connecter et autoriser votre compte</button></a>';
}

return $define;
