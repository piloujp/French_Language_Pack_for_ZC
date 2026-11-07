<?php
// -----
// Gather any Miscellaneous Cost for an order, an order-total created by lat9 (https://vinosdefrutastropicales.com)
//
// Last updated: EO 5.0.0
//
$define = [
    'MODULE_ORDER_TOTAL_MISC_COST_TITLE' => 'Frais divers',
    'MODULE_ORDER_TOTAL_MISC_COST_DESCRIPTION' => 'Un coût divers associé à la commande.',
// bof constant configuration titles and descriptions for ot_misc_cost
    'CFGTITLE_MODULE_ORDER_TOTAL_MISC_COST_STATUS' => 'Ce module est installé.',
    'CFGDESC_MODULE_ORDER_TOTAL_MISC_COST_STATUS' => '',
    'CFGTITLE_MODULE_ORDER_TOTAL_MISC_COST_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_ORDER_TOTAL_MISC_COST_SORT_ORDER' => 'Ordre de tri d’affichage.',
    'CFGTITLE_MODULE_ORDER_TOTAL_MISC_COST_CHANGE_TITLE' => 'Permettre de modifier le titre',
    'CFGDESC_MODULE_ORDER_TOTAL_MISC_COST_CHANGE_TITLE' => 'Permettre de modifier le titre du module lors de la modification d’une commande.',
    'CFGTITLE_MODULE_ORDER_TOTAL_MISC_COST_TAX_CLASS' => 'Type de taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_MISC_COST_TAX_CLASS' => 'Utilisez la classe de taxe suivante pour tout frais divers. Si vous appliquez une taxe au total de cette commande, veillez à :<ol><li>Définir son <em>ordre de tri</em> sur une valeur supérieure à celle de <code>ot_coupon</code>.</li><li>Définir son <em>ordre de tri</em> sur une valeur inférieure à celle de <code>ot_tax</code>.</li></ol>',
// eof constant configuration titles and descriptions for ot_misc_cost
];
return $define;
