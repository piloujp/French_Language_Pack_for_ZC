<?php
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Chèque/Mandat postal',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Les clients peuvent envoyer leur paiement par courrier. Leur e-mail de confirmation de commande leur demandera de : <br><br>Veuillez établir votre chèque ou virement bancaire à l\'ordre de :<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(le nom de votre magasin)') . '<br><br>Envoyez votre paiement à :<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Votre commande ne sera pas expédiée tant que nous n\'aurons pas reçu le paiement.',
];
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Veuillez établir votre chèque ou virement bancaire à l\'ordre de :' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . 'Envoyez votre paiement à :' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'Votre commande ne sera envoyée qu\'à réception du règlement et de sa validation par notre banque.';
}

return $define;
