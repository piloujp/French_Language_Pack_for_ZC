<?php
$define = [
    'MODULE_SHIPPING_ZONES_TEXT_TITLE' => 'Zones Tarifaires',
    'MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION' => 'Frais de livraison par zone',
    'MODULE_SHIPPING_ZONES_TEXT_WAY' => 'Livraison vers',
    'MODULE_SHIPPING_ZONES_INVALID_ZONE' => 'Pas de livraison possible vers le pays sélectionné',
    'MODULE_SHIPPING_ZONES_UNDEFINED_RATE' => 'Le coût de livraison ne peut être actuellement déterminé',
    // bof constant configuration titles and descriptions for zones Shipping
    'CFGTITLE_MODULE_SHIPPING_ZONES_STATUS' => 'Activer l\'expédition par zones',
    'CFGDESC_MODULE_SHIPPING_ZONES_STATUS' => 'Souhaitez-vous proposer une livraison basée sur des zones tarifaires ?',
    'CFGTITLE_MODULE_SHIPPING_ZONES_METHOD' => 'Méthode de calcul',
    'CFGDESC_MODULE_SHIPPING_ZONES_METHOD' => 'Calculer le coût en fonction du poids, du prix ou du nombre d\'articles ?',
    'CFGTITLE_MODULE_SHIPPING_ZONES_TAX_CLASS' => 'Classe de la taxe',
    'CFGDESC_MODULE_SHIPPING_ZONES_TAX_CLASS' => 'Utilisez la classe de taxe suivante sur les frais d’expédition.',
    'CFGTITLE_MODULE_SHIPPING_ZONES_TAX_BASIS' => 'Base de calcul de la taxe',
    'CFGDESC_MODULE_SHIPPING_ZONES_TAX_BASIS' => 'Sur quelle base la taxe d\'expédition est-elle calculée ? Les options sont :<br>Expédition - Basée sur l\'adresse d\'expédition du client<br>Facturation - Basée sur l\'adresse de facturation du client<br>Magasin - Basée sur l\'adresse du magasin si la zone de facturation/d\'expédition est égale à la zone du magasin',
    'CFGTITLE_MODULE_SHIPPING_ZONES_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_SHIPPING_ZONES_SORT_ORDER' => 'Ordre d\'affichage.',
    'CFGTITLE_MODULE_SHIPPING_ZONES_SKIPPED' => 'Ignorer les pays suivants en utilisant une liste séparée par des virgules des codes de pays ISO à deux caractères',
    'CFGDESC_MODULE_SHIPPING_ZONES_SKIPPED' => 'Désactiver pour les pays suivants :',
    'CFGTITLE_MODULE_SHIPPING_ZONES_COUNTRIES_1' => 'Pays d\'expédition de la zone 1',
    'CFGDESC_MODULE_SHIPPING_ZONES_COUNTRIES_1' => 'Liste séparée par des virgules de codes de pays ISO à deux caractères qui font partie de la zone 1.<br>Définissez sur 00 pour indiquer tous les codes de pays ISO à deux caractères qui ne sont pas spécifiquement définis.',
    'CFGTITLE_MODULE_SHIPPING_ZONES_COST_1' => 'Tableau des tarifs d\'expéditions de la zone 1',
    'CFGDESC_MODULE_SHIPPING_ZONES_COST_1' => 'Tarifs d\'expédition vers les destinations de la zone 1 en fonction d\'un groupe de poids/prix maximum de commande. Exemple : 3:8.50,7:10.50,... Un poids/prix inférieur ou égal à 3 coûterait 8,50 pour les destinations de la zone 1.<br>Vous pouvez également utiliser des pourcentages, tels que 25:8.50,35:5%,40:9.50,10000:7% pour facturer une valeur en pourcentage du total de la commande',
    'CFGTITLE_MODULE_SHIPPING_ZONES_HANDLING_1' => 'Frais de traitement de la zone 1',
    'CFGDESC_MODULE_SHIPPING_ZONES_HANDLING_1' => 'Frais de traitement pour cette zone d\'expédition',
    'CFGTITLE_MODULE_SHIPPING_ZONES_HANDLING_METHOD_1' => 'Frais de traitement par commande ou par boîte pour la zone 1 (Quand le poids est utilisé)',
    'CFGDESC_MODULE_SHIPPING_ZONES_HANDLING_METHOD_1' => 'Souhaitez-vous facturer des frais de traitement par commande ou par boîte ?',
    'CFGTITLE_MODULE_SHIPPING_ZONES_COUNTRIES_2' => 'Pays d\'expédition de la zone 2',
    'CFGDESC_MODULE_SHIPPING_ZONES_COUNTRIES_2' => 'Liste séparée par des virgules de codes de pays ISO à deux caractères qui font partie de la zone 2.<br>Définissez sur 00 pour indiquer tous les codes de pays ISO à deux caractères qui ne sont pas spécifiquement définis.',
    'CFGTITLE_MODULE_SHIPPING_ZONES_COST_2' => 'Tableau des tarifs d\'expéditions de la zone 2',
    'CFGDESC_MODULE_SHIPPING_ZONES_COST_2' => 'Tarifs d\'expédition vers les destinations de la zone 2 en fonction d\'un groupe de poids/prix maximum de commande. Exemple : 3:8.50,7:10.50,... Un poids/prix inférieur ou égal à 3 coûterait 8,50 pour les destinations de la zone 2.<br>Vous pouvez également utiliser des pourcentages, tels que 25:8.50,35:5%,40:9.50,10000:7% pour facturer une valeur en pourcentage du total de la commande',
    'CFGTITLE_MODULE_SHIPPING_ZONES_HANDLING_2' => 'Frais de traitement de la zone 2',
    'CFGDESC_MODULE_SHIPPING_ZONES_HANDLING_2' => 'Frais de traitement pour cette zone d\'expédition',
    'CFGTITLE_MODULE_SHIPPING_ZONES_HANDLING_METHOD_2' => 'Frais de traitement par commande ou par boîte pour la zone 2 (Quand le poids est utilisé)',
    'CFGDESC_MODULE_SHIPPING_ZONES_HANDLING_METHOD_2' => 'Souhaitez-vous facturer des frais de traitement par commande ou par boîte ?',
    'CFGTITLE_MODULE_SHIPPING_ZONES_COUNTRIES_3' => 'Pays d\'expédition de la zone 3',
    'CFGDESC_MODULE_SHIPPING_ZONES_COUNTRIES_3' => 'Liste séparée par des virgules de codes de pays ISO à deux caractères qui font partie de la zone 3.<br>Définissez sur 00 pour indiquer tous les codes de pays ISO à deux caractères qui ne sont pas spécifiquement définis.',
    'CFGTITLE_MODULE_SHIPPING_ZONES_COST_3' => 'Tableau des tarifs d\'expéditions de la zone 3',
    'CFGDESC_MODULE_SHIPPING_ZONES_COST_3' => 'Tarifs d\'expédition vers les destinations de la zone 3 en fonction d\'un groupe de poids/prix maximum de commande. Exemple : 3:8.50,7:10.50,... Un poids/prix inférieur ou égal à 3 coûterait 8,50 pour les destinations de la zone 3.<br>Vous pouvez également utiliser des pourcentages, tels que 25:8.50,35:5%,40:9.50,10000:7% pour facturer une valeur en pourcentage du total de la commande',
    'CFGTITLE_MODULE_SHIPPING_ZONES_HANDLING_3' => 'Frais de traitement de la zone 3',
    'CFGDESC_MODULE_SHIPPING_ZONES_HANDLING_3' => 'Frais de traitement pour cette zone d\'expédition',
    'CFGTITLE_MODULE_SHIPPING_ZONES_HANDLING_METHOD_3' => 'Frais de traitement par commande ou par boîte pour la zone 3 (Quand le poids est utilisé)',
    'CFGDESC_MODULE_SHIPPING_ZONES_HANDLING_METHOD_3' => 'Souhaitez-vous facturer des frais de traitement par commande ou par boîte ?',
    // eof constant configuration titles and descriptions for zones Shipping
];

return $define;