<?php
$define = [
    'MODULE_ORDER_TOTAL_COUPON_TITLE' => 'Bons de Réduction',
    'MODULE_ORDER_TOTAL_COUPON_HEADER' => TEXT_GV_NAMES . '/Bons de Réduction',
    'MODULE_ORDER_TOTAL_COUPON_DESCRIPTION' => 'Bons de Réduction',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,
    'MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS' => '<p>Veuillez entrer votre code de réduction dans le champ ci-dessous. Votre réduction sera appliquée au total et ajoutée à votre panier dès que vous aurez cliqué sur Continuer.</p><p>NOTE: vous pouvez utiliser un seul bon de réduction par commande.</p>',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE' => 'Votre code courant de réduction : ',
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'ENLEVER',
    'TEXT_REMOVE_REDEEM_COUPON' => 'Bon de réduction supprimé sur demande !',
    'MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR' => ' Définir Inclure taxes = true, va seulement être utile si recalculer = None',
// bof constant configuration titles and descriptions for order total module ot_coupon
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_STATUS' => 'Ce module est installé',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_STATUS' => '',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_SORT_ORDER' => 'Ordre d\'affichage.',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING' => 'Inclure les frais de port',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING' => 'Inclure les frais de port dans le calcul',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_INC_TAX' => 'Inclure la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_INC_TAX' => 'Inclure la taxe dans le calcul.',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_CALC_TAX' => 'Recalculer la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_CALC_TAX' => 'Méthode de recalcule de la taxe.',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_TAX_CLASS' => 'Classe de la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_TAX_CLASS' => 'Utilisez la classe de taxe suivante quand la méthode de recalcule « Credit Note » est utilisée.',
// eof constant configuration titles and descriptions for order total module ot_coupon
];

$define['MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS'] = '<p>Pour Enlever un coupon de réduction de cette commande, remplacez le code de coupon par : ' . $define['TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER'] . '</p>';

return $define;
