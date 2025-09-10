<?php
/**
 * Monthly Sales and Tax Summary mod for Zen Cart
 * Version 3.0.0
 * @copyright Portions Copyright 2004-2025 Zen Cart Team
 * @author Vinos de Frutas Tropicales (lat9)

  By SkipWater <skip@ccssinc.net> 11.24.2011
  With modifications by lat9: Copyright (c) 2013-2022 Vinos de Frutas Tropicales

  Powered by Zen-Cart (www.zen-cart.com)
  Portions Copyright (c) 2006 The Zen Cart Team

  Released under the GNU General Public License
  available at www.zen-cart.com/license/2_0.txt
  or see "license.txt" in the downloaded zip 

  DESCRIPTION: Monthly Sales Report
*/
$define = [
    'STATS_MONTHLY_SALES_DEBUG' => 'off', //  Enables (on) or disables (off) the ability of the plugin to create a debug trace file (myDEBUG-sms.log) in the /logs directory.

    'SMS_VERSION' => 'v3.0.0',

    'HEADING_TITLE' => 'Résumé mensuel des ventes et taxes',
    'HEADING_SUBTITLE' => 'Affichage des ventes pour %s',
    'HEADING_SUBTITLE_STATUS' => ', avec le statut de commande suivant : %s',    //-%s is filled in with the name of the orders-status selected
    'HEADING_SUBTITLE_STATE' => ' et ce statut : %s',
    'HEADING_TITLE_STATUS' => 'Statut: ',
    'TEXT_ALL_ORDERS' => 'Toutes les commandes',
    'HEADING_TITLE_STATE' => 'Département(s) :',
    'TEXT_ALL_STATES' => 'Tous les départements',
    'TEXT_NOTHING_FOUND' => 'Aucun revenu pour cette sélection de date/statut.',
    'TEXT_BUTTON_REPORT_INVERT' => 'Inverser',
    'TEXT_BUTTON_REPORT_PRINT' => 'Imprimer',
    'TEXT_BUTTON_REPORT_SAVE' => 'Enregistrer CSV',
    'TEXT_BUTTON_REPORT_BACK_DESC' => 'Retour au résumé par mois',
    'TEXT_BUTTON_REPORT_INVERT_DESC' => 'Inverser les lignes du haut vers le bas',
    'TEXT_BUTTON_REPORT_PRINT_DESC' => 'Afficher le rapport dans une fenêtre optimisée pour l\'impression',
    'TEXT_BUTTON_REPORT_HELP_DESC' => 'À propos de ce rapport et comment utiliser ses fonctionnalités',
    'TEXT_BUTTON_REPORT_GET_DETAIL' => 'Cliquez ici pour consulter le résumé quotidien de ce mois.',

    'TABLE_HEADING_YEAR' => 'Année',
    'TABLE_HEADING_MONTH' => 'Mois',
    'TABLE_HEADING_DAY' => 'Jour',
    'TABLE_HEADING_INCOME' => 'Revenu brut',
    'TABLE_HEADING_SALES' => 'Ventes de produits',
    'TABLE_HEADING_NONTAXED' => 'Ventes non taxées',
    'TABLE_HEADING_TAXED' => 'Ventes taxées',
    'TABLE_HEADING_TAX_COLL' => 'Taxess perçues',
    'TABLE_HEADING_SHIPHNDL' => 'Frais de port et de manutention',
    'TABLE_HEADING_LOWORDER' => 'Frais de petite commande',
    'TABLE_HEADING_VOUCHER' => 'bons d\'achat',
    'TABLE_HEADING_COUPON' => 'Coupons',
    'TABLE_HEADING_OTHER' => 'Autre',
    'TABLE_FOOTER_YEAR' => 'ANNÉE',

    // -----
    // Language constants used by the report's AJAX handler (/includes/classes/ajax/zcAjaxMonthlySales.php).
    //
    'SMS_AJAX_ORDER_ID' => 'Num. de commande',
    'SMS_AJAX_DATE_PURCHASED' => 'Date d\'achat',
    'SMS_AJAX_TAX_DESCRIPTION' => 'Description de la taxe',
    'SMS_AJAX_TAX' => 'Taxe',
    'SMS_AJAX_TAX_TOTAL' => 'Total :',

    'SMS_AJAX_TITLE_MONTHLY' => 'Affichage des commandes pour %1$s %2$u',      //-Uses monthname (%1$s), year (%2$u)
    'SMS_AJAX_TITLE_DAILY' => 'Affichage des commandes pour le %1$u %2$s %3$u',   //-Uses day (%1$u), monthname (%2$s) and year (%3%u)

    'HELP_CLOSE' => 'Fermer',
    'HELP_CONTENT_HEADER' => 'Utiliser le rapport de ventes mensuel',
];

$table_heading_income = $define['TABLE_HEADING_INCOME'];
$table_heading_sales = $define['TABLE_HEADING_SALES'];
$table_heading_nontaxed = $define['TABLE_HEADING_NONTAXED'];
$table_heading_taxed = $define['TABLE_HEADING_TAXED'];
$table_heading_tax_coll = $define['TABLE_HEADING_TAX_COLL'];
$table_heading_shiphndl = $define['TABLE_HEADING_SHIPHNDL'];
$table_heading_loworder = $define['TABLE_HEADING_LOWORDER'];
$table_heading_voucher = $define['TABLE_HEADING_VOUCHER'];
$table_heading_coupon = $define['TABLE_HEADING_COUPON'];
$table_heading_other = $define['TABLE_HEADING_OTHER'];
$sms_version = $define['SMS_VERSION'];

