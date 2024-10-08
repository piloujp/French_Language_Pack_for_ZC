<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Contrôleur d\'attributs : ',
    'HEADING_TITLE_ATRIB' => 'Contrôleur des Attributs',
    'HEADING_TITLE_ATRIB_SELECT' => 'Veuillez sélectionner une catégorie pour afficher les attributs de produit de...',
    'TEXT_PRICES_AND_WEIGHTS' => 'Prix et Poids',
    'TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR' => 'Facteur Prix: ',
    'TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET' => 'Dédommagement: ',
    'TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME' => 'Une Fois:',
    'TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME' => 'Facteur Une Fois: ',
    'TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME' => 'Dédommagement: ',
    'TABLE_HEADING_ATTRIBUTES_QTY_PRICES' => 'Remise par quantité d\'attributs:',
    'TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME' => 'Remise unique par quantité d\'attributs:',
    'TABLE_HEADING_ATTRIBUTES_PRICE_WORDS' => 'Prix par mot:',
    'TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE' => '- Mots gratuits:',
    'TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS' => 'Prix par lettre:',
    'TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE' => '- Lettres gratuites:',
    'TABLE_HEADING_DOWNLOAD' => 'Produits downloadables:',
    'TABLE_TEXT_FILENAME' => 'Fichier:',
    'TABLE_TEXT_MAX_DAYS' => 'Jours avant expiration: (0 = illimité)',
    'TABLE_TEXT_MAX_COUNT' => 'Nombre maximum de downloads:',
    'TABLE_HEADING_PRICE_TOTAL' => 'Total|Remise: une fois:',
    'TEXT_WARNING_OF_DELETE' => 'Cette option est liée à des produits et des valeurs - La supprimer présente des risques.',
    'TEXT_OK_TO_DELETE' => 'Cette option n\'est liée à aucun produit ou valeur - Vous pouvez la supprimer sans risque.',
    'TEXT_DOWNLOADS_DISABLED' => 'NOTE : les téléchargements sont désactivés',
    'TABLE_TEXT_MAX_DAYS_SHORT' => 'Jours :',
    'TABLE_TEXT_MAX_COUNT_SHORT' => 'Max :',
    'TEXT_SORT' => ' Trier par : ',
    'TEXT_OPTION_VALUE_COMMENTS' => 'Commentaires : ',
    'TEXT_OPTION_VALUE_SIZE' => 'Afficher la taille : ',
    'TEXT_OPTION_VALUE_MAX' => 'Longueur maximum : ',
    'TEXT_ATTRIBUTES_IMAGE' => 'Attributs Image Swatch :',
    'TEXT_ATTRIBUTES_IMAGE_DIR' => 'Répertoire pour l\'image de l\'attribut :',
    'TEXT_ATTRIBUTES_FLAGS' => 'Drapeaux<br />de l\'attribut :',
    'TEXT_ATTRIBUTES_DISPLAY_ONLY' => 'Utilisé en<br />affichage seulement :',
    'TEXT_ATTRIBUTES_IS_FREE' => 'L\'attribut est gratuit<br />lorsque le produit est gratuit :',
    'TEXT_ATTRIBUTES_DEFAULT' => 'Attribut par défaut<br />marqué comme sélectionné :',
    'TEXT_ATTRIBUTE_IS_DISCOUNTED' => 'Appliquer les mêmes remises<br />utilisées sur le produit :',
    'TEXT_ATTRIBUTES_REQUIRED' => 'Attribut requis<br />pour le texte<br />ou le fichier :',
    'LEGEND_BOX' => 'Légende :',
    'LEGEND_KEYS' => 'OFF/ON',
    'LEGEND_ATTRIBUTES_DISPLAY_ONLY' => 'Affichage uniquement',
    'LEGEND_ATTRIBUTES_IS_FREE' => 'Gratuit',
    'LEGEND_ATTRIBUTES_DEFAULT' => 'Par défaut',
    'LEGEND_ATTRIBUTE_IS_DISCOUNTED' => 'Avec remise',
    'LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED' => 'Prix de base',
    'LEGEND_ATTRIBUTES_REQUIRED' => 'Requis',
    'LEGEND_ATTRIBUTES_IMAGES' => 'Images',
    'LEGEND_ATTRIBUTES_DOWNLOAD' => 'Nom du fichier<br>valide/invalide',
    'TEXT_NO_PRODUCTS_SELECTED' => 'Aucun produit sélectionné',
    'TEXT_NO_ATTRIBUTES_DEFINED' => 'Aucun attribut défini pour le produit avec ID#',
    'TEXT_INFO_HEADING_ATTRIBUTE_FEATURES' => 'Modifications d\'attribut pour le produit ID# ',
    'TEXT_INFO_ATTRIBUTES_FEATURES_DELETE' => 'Supprimer <strong>TOUS</strong> les attributs de produit pour :<br>',
    'TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO' => 'Copier les attributs vers un autre produit ou vers une catégorie entière depuis :<br>',
    'TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT' => 'Copier les attributs vers un autre <strong>produit</strong> depuis ID#',
    'TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO' => 'Sélectionnez le produit pour en copier tous les attributs vers :',
    'TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO' => 'Sélectionnez la catégorie pour en copier tous les attributs vers :',
    'TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY' => 'Copier les attributs vers tous les produits de la <strong>catégorie</strong> depuis le produit ID#',
    'SUCCESS_PRODUCT_UPDATE_SORT_NONE' => 'Aucun attribut à actualiser l\'ordre de tri pour ID# ',
    'SUCCESS_ATTRIBUTES_DELETED' => 'Attributs supprimés avec succès',
    'SUCCESS_ATTRIBUTES_UPDATE' => 'Attributs mis à jour avec succès',
    'WARNING_PRODUCT_COPY_TO_CATEGORY_NONE' => 'Aucune catégorie sélectionnée pour la copie',
    'TEXT_DELETE_ALL_ATTRIBUTES' => 'Êtes-vous certain(e) de vouloir supprimer tous les attributs pour ID# ',
    'TEXT_PRODUCT_OPTIONS' => '<strong>Veuillez choisir :</strong>',
    'TEXT_PRODUCTS_PRICE' => 'Prix du produit : ',
    'TEXT_SAVE_CHANGES' => 'METTRE À JOUR ET ENREGISTRER LES MODIFICATIONS :',
    'TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES' => 'Confirmez la suppression de TOUTES les valeurs d\'option de produit pour le nom d\'option ...',
    'TEXT_INFO_PRODUCT_NAME' => '<strong>Nom de produit : </strong>',
    'TEXT_INFO_PRODUCTS_OPTION_NAME' => '<strong>Nom d\'option : </strong>',
    'TEXT_INFO_PRODUCTS_OPTION_ID' => '<strong>ID#</strong>',
    'SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES' => 'Suppression réussie de toutes les valeurs d\'option pour le nom d\'option : ',
    'BUTTON_ADDITIONAL_ACTIONS' => 'Actions supplémentaires',
    'TEXT_EDIT_OPTION_VALUE' => 'Modifier la valeur de l\'option',
    'TEXT_DELETE_OPTION_VALUE' => 'Supprimer la valeur d\'option',
    'TEXT_UPDATE_DEFAULT_SORT_ORDER' => 'Mettre à jour l\'ordre de tri par défaut',
    'TEXT_DELETE_ALL_OPTIONS_FROM_PRODUCT' => 'Supprimer toutes les options du produit',
    'TEXT_COPY_ALL_OPTIONS_TO_PRODUCT' => 'Copier les options vers un autre produit',
    'TEXT_COPY_ALL_OPTIONS_TO_CATEGORY' => 'Copier les options vers une catégorie entière',
    'TEXT_DISPLAY_NUMBER_OF_ATTRIBUTES' => 'Affichage de <b>%1$d</b> à  <b>%2$d</b> (sur <b>%3$d</b> attributs)',
];

return $define;
