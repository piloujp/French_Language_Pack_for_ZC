<?php
/**
 * Sales Report II, v4.0.0
 *
 * The language file contains all the text that appears on the report. The first set of
 * configuration defines actually impact the report's output and behavior.
 *
 * @author     Frank Koehl (PM: BlindSide)
 * @author     Conor Kerr <conor.kerr_zen-cart@dev.ceon.net>
 * @updated by stellarweb to work with version 1.5.0 02-29-12 
 * @updated by lat9 for continued operation under zc155/zc156, 20190622
 * @copyright  Portions Copyright 2003-2006 Zen Cart Development Team
 * @copyright  Portions Copyright 2003 osCommerce
 * @license    http://www.gnu.org/copyleft/gpl.html   GNU Public License V2.0
 */

$defines = [
    //////////////////////////////////////////////////////////
    // DISPLAY EMPTY TIMEFRAME LINES
    // Setting this define to false will disable displaying
    // a timeframe line if that timeframe is empty.  By
    // default, an empty timeframe displays the value of the
    // define TEXT_NO_DATA.
    //
    // Be aware, if this is enabled and your search yields
    // no results at all, the screen will look as if no search
    // was performed (which is why this is enabled by default).
    //
    // Note: This is a change from previous versions where false enabled
    // the display and true disabled the display!
    //
    'DISPLAY_EMPTY_TIMEFRAMES' => true,

    //////////////////////////////////////////////////////////
    // REPORTING A SUBSET OF CUSTOMERS / PRODUCTS
    // By checking the boxes to 'Only Include Specific customers
    // or Products (SEARCH_SPECIFIC_CUSTOMERS/PRODUCTS),
    // only orders for those customers / products will be
    // included in the result. By default, the included customers/
    // products will be printed above the results table. If this
    // gets too long, this printout can be disabled with
    // the DISPLAY booleans below.
    //
    // If you often want a specific product, you can set a 
    // default here, e.g.:
    // define('INCLUDE_PRODUCTS', '10, 15');
    //
    'INCLUDE_PRODUCTS' => '',
    'INCLUDE_CUSTOMERS' => '',
    'DISPLAY_TABLE_HEADING_CUSTOMERS' => true,
    'DISPLAY_TABLE_HEADING_PRODUCTS' => true,
    'TEXT_CUSTOMER_TABLE_HEADING' => ' Commandes pour : ',  //Prefix used to print before customer name(s) when filtering by customer

    //////////////////////////////////////////////////////////
    // PRODUCT MANUFACTURERS COLUMN
    // Setting this define to true will display the
    // manufacturer on each product line item, and will default
    // to the value of TEXT_NONE if there is no manufacturer.
    // False will remove the manufacturer column from the report.
    //
    'DISPLAY_MANUFACTURER' => false,

    //////////////////////////////////////////////////////////
    // ONE-TIME FEES COLUMN
    // If your store does not have *any* one-time fees on its
    // products, you can disable displaying the column.
    //
    // Note that this switch does not affect math calculations,
    // so if you happen to have a product with fees attached,
    // they will still be accounted for and appear in the total.
    //
    'DISPLAY_ONE_TIME_FEES' => false,

    //////////////////////////////////////////////////////////
    // DECIMAL PLACES IN AVERAGES
    // Sets the number of decimal places displayed in averages
    // on timeframe statistics display
    //
    'NUM_DECIMAL_PLACES' => 2,

    //////////////////////////////////////////////////////////
    // TIMEFRAME DATE DISPLAY
    // Note:  Other constants moved to the main processing file for v3.2.1.
    //
    'DATE_SPACER' => ' à<br>&nbsp;&nbsp;&nbsp;',

    //////////////////////////////////////////////////////////
    // EXCLUDE SPECIFIED PRODUCTS
    // Prevents specified products from appearing on the sales
    // report at all.  **ADDING PRODUCTS TO THIS DEFINE WILL
    // IMPACT TOTALS CALCULATIONS!**
    //
    // The value of the product will be excluded from totals
    // for gc_sold, gc_sold_qty, goods, num_products, and
    // diff_products.
    //
    // The values for gc_used, gc_used_qty, discount,
    // discount_qty, tax, and shipping all come from the
    // orders_total table, and so CANNOT be excluded based
    // on product ID.
    //
    // If an order is made up entirely of excluded products,
    // and has no shipping, discounts, tax, or used gift
    // certificates, it will have a total of 0.  In this
    // situation, the order will not be displayed in the results.
    //
    // EXAMPLE:     'EXCLUDE_PRODUCTS' => serialize([25, 14, 43]) );
    //
    'EXCLUDE_PRODUCTS' => serialize([]),

    /*
    ** LANGUAGE DEFINES
    */
    // Search menu heading
    'PAGE_HEADING' => 'Rapport de ventes II',
    'HEADING_TITLE_SEARCH' => '1. Collecter et filtrer les données',
    'HEADING_TITLE_SORT' => '2. Trier et choisir les résultats',
    'HEADING_TITLE_PROCESS' => '3. Générer un rapport',
    'SEARCH_TIMEFRAME' => 'Plage de temps',
    'SEARCH_TIMEFRAME_DAY' => ' Tous les jours',
    'SEARCH_TIMEFRAME_WEEK' => ' Hebdomadaire',
    'SEARCH_TIMEFRAME_MONTH' => ' Mensuel',
    'SEARCH_TIMEFRAME_YEAR' => ' Annuellement',
    'SEARCH_TIMEFRAME_SORT' => 'Trier par période',
    'SEARCH_DATE_PRESET' => 'Plage de dates prédéfinie',
    'SEARCH_DATE_CUSTOM' => 'Plage de dates personnalisées',
    'SEARCH_DATE_TODAY' => ' Aujourd\'hui (%s)',
    'SEARCH_DATE_YESTERDAY' => ' Hier (%s)',
    'SEARCH_DATE_LAST_MONTH' => ' Le mois dernier (%s)',
    'SEARCH_DATE_THIS_MONTH' => ' Ce mois-ci (%s)',
    'SEARCH_DATE_LAST_YEAR' => ' L\'année dernière (%s)',
    'SEARCH_DATE_LAST_12_MONTHS' => ' Les 12 derniers mois',
    'SEARCH_DATE_YTD' => ' Année à ce jour (%s)',
    'SEARCH_START_DATE' => 'Date de début',
    'SEARCH_END_DATE' => 'Date de fin (incluse)',
    'SEARCH_DATE_FORMAT' => 'dd/mm/yyyy',
    'SEARCH_DATE_TARGET' => 'Date de recherche de...',
    'SEARCH_PAYMENT_METHOD' => 'Mode de paiement',
    'SEARCH_PAYMENT_METHOD_OMIT' => 'Mode de paiement à omettre',
    'SEARCH_CURRENT_STATUS' => 'Statut actuel de la commande',
    'SEARCH_EXCLUDED_STATUS' => 'Statut de la commande à omettre',
    'SEARCH_SPECIFIC_CUSTOMERS' => 'Inclure uniquement des identifiants client spécifiques (liste séparée par des virgules)',
    'SEARCH_SPECIFIC_PRODUCTS' => 'Inclure uniquement des identifiants de produits spécifiques (liste séparée par des virgules)',
    'SEARCH_MANUFACTURER' => 'Fabricant du produit',
    'SEARCH_DETAIL_LEVEL' => 'Informations affichées',
    'SEARCH_OUTPUT_FORMAT' => 'Format de sortie',
    'SEARCH_SORT_PRODUCT' => 'Trier les produits par...',
    'SEARCH_SORT_ORDER' => 'Trier les commandes par...',
    'SEARCH_SORT_THEN' => 'Ensuite, trier par...',
    'BUTTON_SEARCH' => 'Montre-moi l\'argent !',
    'BUTTON_DEFAULT_SEARCH' => 'Recherche rapide',
    'SEARCH_WAIT_TEXT' => 'Traitement en cours, veuillez patienter...',

    // Form element text
    // radio buttons
    'RADIO_DATE_TARGET_PURCHASED' => 'Trier par achat',
    'RADIO_DATE_TARGET_STATUS' => 'Statut attribué (sélectionnez ci-dessous)',
    'RADIO_TIMEFRAME_SORT_ASC' => 'Le plus ancien en haut',
    'RADIO_TIMEFRAME_SORT_DESC' => 'Le plus récent en haut',
    'RADIO_LI_SORT_ASC' => 'Croissant',
    'RADIO_LI_SORT_DESC' => 'Décroissant',

    // dropdown menus
    'SELECT_DETAIL_TIMEFRAME' => 'Totaux de la période',
    'SELECT_DETAIL_PRODUCT' => '&nbsp;+ Détail des produits',
    'SELECT_DETAIL_ORDER' => '&nbsp;+ Détail des commandes',
    'SELECT_DETAIL_MATRIX' => 'Statistiques sur la période',
    'SELECT_OUTPUT_DISPLAY' => 'Affichage à l\'écran',
    'SELECT_OUTPUT_PRINT' => 'Format d\'impression',
    'SELECT_OUTPUT_CSV' => 'Exportation CSV',
    'SELECT_PRODUCT_ID' => 'ID du produit',
    'SELECT_QUANTITY' => 'Quantité',
    'SELECT_LAST_NAME' => 'Nom du client',

    // checkboxes
    'CHECKBOX_AUTO_PRINT' => ' Imprimer le rapport automatiquement',
    'CHECKBOX_CSV_HEADER' => ' Titres des colonnes sur la première ligne',
    'CHECKBOX_NEW_WINDOW' => ' Ouvrir les résultats dans une nouvelle fenêtre',
    'CHECKBOX_VALIDATE_TOTALS' => ' Afficher la colonne de validation du total de la commande',
    'CHECKBOX_DISPLAY_EMAIL_ADDRESS' => ' Afficher l\'adresse e-mail du client ?',

    // Report Column Headings
    // Timeframe
    'TABLE_HEADING_TIMEFRAME' => 'Période',
    'TABLE_HEADING_NUM_ORDERS' => 'Nb de commandes',
    'TABLE_HEADING_NUM_PRODUCTS' => 'Nb de produits',
    'TABLE_HEADING_TOTAL_GOODS' => 'Valeur des marchandises',
    'TABLE_HEADING_TAX' => 'Taxe',
    'TABLE_HEADING_GOODS_TAX' => 'Taxes produits',
    'TABLE_HEADING_ORDER_RECORDED_TAX' => 'Taxe sur les commandes enregistrées',
    'TABLE_HEADING_SHIPPING' => 'Expédition',
    'TABLE_HEADING_DISCOUNTS' => 'Réductions',
    'TABLE_HEADING_GC_SOLD' => 'Chèques cadeaux vendus',
    'TABLE_HEADING_GC_USED' => 'Chèques cadeaux utilisés',
    'TABLE_HEADING_TOTAL' => 'Total',
    'TABLE_FOOTER_TIMEFRAMES' => ' Périodes',

    // Order Line Items
    'TABLE_HEADING_ORDERS_ID' => 'ID de commande',
    'TABLE_HEADING_CUSTOMER' => 'Client',
    'TABLE_HEADING_EMAIL_ADDRESS' => 'Adresse email',
    'TABLE_HEADING_COUNTRY' => 'Pays',
    'TABLE_HEADING_STATE' => 'Département',
    'TABLE_HEADING_ORDER_TOTAL' => 'Total de la commande',
    'TABLE_HEADING_ORDER_TOTAL_VALIDATION' => 'Validité du total de la commande',

    // Product Line Items
    'TABLE_HEADING_PRODUCT_ID' => 'ID du produit',
    'TABLE_HEADING_PRODUCT_NAME' => 'Nom du produit',
    'TABLE_HEADING_PRODUCT_ATTRIBUTES' => 'Attributs',
    'TABLE_HEADING_MANUFACTURER' => 'Fabricant',
    'TABLE_HEADING_MODEL_NO' => 'Modèle n°',
    'TABLE_HEADING_BASE_PRICE' => 'Prix ​​de base',
    'TABLE_HEADING_FINAL_PRICE' => 'Prix ​​final',
    'TABLE_HEADING_QUANTITY' => 'Qté.',
    'TABLE_HEADING_ONETIME_CHARGES' => 'Frais uniques',
    'TABLE_HEADING_PRODUCT_TOTAL' => 'Total du produit',

    // Data Matrix
    'MATRIX_GENERAL_STATS' => 'Statistiques générales',
    'MATRIX_ORDER_REVENUE' => 'Chiffre d\'affaires total',
    'MATRIX_ORDER_PRODUCT_COUNT' => 'Nombre total de produits',
    'MATRIX_LARGEST' => 'Commande la plus importante : ',
    'MATRIX_SMALLEST' => 'Commande la plus petite : ',
    'MATRIX_AVERAGES' => 'Moyennes',
    'MATRIX_AVG_ORDER' => '&nbsp;valeur de la commande',
    'MATRIX_AVG_PROD_ORDER' => '&nbsp;produits par commande',
    'MATRIX_AVG_PROD_ORDER_DIFF' => '&nbsp;produits uniques par commande',
    'MATRIX_AVG_ORDER_CUST' => '&nbsp;commandes par client',
    'MATRIX_ORDER_STATS' => 'Statistiques de commande',
    'MATRIX_TOTAL_PAYMENTS' => 'Modes de paiement',
    'MATRIX_TOTAL_CC' => 'Cartes de crédit',
    'MATRIX_TOTAL_SHIPPING' => 'Méthodes d\'expédition',
    'MATRIX_TOTAL_CURRENCIES' => 'Devises utilisées',
    'MATRIX_TOTAL_CUSTOMERS' => 'Clients uniques',
    'MATRIX_PRODUCT_STATS' => 'Statistiques produit',
    'MATRIX_PRODUCT_SPREAD' => 'Diffusion du produit',
    'MATRIX_PRODUCT_REVENUE_RATIO' => '% du chiffre d\'affaires total',
    'MATRIX_PRODUCT_QUANTITY_RATIO' => 'Quantité totale %',

    // CSV Export
    'CSV_FILENAME_PREFIX' => 'sales_',
    'CSV_HEADING_START_DATE' => 'Date de début',
    'CSV_HEADING_END_DATE' => 'Date de fin',
    'CSV_HEADING_LAST_NAME' => 'Nom',
    'CSV_HEADING_FIRST_NAME' => 'Prénom',
    'CSV_HEADING_COUNTRY' => 'Pays',
    'CSV_HEADING_STATE' => 'Département',
    'CSV_SEPARATOR' => ',',
    'CSV_NEWLINE' => "\n",

    // Print Format
    'PRINT_DATE_TO' => ' jusqu\'au ',
    'PRINT_DATE_TARGET' => 'Date de ',
    'PRINT_TIMEFRAMES' => '%s périodes triées %s',
    'PRINT_DATE_PURCHASED' => 'date de création de la commande',
    'PRINT_DATE_STATUS' => 'attribution du statut',
    'PRINT_ORDER_STATUS' => '%s [%s]',
    'PRINT_PAYMENT_METHOD' => 'Mode de paiement :',
    'PRINT_CURRENT_STATUS' => 'Statut actuel de la commande :',
    'PRINT_DETAIL_LEVEL' => 'Affichage ',

    // javascript pop-up alert window
    'ALERT_JS_HIGHLIGHT' => '#FF40CF',
    'ALERT_MSG_START' => 'Il y a une ou plusieurs erreurs dans vos sélections :',
    'ALERT_DATE_INVALID_LENGTH' => '> Les dates doivent comporter 10 caractères : ',
    'ALERT_DATE_INVALID' => '> Ceci n\'est pas une date valide : ',
    'ALERT_MSG_FINISH' => 'Veuillez corriger le(s) problème(s) et soumettre à nouveau votre recherche.',

    // Other text defines
    'ERROR_MISSING_REQ_INFO' => 'Erreur : les champs obligatoires sont vides',
    'ALT_TEXT_SORT_ASC' => 'Trier à nouveau par ordre CROISSANT',
    'ALT_TEXT_SORT_DESC' => 'Trier à nouveau par ordre DÉCROISSANT',
    'TEXT_REPORT_TIMESTAMP' => 'Heure du rapport : ',
    'TEXT_PARSE_TIME' => 'Temps d\'analyse : %s sec.',
    'TEXT_EMPTY_SELECT' => '(doesn\'t matter)',
    'TEXT_QTY' => '| Qté : ',
    'TEXT_DIFF' => ' | Diff　: ',
    'TEXT_SAME' => '| (ident.)',
    'TEXT_SAME_ONE' => '| --',
    'TEXT_PRINT_FORMAT' => 'afficher le rapport au format d\'impression',
    'TEXT_NO_DATA' => '-- AUCUNE COMMANDE DANS LA PERIODE --',

    // Buttons
    'BUTTON_TIMEFRAME_PRESET' => 'Choisissez le préréglage',
    'BUTTON_TIMEFRAME_CUSTOM' => 'Personnaliser',
];

// -----
// Some of the language definitions reuse the main definitions; add them separately since
// they're not defined at this point.
//
$defines['ALERT_CSV_CONFLICT'] = '> La sortie CSV n\'est pas disponible pour l\'affichage ' . $defines['SELECT_DETAIL_MATRIX'] . '.';
$defines['ERROR_CSV_CONFLICT'] = 'La sortie CSV n\'est pas disponible pour l\'affichage <em>' . $defines['SELECT_DETAIL_MATRIX'] . '</em> ; veuillez ressélectionner les options du rapport.';
$defines['TEXT_PRINT_FORMAT_TITLE'] = 'CONSEIL : cliquez sur \'' . $defines['PAGE_HEADING'] . '\' pour revenir à la vue d\'affichage';

return $defines;
