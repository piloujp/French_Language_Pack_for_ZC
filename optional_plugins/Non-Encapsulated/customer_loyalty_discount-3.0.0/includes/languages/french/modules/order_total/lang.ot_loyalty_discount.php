<?php
// -----
// Part of the "Customer Loyalty Discount", a Zen Cart order-total module.
//
// Last updated: v3.0.0 (renamed from ot_loyalty_discount.php)
//
$define = [
    'MODULE_LOYALTY_DISCOUNT_TITLE' => 'Remise de fidélité',
    'MODULE_LOYALTY_DISCOUNT_DESCRIPTION' => 'Remise pour les clients fidèles',

    // -----
    // %1$s is replaced by the discount percentage.
    // %2$s is *conditionally* replaced by MODULE_LOYALTY_DISCOUNT_SHIPPING_TEXT or MODULE_LOYALTY_DISCOUNT_SHIPPING_WITH_TAX_TEXT, based on configuration
    // %3$s is *conditionally* replaced by MODULE_LOYALTY_DISCOUNT_TAX_TEXT, based on configuration
    //
    'MODULE_LOYALTY_DISCOUNT_INFO' => 'Grâce à vos précédents achats chez nous, cette commande bénéficie d’une remise de %1$s sur ses produits%2$s%3$s.',
        'MODULE_LOYALTY_DISCOUNT_SHIPPING_TEXT' => ' et les frais d’expédition',
        'MODULE_LOYALTY_DISCOUNT_SHIPPING_WITH_TAX_TEXT' => ', frais de port',
        'MODULE_LOYALTY_DISCOUNT_TAX_TEXT' => ' et les taxes afférentes',
// bof constant configuration titles and descriptions for order total module ot_loyalty_discount
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_STATUS' => 'Activer la remise ?',
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_STATUS' => 'Souhaitez-vous activer la remise de fidélité ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_SORT_ORDER' => 'Ordre d’affichage.',
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_INC_SHIPPING' => 'Inclure les frais de port',
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_INC_SHIPPING' => 'Les frais de port d’une commande doivent-ils être inclus dans le calcul de la remise ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_INC_TAX' => 'Inclure la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_INC_TAX' => 'Les taxes sur les produits et éventuellement les frais de port d’une commande doivent-ils être inclus dans le calcul de la remise ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_CALC_TAX' => 'Recalculer la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_CALC_TAX' => 'Recalculez la taxe de la commande en fonction du montant remisé. <b>Remarque :</b> ce paramètre n’est utilisé que si vous avez également indiqué que la remise doit s’appliquer à la taxe de la commande.',
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_CUMORDER_PERIOD' => 'Période de commandes cumulées',
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_CUMORDER_PERIOD' => 'Définit la période sur laquelle calculer le total cumulé des commandes.',
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_TABLE' => 'Pourcentage de remise',
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_TABLE' => 'Définissez les seuils de cumul des commandes pour la période indiquée ci-dessus ainsi que les pourcentages de remise associés.<br><br>La valeur par défaut (<code>1000:5,1500:7,5,2000:10</code>) accorde au client :<ol><li>Une remise de 5 % pour un total &gt; 1000.</li><li>Une remise de 7,5 % pour un total &gt; 1500.</li><li>Une remise de 10 % pour un total &gt; 2000.</li></ol>',
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_ORDER_STATUS' => 'Statut de commandes éligibles',
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_ORDER_STATUS' => 'Identifiez le ou les identifiants de statut de commande d’une commande passée précédemment afin qu’ils soient inclus dans le total cumulé des commandes servant à déterminer le pourcentage de remise.<ol><li>Si le champ est vide, <b>toutes</b> les commandes passées précédemment sont additionnées.</li><li>Si le champ contient un <em>identifiant unique</em>, toute commande dont le statut est supérieur ou égal à cette valeur est incluse.</li><li>Sinon, le champ contient une liste d’identifiants de statut de commande séparés par des virgules, et toute commande dont le statut actuel figure dans cette liste est incluse.</li></ol>',
// eof constant configuration titles and descriptions for order total module ot_loyalty_discount
];
return $define;