/**
 * -----
 * I know, naughty HTML contained in language definitions, but there's no equivalent of a
 * define-page in the admin :-( - lat9
 *
 * Be careful about editing this out. If you want to use a define, create a variable and 
 * assign the constant there. THEN use the new variable where you want to put the constant.
 * Otherwise... uhh... look up how PHP Heredocs work. (keep the first line as is and keep 
 * the EOF; at the end on its own separate line.
 * - retched
 */
$define['HELP_CONTENT_HTML'] =<<<EOF

<h2>Rapport d'activité du magasin par mois</h2>
<p>Lorsqu'il est sélectionné pour la première fois dans le menu « Rapports », ce rapport affiche un récapitulatif mensuel des transactions financières de toutes les commandes enregistrées dans la base de données de la boutique. Chaque mois est présenté sur une ligne distincte, indiquant le chiffre d'affaires total de la boutique, ainsi que ses composantes (taxes, frais de port et de traitement, frais pour les petites commandes, coupons de réduction et bons d'achat). Si la fonctionnalité associée est désactivée dans la boutique, les colonnes relatives aux frais pour les petites commandes, aux coupons de réduction et aux bons d'achat sont omises du rapport (et les montants correspondants sont alors classés dans la catégorie « Autres »).</p>
<p>La première ligne correspond au mois en cours, tandis que les lignes suivantes résument les commandes passées par mois. En dessous des données de chaque année, une ligne récapitule les totaux annuels de chaque colonne du rapport. Pour inverser l'ordre des lignes, cochez la case « Inverser » située en haut du formulaire et cliquez sur le bouton « Appliquer ».</p>
<h2>Rapport mensuel récapitulatif par jour</h2>
<p>Pour afficher un récapitulatif quotidien des activités par mois, cliquez sur le lien correspondant au nom du mois, situé à gauche de chaque ligne. Pour revenir au récapitulatif mensuel depuis le récapitulatif quotidien, cliquez sur le bouton « Retour » situé en bas à gauche de l'écran.</p>
<h2>Ce que représentent les colonnes</h2>
<p>À gauche, on trouve le mois et l'année correspondant à la période. Les colonnes suivantes, de gauche à droite, indiquent :</p><ul>
<li><b>$table_heading_income</b> &mdash; montant total de toutes les commandes. Il s'agit de la somme des montants de toutes les commandes passées pendant la période.</li>
<li><b>$table_heading_sales</b> &mdash; Le total des ventes de produits achetés durant cette période. Ce montant correspond à la somme obtenue en multipliant le prix final de chaque produit (après déduction des remises) par sa quantité vendue.</li>
<li><b>$table_heading_nontaxed</b> &mdash; le sous-total des ventes de produits qui n'étaient <b>pas</b> soumis à la taxe.</li>
<li><b>$table_heading_taxed</b> &mdash; le sous-total des ventes de produits soumises à la taxe.</li>
<li><b>$table_heading_tax_coll</b> &mdash; le montant des taxes perçues auprès des clients, y compris les taxes applicables aux frais de port.</li>
<li><b>$table_heading_shiphndl </b> &mdash; le montant total des frais de port et de manutention perçus.</li></ul><p>Enfin, les champs optionnels　suivants　sont affichés :</p><ul>
<li><b>$table_heading_loworder</b> &mdash; les éventuels frais pour les commandes de faible montant, si la boutique les applique.</li>
<li><b>$table_heading_voucher</b> &mdash; les frais liés aux bons d'achat, le cas échéant (si le magasin propose ce type de paiement).</li>
<li><b>$table_heading_coupon</b> &mdash; les éventuelles réductions liées aux coupons, si le magasin propose ce type de coupons.</li>
<li><b>$table_heading_other</b> &mdash; tous les autres montants non essentiels (par exemple, l'assurance de transport).</li>
</ul>
<h2>Sélectionner le résumé du rapport par statut</h2>
<p>Pour afficher les données de synthèse mensuelles ou journalières pour un statut de commande spécifique, sélectionnez le statut souhaité dans la liste déroulante située en haut à droite de l'écran du rapport. Selon la configuration de votre boutique, vous trouverez par exemple les statuts « En attente » ou « Expédié ». En modifiant ce statut, le rapport sera recalculé et affiché automatiquement.</p>
<h2>Afficher les détails des taxes</h2>
<p>Le montant des taxes indiqué dans chaque ligne du rapport est un lien vers une fenêtre contextuelle qui affiche le nom des catégories de taxes appliquées ainsi que leur montant.</p>
<h2>Imprimer le rapport</h2>
<p>Pour afficher le rapport dans une fenêtre optimisée pour l'impression, cliquez sur le bouton « Imprimer ». Le nom du magasin et les en-têtes indiquent les commandes sélectionnées ainsi que la date de génération du rapport.</p>
<h2>Enregistrement des données du rapport dans un fichier</h2>
<p>Pour enregistrer les données du rapport dans un fichier local, cliquez sur le bouton « Enregistrer au format CSV » en haut du rapport. Les données seront envoyées à votre navigateur sous forme de fichier texte, et une fenêtre de dialogue « Enregistrer le fichier » apparaîtra pour vous permettre de choisir le répertoire de destination. Le fichier est au format CSV (valeurs séparées par des virgules), avec une ligne par ligne du rapport, commençant par l'en-tête, et chaque valeur étant séparée par une virgule. Ce fichier peut être importé facilement et avec précision dans les logiciels de tableur courants, tels qu'Excel et Quattro Pro. Le nom de fichier proposé par défaut comprend le nom du rapport, le statut sélectionné et la date et l'heure de génération du rapport.</p>
<p>$sms_version</p>
EOF;

return $define;
