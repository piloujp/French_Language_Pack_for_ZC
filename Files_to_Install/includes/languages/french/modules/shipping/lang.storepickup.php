<?php
$define = [
    'MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE' => 'Retrait en Point de Vente',
    'MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION' => 'Retrait sur place par le client',
    'MODULE_SHIPPING_STOREPICKUP_TEXT_WAY' => 'Sur place',
    'MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS' => '',
// bof constant configuration titles and descriptions for Storepickup Shipping
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_STATUS' => 'Activer l\'expédition pour le retrait en magasin',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_STATUS' => 'Souhaitez-vous proposer un tarif de livraison en magasin ?',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST' => 'Lieux de réception',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST' => 'Saisissez une liste d\'emplacements, séparés par des points-virgules (;).<br>Vous pouvez éventuellement spécifier des frais/suppléments pour chaque emplacement en ajoutant une virgule et un montant. Si aucun montant n\'est spécifié, le montant des frais d\'expédition génériques du paramètre suivant sera appliqué.<br><br>Exemples :<br>121 Main Street;20 Church Street<br>Sunnyside,4.00;Lee Park,5.00;High Street,0.00<br>Dallas;Tulsa,5.00;Phoenix,0.00<br>Pour une utilisation multilingue, consultez l\'instruction dans le fichier de langue de ce module.',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_COST' => 'Frais de livraison',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_COST' => 'Les frais d\'expédition pour toutes les commandes qui utilisent ce mode d\'expédition.',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_TAX_CLASS' => 'Classe de la taxe',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_TAX_CLASS' => 'Utilisez la classe de taxe suivante sur les frais d’expédition.',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_TAX_BASIS' => 'Base de calcul de la taxe',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_TAX_BASIS' => 'Sur quelle base la taxe d\'expédition est-elle calculée ? Les options sont :<br>Expédition - Basée sur l\'adresse d\'expédition du client<br>Facturation - Basée sur l\'adresse de facturation du client<br>Magasin - Basée sur l\'adresse du magasin si la zone de facturation/d\'expédition est égale à la zone du magasin',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_ZONE' => 'Zone d\'expédition',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_ZONE' => 'Si une zone est sélectionnée, activez ce mode d\'expédition uniquement pour cette zone.',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_SORT_ORDER' => 'Ordre d\'affichage.',
// eof constant configuration titles and descriptions for Storepickup Shipping
];

// MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS permet de définir plusieurs emplacements/méthodes par langue. Il n'est utilisé que si l'acheteur a sélectionné une langue autre que celle par défaut.
// Le contenu de la définition MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS doit être le même que celui des paramères du module d'expédition dans votre administration, juste avec les noms modifiés.
// Les formats typiques sont?:
// "Emplacement un, 5.00; Emplacement deux, 3.50; Emplacement trois, 0.00"
// "Emplacement un, Emplacement deux, Emplacement trois"
// ou laissez-le vide pour utiliser simplement le même texte que celui défini dans l'administration, quelle que soit la langue
// CONSEIL : ce champ doit rester vide pour la langue par défaut, sinon le champ Paramètres de l\'administration n'est jamais utilisé.

return $define;
