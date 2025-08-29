<?php
/**
 * Exports Order / Shipping Information From Zen Cart in various chosen formats
 *
 * @package Export Shipping and Order Information
 * @copyright Copyright 2009, Eric Leuenberger http://www.zencartoptimization.com
 * @copyright Portions Copyright 2003-2006 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shipping_export.php, v 1.3.2 08.05.2010 11:41 Eric Leuenberger econcepts@zencartoptimization.com$
 * Thanks to dhcernese and Scott Wilson (That Software Guy) for contributing various portions that contained several bug-fixes.
 */
//  $Id: lang.shipping_export.php  2025-08-29 Piloujp $

$define = [
    'HEADING_SHIPPING_EXPORT_TITLE' => 'Exportation des informations sur les expéditions et les commandes',
    'HEADING_ADDITIONAL_FIELDS_TITLE' => 'Champs et options supplémentaires',
    'HEADING_CUSTOM_DATE_TITLE' => 'Plage de dates personnalisée',
    'HEADING_PREVIOUS_EXPORTS_TITLE' => 'Exportations précédemment incluses',

    'TEXT_CUSTOM_DATE' => 'Il s\'agit d\'un composant facultatif offrant plus de flexibilité. Laissez les deux champs vides pour exporter toutes les commandes depuis la dernière exportation (valeur par défaut). Si vous souhaitez inclure les commandes des plages de dates qui ont déjà été téléchargées, vous devez remplir les deux cases ci-dessous.',
    'TEXT_PREVIOUS_EXPORTS2' => 'Inclure les commandes précédemment exportées' ,
    'TEXT_PREVIOUS_EXPORTS' => 'Par défaut, le fichier d\'exportation inclut uniquement les commandes qui n\'ont pas encore été exportées. Si vous souhaitez inclure des commandes de plages de dates qui ont déjà été téléchargées, vous devez cocher la case ci-dessous. Combinez cette fonctionnalité avec la fonctionnalité de plage de dates pour encore plus de flexibilité.',
    'TEXT_VIDEO_TUTORIAL' => 'Pour visionner le didacticiel vidéo sur l\'utilisation de ce module, visitez <a href="http://www.zencartoptimization.com/2007/06/14/video-tutorial-export-shipping-and-order-information-from-zen-cart/" target="_blank"><strong><u>http://www.zencartoptimization.com</u></strong></a>.<br><br>',
    'TEXT_RUNIN_TEST' => 'Sélectionnez si vous souhaitez exécuter en mode test ou non. Le mode test vous permet d\'exporter sans marquer les commandes comme « exportées ». Cela vous permet de les réexporter à nouveau.<br>',
    'TEXT_ADDITIONAL_FIELDS' => '<strong>Sélectionnez les champs supplémentaires</strong> à ajouter à l\'exportation ci-dessous. Les champs supplémentaires seront exportés dans l\'ordre indiqué.<br>',
    'TEXT_FILE_LAYOUT' => '<strong>Sélectionnez la disposition du fichier à exporter</strong><br>',
    'TEXT_SHIPPING_EXPORT_INSTRUCTIONS' =>'Vous pouvez utiliser cette page pour exporter les informations d\'expédition de vos commandes Zen Cart au format CSV pour les utiliser dans des programmes externes.<br><br>
        Les données sont exportées dans le même ordre que celui dans lequel elles apparaissent à l\'écran et incluent les informations de la ligne d\'en-tête. Chaque fichier est nommé de manière dynamique avec la date de traitement pour faciliter la conservation des données de votre côté.
        <br><br>
        <strong>Caractéristiques</strong>
        <ul>
        <li>Possibilité d\'exporter des champs supplémentaires. Pour cela, cochez la case du ou des champs que vous souhaitez ajouter au fichier d\'exportation.</li>
        <li>Possibilité d\'exporter dans deux formats de fichiers différents
        <ul>
        <li>1 commande par ligne (par défaut)</li>
        <li>1 produit par ligne</li>
        </ul>
        </li>
        <li>Exécuter en mode « Test ». Vous permet d\'exécuter une exportation de test sans marquer les commandes comme « exportées » dans le système.</li>
        </ul>
        <br>
        <span style="color: #ff0000"><strong>*</strong></span><strong>Remarques sur l\'exportation des « Détails complets du produit »</strong><br>
        Lorsque vous choisissez d\'exporter les « Détails complets du produit », les champs suivants seront exportés au format répertorié ici :<br>
        <em>Quantité de produit, modèle de produit, nom de produit, prix du produit, tous les attributs du produit, coût de la ligne, taxe de ligne</em>.<br><br>
        <strong>Exemple d\'exportation « Détails complets du produit » :</strong> quelques exemples de fichiers d\'exportation ont été inclus avec cette installation à titre de référence. Ils sont nommés en fonction du type d\'exportation qui a été utilisé.
        <br><br>
        <u>AVIS</u><br>
        Le système recherche et trouve toutes les informations d\'expédition relatives aux commandes qui n\'ont pas encore été exportées. Si aucun enregistrement n\'est trouvé, le bouton « Exporter » ne s\'affiche pas (c\'est-à-dire qu\'il s\'affiche uniquement s\'il existe des informations à exporter).
        <br><br>
    ',

    'TEXT_RUNIN_TEST_FIELD' => 'Exécuter en mode test',
    'TEXT_SPLIT_NAME_FIELD' => 'Exporter le prénom et le nom dans des champs séparés.',
    'TEXT_PREVIOUS_EXPORTS_FIELD' => 'Inclure les commandes déjà téléchargées dans l\'exportation.',
    'TEXT_HEADER_ROW_FIELD' => 'Inclure la ligne d\'en-tête dans l\'exportation',
    'TEXT_EMAIL_EXPORT_FORMAT' => 'Type de format de fichier d\'exportation : ',
    'TEXT_FILE_LAYOUT_OPR_FIELD' => '1 commande par ligne',
    'TEXT_FILE_LAYOUT_PPR_FIELD' => '1 produit par ligne',
    'TEXT_SHIPPING_METHOD_FIELD' => 'Méthode d\'expédition',
    'TEXT_SHIPPING_TOTAL_FIELD' => 'Frais d\'expédition totaux',
    'TEXT_PHONE_NUMBER_FIELD' => 'Numéro de téléphone',
    'TEXT_ORDER_TOTAL_FIELD' => 'Total de la commande',
    'TEXT_ORDER_DATE_FIELD' => 'Date de commande',
    'TEXT_ORDER_COMMENTS_FIELD' => 'Premier commentaire/mémo de commande',
    'TEXT_PRODUCT_DETAILS_FIELD' => 'Détails complets du produit',
    'TEXT_TAX_AMOUNT_FIELD' => 'Montant de la taxe sur la commande',
    'TEXT_SUBTOTAL_FIELD' => 'Sous-total de la commande',
    'TEXT_DISCOUNT_FIELD' => 'Remise sur la commande',
    'TEXT_PAYMENT_METHOD_FIELD' => 'Mode de paiement',
    'TEXT_ORDER_STATUS_FIELD' => 'Statut de la commande',
    'TEXT_ISO_COUNTRY2_FIELD' => 'Code pays ISO (2 caractères)',
    'TEXT_ISO_COUNTRY3_FIELD' => 'Code pays ISO (3 caractères)',
    'TEXT_STATE_ABBR_FIELD' => 'Code abrégé du département',

    'TEXT_SPIFFY_START_DATE_FIELD' => 'Date de début :',
    'TEXT_SPIFFY_END_DATE_FIELD' => 'Date de fin :<br>(incluse)',
    // Email Definitions
    'EMAIL_EXPORT_SUBJECT' => 'Commandes ' . STORE_NAME . ' à traiter.',
    'EMAIL_EXPORT_BODY' => 'Veuillez trouver ci-joint la liste des commandes les plus récentes de ' . STORE_NAME . '. Si vous avez des questions, n\'hésitez pas à nous contacter.',
    'EMAIL_EXPORT_ADDRESS' => 'un-email@un-domain.com' ,  // to send to multiple addresses separate each email with a comma. Example:  firstemail@somedomain.com,secondemail@somedomain.com
    //Automatic email options
    'HEADING_AUTOMATIC_EMAIL_OPTION_TITLE' => '<strong>Options de courrier électronique automatique</strong>',
    'TEXT_AUTOMATIC_EMAIL_OPTION_FIELD' => 'Enregistrez le fichier sur le serveur et envoyez-le automatiquement par courrier électronique au fournisseur.<br> (si vous ne l\'enregistrez pas sur le serveur, vous serez invité à télécharger le fichier sur votre ordinateur.)',
    'TEXT_EMAIL_EXPORT_ADDRESS_FIELD' => 'Adresse e-mail du fournisseur :&nbsp;',
    'TEXT_EMAIL_EXPORT_SUBJECT_FIELD' => 'Objet du courrier électronique :&nbsp;',
    //Order status update and options
    'HEADING_UPDATE_ORDER_STATUS_TITLE' => '<strong>Mettre à jour le statut de la commande lors de l\'exportation</strong><br>(Si cette option est définie, le statut de la commande sera mis à jour selon ce que vous sélectionnez ici après une exportation réussie.)',
    'TEXT_UPDATE_ORDER_STATUS_FIELD' => 'Définir le statut de la commande après l\'exportation sur&nbsp;',
    'HEADING_ORDER_STATUS_OPTIONS_TITLE' => '<strong>Options d\'exportation du statut de la commande</strong> ',
    'TEXT_ORDER_STATUS_OPTIONS_ANY_FIELD' => 'Tout statut de commande',
    'TEXT_ORDER_STATUS_OPTIONS_ASSIGNED_FIELD' => 'Statut de la commande attribuée (sélectionnez ci-dessous)',
    //Orders infos listing hearder titles
    'HEADING_ORDER_INFOS_ORDER_ID' => 'ID de<br>commande',
    'HEADING_ORDER_INFOS_EMAIL' => 'E-mail',
    'HEADING_ORDER_INFOS_CUSTOMER_NAME' => 'Nom<br>client',
    'HEADING_ORDER_INFOS_COMPANY' => 'Entreprise',
    'HEADING_ORDER_INFOS_DELIVERY_STREET' => 'Rue<br>livraison',
    'HEADING_ORDER_INFOS_DELIVERY_SUBURB' => 'Banlieue<br>livraison',
    'HEADING_ORDER_INFOS_DELIVERY_CITY' => 'Ville<br>livraison',
    'HEADING_ORDER_INFOS_POST_CODE' => 'Code<br>Postal',
    'HEADING_ORDER_INFOS_STATE' => 'Départ.',
    'HEADING_ORDER_INFOS_COUNTRY' => 'Pays',
    'ERROR_ORDER_INFOS_NO_DATA' => '<b>Aucune nouvelle commande n\'a été trouvée !</b>',
    // Submit button
    'SUBMIT_BUTTON_ORDER_INFOS_EXPORT' => 'Exporter vers une feuille de calcul Excel',
    // Check / Uncheck all
    'CHECK_BUTTON_ORDER_INFOS_EXPORT' => 'Cocher/Décocher tout',
];

return $define;

