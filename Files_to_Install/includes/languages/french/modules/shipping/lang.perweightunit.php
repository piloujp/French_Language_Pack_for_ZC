<?php
$define = [
    'MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_TITLE' => 'Par Unité',
    'MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_DESCRIPTION' => 'Par unité',
    'MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_WAY' => 'Meilleure route',
// bof constant configuration titles and descriptions for perweightunit Shipping
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_STATUS' => 'Activer l\'expédition par unité de poids',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_STATUS' => 'Souhaitez-vous proposer une livraison basée sur des unités ?<br><br>Quantité de produits x Unités (poids des produits) x Coût par unité',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_COST' => 'Frais d\'expédition par unité',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_COST' => 'REMARQUE : lorsque vous utilisez ce module d\'expédition, assurez-vous de vérifier les paramètres de tare dans le menu Expédition/Emballage et définissez le poids le plus élevé suffisamment haut pour accomoder le prix, par exemple 5 000,00 $, puis ajustez les paramètres des petits et grands colis qui augmenteront également le prix.<br><br>Ces charges d\'expédition seront utilisés pour déterminer les frais d\'expédition en fonction de : Quantité de produits x Unités (poids des produits) x Coût par unité - dans une commande qui utilise cette méthode d\'expédition.',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING' => 'Frais de traitement',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING' => 'Frais de traitement pour ce mode d\'expédition.',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD' => 'Frais de traitement par commande ou par boîte',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD' => 'Souhaitez-vous facturer des frais de traitement par commande ou par boîte ?',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_TAX_CLASS' => 'Classe de la taxe',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_TAX_CLASS' => 'Utilisez la classe de taxe suivante sur les frais d’expédition.',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_TAX_BASIS' => 'Base de calcul de la taxe',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_TAX_BASIS' => 'Sur quelle base la taxe d\'expédition est-elle calculée ? Les options sont :<br>Expédition - Basée sur l\'adresse d\'expédition du client<br>Facturation - Basée sur l\'adresse de facturation du client<br>Magasin - Basée sur l\'adresse du magasin si la zone de facturation/d\'expédition est égale à la zone du magasin',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_ZONE' => 'Zone d\'expédition',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_ZONE' => 'Si une zone est sélectionnée, activez ce mode d\'expédition uniquement pour cette zone.',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_SORT_ORDER' => 'Ordre d\'affichage.',
// eof constant configuration titles and descriptions for perweightunit Shipping
];

return $define;
