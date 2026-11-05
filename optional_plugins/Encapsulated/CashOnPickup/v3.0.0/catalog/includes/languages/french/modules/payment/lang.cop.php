<?php
/**
 * Cash on Pickup: storefront and Modules > Payment text.
 *
 * @package  CashOnPickup
 * @license  https://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License V2.0
 */

$define = [
    'MODULE_PAYMENT_COP_TEXT_TITLE' => 'Paiement au retrait',
    'MODULE_PAYMENT_COP_TEXT_DESCRIPTION' => 'Les clients règlent en espèces au moment de retirer leur commande. Cette option ne s’affiche que s’ils choisissent le retrait en magasin.',
    'MODULE_PAYMENT_COP_TEXT_NEEDS_STOREPICKUP' => '<br><br><strong>L’option « Retrait en magasin » n’est pas activée sous Modules > Expédition ; les clients ne verront donc pas ce mode de paiement.</strong>',
    'MODULE_PAYMENT_COP_TEXT_ALREADY_INSTALLED' => 'Le paiement en espèces au moment du retrait est déjà installé.',
// bof constant configuration titles and descriptions for payment module cop
    'CFGTITLE_MODULE_PAYMENT_COP_STATUS' => 'Activer le module de paiement au retrait',
    'CFGDESC_MODULE_PAYMENT_COP_STATUS' => 'Souhaitez-vous accepter les paiements en espèces lorsque les clients viennent récupérer leurs commandes ? Cette option ne s’affiche que si le mode de livraison « Retrait en magasin » est sélectionné.',
    'CFGTITLE_MODULE_PAYMENT_COP_ZONE' => 'Zone de paiement',
    'CFGDESC_MODULE_PAYMENT_COP_ZONE' => 'Si une zone est sélectionnée, activez uniquement ce mode de paiement pour cette zone.',
    'CFGTITLE_MODULE_PAYMENT_COP_GUEST' => 'Autoriser pour les commandes en tant qu’invité',
    'CFGDESC_MODULE_PAYMENT_COP_GUEST' => 'Souhaitez-vous que les invités de One Page Checkout puissent utiliser le paiement au retrait ? Ils n’ont pas de compte chez vous, cette option est donc désactivée à moins que vous ne l’activiez.',
    'CFGTITLE_MODULE_PAYMENT_COP_ORDER_STATUS_ID' => 'Définir le statut de la commande',
    'CFGDESC_MODULE_PAYMENT_COP_ORDER_STATUS_ID' => 'Définir le statut des commandes effectuées avec ce module de paiement sur cette valeur :',
    'CFGTITLE_MODULE_PAYMENT_COP_SORT_ORDER' => 'Ordre de tri d’affichage',
    'CFGDESC_MODULE_PAYMENT_COP_SORT_ORDER' => 'Ordre de tri d’affichage. Le numéro le plus bas est affiché en premier.',
// eof constant configuration titles and descriptions for payment module cop
];

return $define;
