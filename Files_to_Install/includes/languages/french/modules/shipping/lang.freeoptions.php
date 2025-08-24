<?php
$define = [
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE' => 'Options de livraison gratuite',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION' => '
freeoptions est utilisé pour afficher une option de livraison gratuite lorsque d\'autres modules de livraison sont affichés.
Il peut être basé sur: toujours afficher, Total commande, Poids commande, Nombre d\'articles commandés.
Le module freeoptions ne s\'affiche pas quand freeshipper est actif.<br /><br />
Mettre un total à &gt;= 0,00 et &lt;= rien (vide) activera ce module pour qu\'il s\'affiche avec les autres modules, sauf pour LIVRAISON GRATUITE - freeshipper.<br /><br />
NOTE: le fait de laisser tous les réglages vides pour Total, Poids et Nombre d\'articles désactivera ce module.<br /><br />
NOTE: les options de livraison gratuite ne s\'affichent pas si LIVRAISON GRATUITE est utilisé avec un poids de 0.
Voir: freeshipper
',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY' => 'Livraison gratuite',
// bof constant configuration titles and descriptions for freeoptions Shipping
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_STATUS' => 'Activer les options d\'expédition gratuites',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_STATUS' => 'Les options gratuites sont utilisées pour afficher une option de livraison gratuite lorsque d\'autres modules d\'expédition sont affichés. Cela peut être basé sur : « Toujours afficher », « Total de la commande », « Poids de la commande » ou « Nombre d\'articles de la commande ». Le module Options gratuites ne s\'affiche pas lorsque l\'option « Expédition gratuite » est affichée.<br><br>Le réglage du total sur >= 0,00 et <= rien (laisser vide) activera ce module avec tous les modules d\'expédition, à l\'exception de la livraison gratuite - freeshipper.<br><br>REMARQUE : si vous laissez tous les paramètres pour le total, le poids et le nombre d\'articles vides, ce module sera désactivé.<br><br>REMARQUE : les options de livraison gratuite ne s\'affichent pas si la livraison gratuite est utilisée sur la base du principe « poids nul correspond à la livraison gratuite ». Voir : freeshipper<br><br>Souhaitez-vous proposer un tarif d\'expédition avec options gratuites ?',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_COST' => 'Frais de livraison',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_COST' => 'Les frais d\'expédition pour toutes les commandes qui utilisent ce mode d\'expédition.',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_HANDLING' => 'Frais de traitement',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_HANDLING' => 'Frais de traitement pour ce mode d\'expédition.',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN' => 'Total >=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN' => 'Livraison gratuite lorsque le total est >=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX' => 'Total <=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX' => 'Livraison gratuite lorsque le total est <=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN' => 'Poids >=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN' => 'Livraison gratuite lorsque le poids est >=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX' => 'Poids <=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX' => 'Livraison gratuite lorsque le poids est <=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN' => 'Nombre d\'articles >=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN' => 'Livraison gratuite lorsque le nombre d\'articles est >=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX' => 'Nombre d\'articles <=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX' => 'Livraison gratuite lorsque le nombre d\'articles est <=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_TAX_CLASS' => 'Classe de la taxe',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_TAX_CLASS' => 'Utilisez la classe de taxe suivante sur les frais d’expédition.',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_TAX_BASIS' => 'Base de calcul de la taxe',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_TAX_BASIS' => 'Sur quelle base la taxe d\'expédition est-elle calculée ? Les options sont :<br>Expédition - Basée sur l\'adresse d\'expédition du client<br>Facturation - Basée sur l\'adresse de facturation du client<br>Magasin - Basée sur l\'adresse du magasin si la zone de facturation/d\'expédition est égale à la zone du magasin',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_ZONE' => 'Zone d\'expédition',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_ZONE' => 'Si une zone est sélectionnée, activez ce mode d\'expédition uniquement pour cette zone.',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_SORT_ORDER' => 'Ordre d\'affichage.',
// eof constant configuration titles and descriptions for freeoptions Shipping
];

return $define;