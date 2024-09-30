<?php
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Chèque/Mandat postal',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Les clients peuvent envoyer leur paiement par courrier. Leur e-mail de confirmation de commande leur demandera de : <br><br>Veuillez établir votre chèque ou virement bancaire à l\'ordre de :<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(le nom de votre magasin)') . '<br><br>Envoyez votre paiement à :<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Votre commande ne sera pas expédiée tant que nous n\'aurons pas reçu le paiement.',
// bof constant configuration titles and descriptions for order total module moneyorder
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_STATUS' => 'Activer le module « Chèque/Mandat postal »',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_STATUS' => 'Souhaitez-vous accepter les paiements par chèque/mandat postal ?',
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_ZONE' => 'Zone de paiement',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_ZONE' => 'Si une zone est sélectionnée, activez uniquement ce mode de paiement pour cette zone.',
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID' => 'Définir le statut de la commande',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID' => 'Définir le statut des commandes effectuées avec ce module de paiement sur cette valeur :',
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_SORT_ORDER' => 'Ordre d\'affichage.',
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_PAYTO' => 'À l\'ordre de :',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_PAYTO' => 'À qui les paiements doivent-ils être effectués ?',
// eof constant configuration titles and descriptions for order total module moneyorder
];
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Veuillez établir votre chèque ou virement bancaire à l\'ordre de :' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . 'Envoyez votre paiement à :' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'Votre commande ne sera envoyée qu\'à réception du règlement et de sa validation par notre banque.';
}

return $define;
