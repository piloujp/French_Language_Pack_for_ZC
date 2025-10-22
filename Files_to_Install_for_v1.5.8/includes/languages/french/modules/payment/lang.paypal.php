<?php
$define = [
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE' => 'Paiements PayPal Standard',
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA' => 'Paiements PayPal Standard sur site Web - IPN',
    'MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE' => 'PayPal',
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG' => 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif',
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT' => 'Encaisser avec PayPal',
    'MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT' => 'Gangnez du temps. Encaissez en toute sécurité. <br />Payez sans dévoiler vos informations financières.',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE' => 'Tous les articles dans votre panier (voir les détails dans la boutique et sur votre reçu de la boutique).',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM' => STORE_NAME.' Achat',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Frais uniques se rapportant ',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Surtaxes',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG' => 'Frais de manutention et autres charges applicables',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Remises',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Rabais appliqués, incluant les bons de réduction, chèques-cadeaux, etc',
    'MODULES_PAYMENT_PAYPALSTD_NOT_RECOMMENDED' => 'Veuillez noter que ce module n’est plus recommandé. Voir <a href="https://docs.zen-cart.com/user/payment/paypal_standard/" target="_blank" rel="noreferrer noopener">cette page</a> pour une explication.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Prénom : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Nom : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Nom de l’entreprise : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Adresse nom : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Adresse : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Ville : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Région/Département : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Code Postal : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Pays : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'E-mail du payeur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => ' ID# Ebay : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'ID# payeur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Statut du payeur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Statut de l’adresse : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Type de paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Statut du paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Motif de mise en attente : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Facture : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Date de paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Devise : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Montant brut : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Commission : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Taux de change : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Articles dans panier : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Type transaction : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'ID# transaction : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'ID# transaction parent : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'Commentaires système : ',
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal Payments Standard</strong> (Service PayPal plus ancien, moins fiable que Express Checkout)<br><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Gérez votre compte PayPal.</a><br><br><b>Instructions de configuration :</b><br>1. <a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">Créez votre compte PayPal - cliquez ici.</a><br>2. Dans votre compte PayPal, sous "Profil",<ul><li>définissez votre URL de <strong>Préférences de notification de paiement instantanée</strong> à :<br><pre>' . str_replace('index.php?main_page=index', 'ipn_main_handler.php', zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre><br>(Si une autre URL valide est déjà saisie, vous pouvez la laisser telle quelle.)<br><span class="alert">Assurez-vous que la case à cocher pour activer l’IPN est cochée !</span><br><br></li><li>dans les <strong>Préférences de paiement du site Web</strong>, définissez votre <strong>URL de retour automatique</strong> sur :<br><pre>' . zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL', false) . '</pre></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... et cliquez sur "installer" ci-dessus pour activer le support PayPal Standard... et "modifier" pour indiquer à Zen Cart vos paramètres PayPal.</li>') . '</ul><hr><strong>Requis :</strong><br><br>*<strong>Compte PayPal</strong> (<a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">cliquez pour installer/configurer</a>)<br>*<strong>CURL avec SSL</strong> est fortement recommandé<br>*<strong>Le port 80 (et le port 443 si SSL est activé)</strong> est utilisé pour la communication <strong>*bidirectionnelle*</strong> avec la passerelle, et doit donc être ouvert sur le routeur/pare-feu de votre hôte.<br>*<strong>Les paramètres</strong> de votre compte PayPal doivent être configurés comme décrit ci-dessus.';
} else {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal</strong>';
}
$define['MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO'] = '<img src="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG'] . '" alt="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '" title="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '"> &nbsp;' .
        '<span class="smallText">' . $define['MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT'] . '</span>';

return $define;
