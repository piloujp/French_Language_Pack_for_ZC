<?php
$define = [
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TITLE' => 'Traitement prioritaire',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_DESCRIPTION' => 'Traitement prioritaire',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TEXT_DESCR' => 'Envoyez ma commande en priorité ! Sélectionnez cette option de traitement en cliquant sur la case ci-dessous à côté de Ajouter un traitement prioritaire. Des frais de traitement prioritaire seront ajoutés à votre total une fois que vous aurez cliqué sur Continuer.',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TEXT_ENTER_CODE' => 'Ajouter un traitement prioritaire :',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_YES' => 'Oui',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_NO' => 'Non',
// Beginning of constant configuration titles and descriptions for order total module ot_priority_handling
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_STATUS' => 'Activer le module de gestion prioritaire de la commande',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_STATUS' => 'Voulez-vous activer ce module ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_SORT_ORDER' => 'Trier l\'ordre d\'affichage.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TYPE' => 'Type de frais de traitement prioritaire',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TYPE' => 'Précisez si les frais de traitement doivent être un pourcentage du sous-total du panier ou spécifiés sous forme de niveaux ci-dessous',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_PER' => 'Frais de traitement : Pourcentage',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_PER' => 'Saisissez le pourcentage du sous-total à facturer comme frais de traitement.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_FEE' => 'Frais de traitement : Frais par tranches',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_FEE' => 'Saisissez l\'incrément des tranches de frais. Les frais de traitement seront :<br>(sous-total/tranche de prix) x tranche de frais',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_INCREMENT' => 'Frais de traitement : Tranches de prix ',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_INCREMENT' => 'Saisissez l\'incrément des tranches de prix. Pour configurer une structure de frais fixes, saisissez une valeur élevée ici et votre forfait dans la tranche de frais ci-dessus. Par exemple, si vous souhaitez toujours facturer 10€ et que vos commandes sont généralement d\'environ 100€, saisissez 5000€ ici et 10€ dans la case Niveau de frais.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_OVER' => 'Frais de traitement : Plafond de prix par tranche',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_OVER' => 'Saisissez le niveau de prix maximum. Par exemple, les valeurs par défaut définissent des frais de 50 centimes pour chaque tranche de 100€ jusqu\'à 1 000€ maximum pour le sous-total du panier, soit 5€ maximum.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TAX_CLASS' => 'Classe de taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TAX_CLASS' => 'Si les frais de traitement sont taxables, sélectionnez la classe de taxe qui doit s’appliquer.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TAX_INLINE' => 'Affichage des taxes',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TAX_INLINE' => 'Il est possible d\'ajouter la taxe (voir ci-dessus) à la ligne du sous-total de la taxe pour la classe ci-dessus ou de l\'ajouter à la ligne des frais de traitement. À quelle ligne doit-elle être ajoutée ?',
// eof constant configuration titles and descriptions for order total module ot_priority_handling
];
return $define;
