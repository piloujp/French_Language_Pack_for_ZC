<?php
$define = [
    'MODULE_PAYMENT_FURIKOMI_TEXT_TITLE' => 'Virement bancaire',
    'MODULE_PAYMENT_FURIKOMI_TEXT_DESCRIPTION' => '<BR>Veuillez utiliser les informations suivantes pour transférer la valeur totale de votre commande :<br><pre>'
    . "\nNom de la banque :    " . (defined('MODULE_PAYMENT_FURIKOMI_BANKNAME') ? MODULE_PAYMENT_FURIKOMI_BANKNAME : 'Nom de la banque')
    . "\nNom de la succursale :  " . (defined('MODULE_PAYMENT_FURIKOMI_BANKBRANCH') ? MODULE_PAYMENT_FURIKOMI_BANKBRANCH : 'Nom de la succursale')
    . "\nNuméro de compte :  " . (defined('MODULE_PAYMENT_FURIKOMI_ACCNUM') ? MODULE_PAYMENT_FURIKOMI_ACCNUM : 'Numéro de compte')
    . "\nType de compte : " . (defined('MODULE_PAYMENT_FURIKOMI_ACCTYPE') ? MODULE_PAYMENT_FURIKOMI_ACCTYPE : 'Type de compte')
    . "\nNom du compte : " . (defined('MODULE_PAYMENT_FURIKOMI_ACCNAM') ? MODULE_PAYMENT_FURIKOMI_ACCNAM : 'Nom du compte')
//    . "\nCode Swift :   " . (defined('MODULE_PAYMENT_FURIKOMI_SWIFT') ? MODULE_PAYMENT_FURIKOMI_SWIFT : 'Code Swift')
//    . "\n\nAutre compte (au choix) :"
//    . "\nNom de la banque :    " . (defined('MODULE_PAYMENT_FURIKOMI_BANKNAME2') ? MODULE_PAYMENT_FURIKOMI_BANKNAME2 : 'Nom de la banque')
//    . "\nNom de la succursale :  " . (defined('MODULE_PAYMENT_FURIKOMI_BANKBRANCH2') ? MODULE_PAYMENT_FURIKOMI_BANKBRANCH2 : 'Nom de la succursale')
//    . "\nNuméro de compte :  " . (defined('MODULE_PAYMENT_FURIKOMI_ACCNUM2') ? MODULE_PAYMENT_FURIKOMI_ACCNUM2 : 'Numéro de compte')
//    . "\nType de compte : " . (defined('MODULE_PAYMENT_FURIKOMI_ACCTYPE2') ? MODULE_PAYMENT_FURIKOMI_ACCTYPE2 : 'Type de compte')
//    . "\nNom du compte : " . (defined('MODULE_PAYMENT_FURIKOMI_ACCNAM2') ? MODULE_PAYMENT_FURIKOMI_ACCNAM2 : 'Nom du compte')
//    . "\nCode Swift :   " . (defined('MODULE_PAYMENT_FURIKOMI_SWIFT2') ? MODULE_PAYMENT_FURIKOMI_SWIFT2 : 'Code Swift')
    . '</pre><p>Merci pour votre commande qui sera expédiée après réception du paiement sur le compte ci-dessus.',
    'MODULE_PAYMENT_FURIKOMI_ALREADY_INSTALLED' => 'Le module Furikomi est déjà installé.',
// bof constant configuration titles and descriptions for payment module furikomi
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_STATUS' => 'Activer le module de virement bancaire',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_STATUS' => 'Souhaitez-vous accepter les paiements par virement bancaire direct ?',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_SORT_ORDER' => 'Ordre de tri d\'affichage',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_SORT_ORDER' => 'Ordre de tri d\'affichage. Le nombre le plus bas est affiché en premier.',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_ZONE' => 'Zone pour ce paiement',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_ZONE' => 'Si une zone est sélectionnée, activez uniquement ce mode de paiement pour cette zone.',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_BANKNAME' => 'Nom de la banque',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_BANKNAME' => 'Nom de la banque :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_BANKBRANCH' => 'Nom de la succursale bancaire',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_BANKBRANCH' => 'Nom de la succursale bancaire :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_ACCNUM' => 'Numéro de compte bancaire',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_ACCNUM' => 'Numéro de compte bancaire :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_ACCTYPE' => 'Type de compte',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_ACCTYPE' => 'Type de compte :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_ACCNAM' => 'Nom du compte bancaire',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_ACCNAM' => 'Nom du compte bancaire :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_SWIFT' => 'Code SWIFT',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_SWIFT' => 'Code SWIFT :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_BANKNAME2' => 'Deuxième nom de banque',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_BANKNAME2' => 'Nom de la banque :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_BANKBRANCH2' => 'Deuxième nom de succursale bancaire',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_BANKBRANCH2' => 'Nom de la succursale bancaire :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_ACCNUM2' => 'Deuxième numéro de compte bancaire',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_ACCNUM2' => 'Numéro de compte bancaire :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_ACCTYPE2' => 'Deuxième type de compte',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_ACCTYPE2' => 'Type de compte :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_ACCNAM2' => 'Deuxième nom du compte bancaire',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_ACCNAM2' => 'Nom du compte bancaire :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_SWIFT2' => 'Deuxième code SWIFT',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_SWIFT2' => 'Code SWIFT :',
    'CFGTITLE_MODULE_PAYMENT_FURIKOMI_ORDER_STATUS_ID' => 'Définir le statut de la commande',
    'CFGDESC_MODULE_PAYMENT_FURIKOMI_ORDER_STATUS_ID' => 'Définir le statut des commandes effectuées avec ce module de paiement sur cette valeur :',
// eof constant configuration titles and descriptions for payment module furikomi
];
if (defined('MODULE_PAYMENT_FURIKOMI_STATUS')) {
    $define['MODULE_PAYMENT_FURIKOMI_TEXT_EMAIL_FOOTER'] = "Veuillez utiliser les informations suivantes pour transférer la valeur totale de votre commande :\n"
    . "\nNom de la banque :    " . MODULE_PAYMENT_FURIKOMI_BANKNAME
    . "\nNom de la succursale :  " . MODULE_PAYMENT_FURIKOMI_BANKBRANCH
    . "\nNuméro de compte :  " . MODULE_PAYMENT_FURIKOMI_ACCNUM
    . "\nType de compte : " . MODULE_PAYMENT_FURIKOMI_ACCTYPE
    . "\nNom du compte : " . MODULE_PAYMENT_FURIKOMI_ACCNAM
//    . "\nCode Swift :   " . MODULE_PAYMENT_FURIKOMI_SWIFT
//    . "\nAutre compte (au choix) :"
//    . "\nNom de la banque :    " . MODULE_PAYMENT_FURIKOMI_BANKNAME2
//    . "\nNom de la succursale :  " . MODULE_PAYMENT_FURIKOMI_BANKBRANCH2
//    . "\nNuméro de compte :  " . MODULE_PAYMENT_FURIKOMI_ACCNUM2
//    . "\nType de compte : " . MODULE_PAYMENT_FURIKOMI_ACCTYPE2
//    . "\nNom du compte : " . MODULE_PAYMENT_FURIKOMI_ACCNAM2
//    . "\nCode Swift :   " . MODULE_PAYMENT_FURIKOMI_SWIFT2
    . "\n\nMerci pour votre commande qui sera expédiée après réception du paiement sur le compte ci-dessus.\n";
}

return $define;
