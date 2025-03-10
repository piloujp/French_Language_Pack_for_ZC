<?php
/**
 * Order Total Module
 *
 * @package - Optional Insurance
 * @copyright Copyright 2007 Numinix Technology http://www.numinix.com
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: ot_insurance.php 2 2008-05-13 01:39:19Z numinix $
 */
$define = [
    'MODULE_ORDER_TOTAL_INSURANCE_TITLE' => 'Assurance expédition',
    'MODULE_ORDER_TOTAL_INSURANCE_DESCRIPTION' => 'Assurance expédition',
    'MODULE_ORDER_TOTAL_INSURANCE_TEXT_ENTER_CODE' => 'Souhaitez-vous assurer cette commande ?',
    'MODULE_ORDER_TOTAL_INSURANCE_ADD' => 'Ajouter une assurance (%s) ?',
    'MODULE_ORDER_TOTAL_INSURANCE_ADD_YES' => 'Oui',
    'MODULE_ORDER_TOTAL_INSURANCE_ADD_NO' => 'Non',
// Beginning of constant configuration titles and descriptions for order total module ot_insurance
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_STATUS' => 'Activer le module d\'assurance',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_STATUS' => 'Voulez-vous activer ce module ? Pour le désactiver complètement, cette option et celle ci-dessous doivent être définies sur faux.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_SORT_ORDER' => 'Ordre de tri d\'affichage. Remarque : doit être supérieur au sous-total.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_TABLE' => 'Utiliser un tableau de tarifs ?',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_TABLE' => 'Voulez-vous utiliser les tarifs du tableau ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_TYPE' => 'Type d\'assurance alternatif',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_TYPE' => 'Si vous n\'utilisez pas les <b>tarifs de tableau</b>, souhaitez-vous facturer en pourcentage du sous-total du panier ou en fonction d\'un montant spécifique ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_PER' => 'Assurance au pourcentage',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_PER' => 'Utilisé avec les calculs de <code>pourcentage</code>. Quel pourcentage doit être appliqué au sous-total du panier pour calculer le montant de l\'assurance ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_FEE' => 'Taux d\'assurance',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_FEE' => 'Utilisé avec les calculs du <code>montant</code> et du <b>tableau de tarifs</b>. Quel montant souhaitez-vous facturer par <b>montant incrémentiel</b> ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_INCREMENT' => 'Montant incrémentiel',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_INCREMENT' => 'Utilisé avec les calculs du <code>montant</code> et du <b>tableau de tarifs</b>. Défini le montant de l\'incrément pour lequel le <b>taux d\'assurance</b> est appliqué. Si, par exemple, le montant de l\'incrément est <var>100</var> et le taux est <var>0,50</var>, l\'assurance est calculée à 0,50€ par tranche de 100,00€ du total.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_OVER' => 'Montant exonéré de frais',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_OVER' => 'Utilisé avec les calculs de <code>montant</code>. Définissez cette valeur sur le montant total qui est exempté des calculs d\'assurance. Par exemple, définir sur 100 pour que toutes les commandes inférieures à 100 soient exemptées, déjà assurées, etc.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_TAX_CLASS' => 'Classe de taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_TAX_CLASS' => 'Utiliser la catégorie de taxe suivante sur les frais d’assurance.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_VIRTUAL' => 'Pas de frais d\'assurance sur les produits virtuels',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_VIRTUAL' => 'Ne facturez pas de frais d\'assurance lorsque le panier contient uniquement des produits virtuels',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_GV' => 'Pas de frais d\'assurance sur les chèques cadeaux',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_GV' => 'Ne facturez pas de frais d\'assurance lorsque le panier contient uniquement des chèques-cadeaux',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_FREE_SHIPPING' => 'Pas de frais d\'assurance sur la livraison gratuite',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_FREE_SHIPPING' => 'Ne calculez pas l\'assurance pour les produits qui bénéficient de la livraison gratuite (y compris les gv et produits virtuels)',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_REQUIRED' => 'Montant d\'assurance requis',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_REQUIRED' => 'Facturer automatiquement l\'assurance d\'expédition pour les montants supérieurs à X euros',
];

global $db;
$geozones = $db->Execute("SELECT * FROM " . TABLE_GEO_ZONES);
$num_zones = $geozones->RecordCount();

for ($i = 1; $i <= $num_zones; $i++) {
    if ($i === 1) {
        $define['CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_ZONE_' . $i] = 'Zone d\'assurance ' . $i;
        $define['CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_ZONE_' . $i] = 'Si une zone est sélectionnée, activez cette assurance uniquement pour cette zone (Remarque : utilisez également ce champ pour les tarifs hors tableau).';
    } else {
        $define['CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_ZONE_' . $i] = 'Zone d\'assurance ' . $i;
        $define['CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_ZONE_' . $i] = 'Si une zone est sélectionnée, activez cette assurance uniquement pour cette zone.';
    }
    $define['CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_COST_' . $i] = 'Tableau de tarifs d\'assurance de la zone ' . $i;
    $define['CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_COST_' . $i] = 'Le coût de l\'assurance est basé sur le coût total des articles. Exemple : 25:8.50,50:5.50,etc. Jusqu\'à 25, charger 8,50, de là à 50, charger 5,50, etc.';
}
// eof constant configuration titles and descriptions for order total module ot_insurance

return $define;
