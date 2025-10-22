<?php
// -----
// Part of the "Product Options Stock Manager" plugin by Cindy Merkin (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2014-2024 Vinos de Frutas Tropicales
//
// Last updated: POSM v5.0.0
//

// -----
// Since languages are loaded via a class method, need to globalize $db.
//
global $db;
$lowstock_option = $db->Execute(
    "SELECT configuration_group_id, configuration_id
       FROM " . TABLE_CONFIGURATION . " 
      WHERE configuration_key = 'POSM_STOCK_REORDER_LEVEL'
      LIMIT 1"
);
$lowstock_value_link = zen_href_link(FILENAME_CONFIGURATION, 'gID=' . $lowstock_option->fields['configuration_group_id'] . '&cID=' . $lowstock_option->fields['configuration_id'] . '&action=edit');

$text_pos_identifier = '(*)';
$text_oos_label = 'Étiquette « En rupture de stock »';
$define = [
    'HEADING_TITLE' => 'Gestionnaire de stock d’options de produits',
    'TEXT_POS_IDENTIFIER' => $text_pos_identifier,
    'TEXT_PRODUCT_DISABLED_IDENTIFIER' => ' [désactivé]',
    'TEXT_LAST_UPDATED' => 'Dernière mise à jour : ',
    'TEXT_POS_INSTRUCTIONS' => "Tout d'abord, choisissez la catégorie pour laquelle les produits seront affichés (par défaut : <em>Tous les produits</em>); si le nom d'une catégorie est suivi d'un astérisque (*), alors cette catégorie comprend un ou plusieurs produits (pas nécessairement avec des options).  Vous pouvez filtrer l'affichage pour inclure les produits désactivés et déterminer si le numéro de modèle de chaque produit est inclus ou non dans le menu déroulant des produits.  L'ordre de tri des produits est contrôlé par le menu déroulant suivant.  Ces quatre (4) choix sont « mémorisés » dans votre session de connexion administrateur.<br><br>Choisissez ensuite le produit dont le stock d'options doit être géré dans la liste déroulante ci-dessous.  Si le nom d'un produit est suivi de <b>" . $text_pos_identifier . "</b>, ce produit comporte actuellement des options en cours de gestion. Lorsqu'un produit comprend des combinaisons d'options avec une quantité inférieure ou égale à " . POSM_STOCK_REORDER_LEVEL . " Lorsqu'un produit comprend des combinaisons d'options avec une quantité inférieure ou égale à 5 ou une date de rupture de stock proche de l'expiration, le nom du produit est <span class=\"out-of-stock\">mis en surbrillance< /span> dans la liste déroulante.<br><br><strong>Remarque :</strong> Les options de produits sont affichées (de gauche à droite) selon l'ordre de tri des options. (tel que défini par <a href=\"" . zen_href_link(FILENAME_OPTIONS_NAME_MANAGER) . "\">Catalogue :: Gestion des noms des options</a>); lorsque vous triez par <em>Ordre de tri des attributs</em>, les valeurs des combinaisons d'options de produit sont affichées (de haut en bas) en utilisant l'ordre de tri des valeurs. (tel que défini par <a href=\"" . zen_href_link(FILENAME_ATTRIBUTES_CONTROLLER) . "\">Catalogue :: Contrôleur d'attributs</a>). Si plusieurs noms d'options ou valeurs d'options utilisent le même ordre de tri, les options sont ensuite triées par ordre croissant de noms.<br><br>Vous pouvez trier vos produits soit par leur nom, soit par leur numéro de modèle, selon que vous avez coché ou non la case « Inclure le modèle des produits ? ».<br><br>",

    'TEXT_POS_INSERT' => 'Utilisez les boutons « Ajouter » ou « Définir » pour insérer ou mettre à jour une ou plusieurs combinaisons d’options pour le produit sélectionné. Le bouton « Ajouter » <em>ajoute</em> la quantité spécifiée à toutes les combinaisons d’options préexistantes, tandis que le bouton « Définir » <em>remplace</em> la quantité de toute combinaison préexistante. Vous recevrez une confirmation contextuelle pour confirmer que vous souhaitez ajouter toutes les combinaisons que vous avez choisies.<br><br>',

    'TEXT_POS_INSTRUCTIONS2' => "Lorsqu'un produit possède une ou plusieurs combinaisons d'options, elles s'affichent sous forme de liste :<ol><li>Si le niveau de stock d'une combinaison d'options est égal ou inférieur au niveau de stock bas configuré (actuellement <a href=\"$lowstock_value_link\">" . POSM_STOCK_REORDER_LEVEL . "</a>), l'entrée Qté de la combinaison a une <span class= \"out-of-stock\">bordure rouge</span>.</li><li>Si la date de retour en stock d'une combinaison d'options correspond ou a dépassé la « période de rappel » (actuellement " . POSM_BIS_DATE_REMINDER . " jours ou plus), la ligne entière de l'entrée affiche un <span class=\"bg-warning\">arrière-plan d'avertissement</span>.</li><li>Si une combinaison d'options ou une valeur affichée <span class=\"removed\">barrée</span>, alors cette combinaison d'options ou cette valeur a été supprimée du produit. Vous ne pouvez pas mettre à jour la quantité d’une combinaison d’options ou d’une valeur inconnue, mais vous pouvez la supprimer.</li><li>Lorsque vous cliquez sur l'un des boutons « Mettre à jour », tous les modèles et quantités de combinaisons d’options seront mis à jour.</li><li>Lorsque vous cliquez sur l'un des boutons « Supprimer », toute combinaison d'options qui a sa case « Supprimer ? » cochée sera supprimée. Si une ou plusieures case « Supprimer ? » sont cochées, vous recevrez un message contextuel pour confirmer la ou les suppressions.</li><li>Si vous avez configuré la gestion des modèles en double de <em>POSM</em> pour signaler les doublons, toute entrée de <b>Modèle d'option/UGS</b> comportant une <span class=\"dup-model\" >bordure rouge</span> est dupliquée, soit dans la définition d'un produit, soit dans une autre combinaison d'options <em>POSM</em>. Voir <a href=\"" . zen_href_link(FILENAME_POSM_FIND_DUPLICATE_MODELNUMS) . "\"><em>Outils :: POSM : rechercher des modèles en double</em></a> pour plus d'informations.</li></ol>",

    'TEXT_POS_OPTIONS_ADDED' => 'Une ou plusieurs options ont été ajoutées à ce produit depuis la création de ses enregistrements d’options. Veuillez choisir la valeur de chaque nouvelle option à ajouter à chaque enregistrement d’option existant, puis cliquez sur le bouton « Insérer ». Les quantités de ces enregistrements existants resteront les mêmes.<br><br>',

    'TEXT_POS_STOCK_QUANTITY' => 'Qté.',
    'TEXT_CURRENT_TOTAL' => 'Total : %u',
    'TEXT_POS_REMOVE' => 'Supprimer ?',
    'TABLE_HEADING_CHECK_UNCHECK' => 'Tout/Aucun ?',
    'TEXT_ADD_TO_QUANTITY' => 'Ajouter',
    'TEXT_REPLACE_QUANTITY' => 'Définir',
    'TEXT_ALL' => '* (Tout)',
    'TEXT_OPTION_MODEL' => 'Modèle d’option/UGS',
    'TEXT_OOS_LABEL' => $text_oos_label,
    'TEXT_OOS_DATE' => 'Date de retour en stock<br><span class="smaller">Utilisez le format YYYY-MM-DD</span>',
    'TEXT_NONE_DEFINED' => '-- Aucun de défini --',
    'TEXT_PLEASE_SELECT' => 'Veuillez sélectionner ...',
    'TEXT_ALL_CATEGORIES' => 'Toutes les catégories',
    'TEXT_CHOOSE_CATEGORY' => 'Afficher les produits de la catégorie : ',
    'TEXT_CHOOSE_PRODUCT' => 'Choisissez le produit à gérer : ',
    'TEXT_NO_PRODUCTS_IN_CATEGORY' => 'Aucun produit avec des options gérables n’est présent dans la catégorie sélectionnée.',

    'TEXT_MODEL_DEFAULT' => 'Définir par defaut?',
    'TEXT_MODEL_DEFAULT_TITLE' => 'Utiliser ce numéro de modèle pour des valeurs actuellement vides ?',

    'BUTTON_DEFINE_LABELS' => 'Définir des étiquettes',
    'BUTTON_DEFINE_LABELS_ALT' => 'Cliquez ici pour définir les étiquettes utilisées pour les produits en rupture de stock',
    'BUTTON_VIEW_ALL' => 'Tout afficher',
    'BUTTON_VIEW_ALL_ALT' => 'Cliquez ici pour afficher tous les produits gérés sur une seule page',
    'BUTTON_GO' => 'Soumettre',

    'TEXT_INCLUDE_DISABLED' => 'Inclure les produits désactivés ? ',
    'TEXT_INCLUDE_MODEL' => 'Inclure le modèle des produits ? ',

    'BUTTON_UPDATE' => 'Mise à jour',
    'TEXT_UPDATE_ALT' => 'Cliquez ici pour mettre à jour toutes les quantités et numéros de modèle.',
    'BUTTON_REMOVE' => 'Supprimer',
    'TEXT_REMOVE_ALT' => 'Cliquez ici pour supprimer la ou les combinaisons d’options sélectionnées.',

    'TEXT_SINGLE_LABEL_NAME' => '<b>Note :</b> Seulement une « ' . $text_oos_label . ' » (<em><b>%1$s</b></em>) définie. Cette étiquette sera utilisée pour tous les produits gérés par <em>POSM</em> qui sont en rupture de stock.',

    'ERROR_INVALID_DATE' => 'Une <strong>Date de rupture de stock</strong> doit être saisie au format YYYY-MM-DD et être une date valide.',
    'ERROR_INVALID_FORM_VALUES' => 'Des valeurs non valides ont été trouvées dans la soumission du formulaire (code %s).',
    'SUCCESS_QUANTITY_UPDATED' => "Les quantités en stock et les numéros de modèle d'une ou plusieurs options ont été mis à jour.",
    'SUCCESS_NEW_OPTION_CREATED' => "Un ou plusieurs nouveaux enregistrements de stock d'options ont été créés ou mis à jour.",
    'WARNING_DUPLICATE_COMBINATION' => 'Un enregistrement avec la combinaison d’options que vous avez sélectionnée existe déjà.',
    'SUCCESS_OPTION_RECORDS_REMOVED' => '%u enregistrements d’options ont été supprimés avec succès.',
    'SUCCESS_OPTIONS_ADDED' => 'De nouvelles options ont été ajoutées aux enregistrements d’options existants.',
    'ERROR_MISSING_INPUTS' => 'La demande de mise à jour n’a pas pu être traitée. Vous devrez augmenter les valeurs de configuration PHP de votre site pour <code>post_max_size</code> (actuellement %1$s) et/ou <code>max_input_vars</code> (actuellement %2$s).',

    'JS_MESSAGE_DELETE_ALL_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ces enregistrements d’option \'+n+\' ?',
    'JS_MESSAGE_INSERT_NEW_CONFIRM' => 'Cette action insérera des combinaisons d’options \'+items+\'. Voulez-vous continuer ?',
    'JS_MESSAGE_INSERT_MULTIPLE_CONFIRM' => 'Cette action insérera potentiellement \'+items+\' combinaisons d’options. Toutes les combinaisons actuelles auront leurs quantités \'+add_replace+\'. Voulez-vous continuer ?',
    'JS_MESSAGE_UPDATED' => 'augmentées de \'+quantity+\'',
    'JS_MESSAGE_REPLACED' => 'remplacé(es)',
    'JS_MESSAGE_DELETE_SELECTED_CONFIRM' => 'Etes-vous sûr de vouloir supprimer la(les) \'+selected+\' combinaison(s) d’option(s) sélectionnée(s) ?',
    'WARNING_NO_FILES_SELECTED' => 'Aucune combinaison d’options n’a été sélectionnée pour la suppression !',
    'JS_MESSAGE_CONFIRM_MODEL_DEFAULT' => 'Appliquez le numéro de modèle de base du produit (%s) aux options \'+emptyModels+\'.  Continuer ?', //- %s is the product's base model
];
return $define;
