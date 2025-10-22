<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE_ATRIB' => 'Attributs des produits',
    'TABLE_HEADING_DOWNLOAD' => 'Produits downloadables :',
    'TABLE_TEXT_FILENAME' => 'Fichier :',
    'TABLE_TEXT_MAX_DAYS' => 'Jours avant expiration :',
    'TABLE_TEXT_MAX_COUNT' => 'Nombre maximum de downloads :',
    'TEXT_WARNING_OF_DELETE' => '<span class="alert">Cette option est liée à des produits et des valeurs - La supprimer présente des risques.<br>NOTE : aucun fichier downloadable associé à cette valeur d’option ne sera supprimé du serveur.</span>',
    'TEXT_OK_TO_DELETE' => 'Cette option n’est liée à aucun produit ou valeur - Vous pouvez la supprimer sans risque.',
    'ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE_SPECIFIC' =>  'Ajout probable de valeurs d’options dupliquées : "<b>%1$s</b>" %2$s pour le nom de l’option "%3$s" (identifiants de valeurs : %4$s)',
    'TEXT_DOWNLOADS_DISABLED' => 'NOTE : les téléchargements sont désactivés',
    'TABLE_TEXT_MAX_DAYS_SHORT' => 'Jours : ',
    'TABLE_TEXT_MAX_COUNT_SHORT' => 'Max : ',
    'TEXT_SORT' => ' Classement : ',
    'TEXT_OPTION_VALUE_COMMENTS' => 'Commentaires : ',
    'TEXT_OPTION_VALUE_SIZE' => 'Afficher la taille : ',
    'TEXT_OPTION_VALUE_MAX' => 'Longueur maximum : ',
    'TEXT_ATTRIBUTES_IMAGE' => 'Image à transférer de l’attribut : ',
    'TEXT_ATTRIBUTES_IMAGE_DIR' => 'Répertoire pour l’image de l’attribut : ',
    'TEXT_ATTRIBUTES_FLAGS' => 'Drapeaux<br>de l’attribut : ',
    'TEXT_ATTRIBUTES_DISPLAY_ONLY' => 'Utilisé en<br>affichage seulement : ',
    'TEXT_ATTRIBUTES_IS_FREE' => 'L’attribut est gratuit<br>lorsque le produit est gratuit : ',
    'TEXT_ATTRIBUTES_DEFAULT' => 'Attribut par défaut<br>marqué comme sélectionné : ',
    'TEXT_ATTRIBUTE_IS_DISCOUNTED' => 'Appliquer les mêmes remises<br>utilisées sur le produit : ',
    'TEXT_PRODUCT_OPTIONS_INFO' => '<strong>NOTE : Éditez le nom d’option de produit pour les paramètres supplémentaires</strong>',
    'TEXT_OPTION_VALUE_COPY_ALL' => '<strong>Copier vers TOUS les produits ayant le nom et la valeur d’option ...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_ALL' => 'Sélectionnez un nom et une valeur d’option que vous souhaitez copier vers des produits ayant une valeur et un nom d’option existants distincts',
    'TEXT_SELECT_OPTION_FROM' => 'Nom d’option existant :',
    'TEXT_SELECT_OPTION_VALUES_FROM' => 'Valeur d’option existante :',
    'TEXT_SELECT_OPTION_TO' => 'Nom d’option à ajouter :',
    'TEXT_SELECT_OPTION_VALUES_TO' => 'Valeur d’option à ajouter :',
    'TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID' => 'Laissez vide pour TOUS les produits ou<br>entrez un ID de catégorie pour les produits à actualiser',
    'TEXT_OPTION_VALUE_COPY_OPTIONS_TO' => '<strong>Copier un nom et une valeur d’option vers TOUS les produits ayant le nom d’option ...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO' => 'Sélectionnez un nom et une valeur d’option que vous souhaitez ajouter à tous les produits ou à tous les produits d’une catégorie déterminée ayant un nom d’option existant distinct.
                                                   <br><strong>Exemple :</strong> Ajouter le nom d’option : couleur, la valeur d’option : rouge à tous les produits possédant le nom d’option : taille
                                                   <br><strong>Exemple :</strong> Ajouter le nom d’option : couleur, la valeur d’option : vert avec les valeurs par défaut depuis le produit ID : 34 vers tous les produits possédant le nom d’option : taille
                                                   <br><strong>Exemple :</strong> Ajouter le nom d’option : couleur, la valeur d’option : vert avec les valeurs par défaut depuis le produit ID : 34 vers tous les produits possédant le nom d’option : taille pour la catégorie ID : 65
        ',
    'TEXT_SELECT_OPTION_TO_ADD_TO' => 'Ajouter à ce nom d’option :',
    'TEXT_SELECT_OPTION_FROM_ADD' => 'Nom d’option à ajouter :',
    'TEXT_SELECT_OPTION_VALUES_FROM_ADD' => 'Valeur d’option à ajouter :',
    'TEXT_SELECT_OPTION_FROM_PRODUCTS_ID' => 'Prendre les nouvelles valeurs par défaut de l’attribut depuis le produit ID# ou laisser vide pour ne prendre aucune valeur par défaut :',
    'TEXT_INFO_FROM' => ' de : ',
    'TEXT_INFO_TO' => ' vers : ',
    'ERROR_OPTION_VALUES_COPIED' => 'ERREUR : duplication de nom et de valeur d’option',
    'ERROR_OPTION_VALUES_COPIED_MISMATCH' => 'ERREUR : mauvaise corespondance du nom et de la valeur d’option choisis',
    'ERROR_OPTION_VALUES_NONE' => 'ERREUR : rien trouvé pour la copie',
    'SUCCESS_OPTION_VALUES_COPIED' => 'Copie réussie ! ',
    'ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID' => 'ERREUR : nom/Valeur d’option manquant(e) pour le produit ID#',
    'TEXT_OPTION_VALUE_DELETE_ALL' => '<strong>Effacer sur TOUS les produits, l’attribut ayant le nom et la valeur d’option ...</strong>',
    'TEXT_INFO_OPTION_VALUE_DELETE_ALL' => 'Sélectionnez un nom et une valeur d’option existants que vous souhaitez supprimer de TOUS les produits, ou de TOUS les produits d’une catégorie',
    'TEXT_SELECT_DELETE_OPTION_FROM' => 'Nom d’option :',
    'TEXT_SELECT_DELETE_OPTION_VALUES_FROM' => 'Valeur d’option :',
    'ERROR_OPTION_VALUES_DELETE_MISMATCH' => 'ERREUR : le nom et la valeur de cette option ne correspondent pas',
    'SUCCESS_OPTION_VALUES_DELETE' => 'Suppression réussie de : ',
    'LABEL_FILTER' => 'Sélectionnez la valeur de l’option pour filtrer',
    'TEXT_DISPLAY_NUMBER_OF_OPTION_VALUES' => 'Affichage de <b>%1$d</b> à <b>%2$d</b> (sur <b>%3$d</b> valeurs d’option)',
    'TEXT_SHOW_ALL' => 'Afficher tout',
];

return $define;
