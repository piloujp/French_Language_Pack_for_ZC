<?php
$define = [
    'MODULE_SHIPPING_TABLE_TEXT_TITLE' => 'Tableau Tarifaire',
    'MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION' => 'Tableau tarifaire',
    'MODULE_SHIPPING_TABLE_TEXT_WAY' => 'La meilleure façon',
    // bof constant configuration titles and descriptions for table Shipping
    'CFGTITLE_MODULE_SHIPPING_TABLE_STATUS' => 'Activer l\'expédition basée sur un tableau tarifaire',
    'CFGDESC_MODULE_SHIPPING_TABLE_STATUS' => 'Souhaitez-vous proposer une livraison basée sur un tableau de tarifs ?',
    'CFGTITLE_MODULE_SHIPPING_TABLE_COST' => 'Tableau des frais d\'expédition',
    'CFGDESC_MODULE_SHIPPING_TABLE_COST' => 'Les frais de livraison sont basés sur le coût total ou le poids des articles ou le nombre d\'articles. Exemple : 25:8.50,50:5.50, etc. Jusqu\'à 25, les frais sont de 8,50, de 25 à 50, les frais sont de 5,50, etc. Vous pouvez également utiliser des pourcentages, tels que 25:8.50,35:5%,40:9.50,10000:7% pour facturer une valeur en pourcentage du total de la commande.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_MODE' => 'Base de tarification',
    'CFGDESC_MODULE_SHIPPING_TABLE_MODE' => 'Les frais d\'expédition peuvent être calculés en fonction du poids total des articles commandés, du prix total des articles commandés ou du nombre total d\'articles commandés.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_HANDLING' => 'Frais de traitement',
    'CFGDESC_MODULE_SHIPPING_TABLE_HANDLING' => 'Frais de traitement pour ce mode d\'expédition.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_TAX_CLASS' => 'Classe de la taxe',
    'CFGDESC_MODULE_SHIPPING_TABLE_TAX_CLASS' => 'Utilisez la classe de taxe suivante sur les frais d’expédition.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_TAX_BASIS' => 'Base de calcul de la taxe',
    'CFGDESC_MODULE_SHIPPING_TABLE_TAX_BASIS' => 'Sur quelle base la taxe d\'expédition est-elle calculée ? Les options sont :<br>Expédition - Basée sur l\'adresse d\'expédition du client<br>Facturation - Basée sur l\'adresse de facturation du client<br>Magasin - Basée sur l\'adresse du magasin si la zone de facturation/d\'expédition est égale à la zone du magasin',
    'CFGTITLE_MODULE_SHIPPING_TABLE_ZONE' => 'Zone d\'expédition',
    'CFGDESC_MODULE_SHIPPING_TABLE_ZONE' => 'Si une zone est sélectionnée, activez ce mode d\'expédition uniquement pour cette zone.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_SHIPPING_TABLE_SORT_ORDER' => 'Ordre d\'affichage.',
    // eof constant configuration titles and descriptions for table Shipping
];

return $define;