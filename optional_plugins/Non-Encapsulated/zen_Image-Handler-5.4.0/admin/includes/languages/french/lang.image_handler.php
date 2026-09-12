<?php
/**
 * mod Image Handler, v5.4.0
 * Previously /admin/includes/languages/english/extra_definitions/bmz_image_handler.php
 * english language definitions for image handler
 *
 * @author  Tim Kroeger (original author)
 * @copyright Copyright 2005-2006
 * @license http://www.gnu.org/licenses/gpl.txt GNU General Public License V2.0
 * @version $Id: bmz_image_handler.php,v 2.0 Rev 8 2010-05-31 23:46:5 DerManoMann Exp $
 * Last modified by webchills and cjones 2012-03-10 17:46:50
 * Last modified by lat9 2022-11-16, IH v5.3.1
 */
$define = [
    'IH_VERSION_VERSION' => 'Version',
    'IH_VERSION_NOT_FOUND' => 'Aucune information trouvée sur Image Handler.',
    'IH_REMOVE' => 'Désinstaller Image Handler. (Veuillez d’abord sauvegarder votre site et votre base de données)',
    'IH_VIEW_CONFIGURATION' => 'Afficher la configuration d’Image Handler',
    'IH_CLEAR_CACHE' => 'Effacer le cache des images',
    'IH_CACHE_CLEARED' => 'Cache d’images vidé.',

    'IH_SOURCE_TYPE' => 'Type d’image source',
    'IH_SOURCE_IMAGE' => 'Image source',
    'IH_SMALL_IMAGE' => 'Image par défaut',
    'IH_MEDIUM_IMAGE' => 'Image des produits',

    'IH_ADD_NEW_IMAGE' => 'Ajouter une nouvelle image',
    'IH_NEW_NAME_DISCARD_IMAGES' => 'Utiliser un nouveau nom, supprimer les images supplémentaires',
    'IH_NEW_NAME_COPY_IMAGES' => 'Utiliser un nouveau nom, copier des images supplémentaires',
    'IH_KEEP_NAME' => 'Conserver l’ancien nom et les images supplémentaires',
    'IH_DELETE_FROM_DB_ONLY' => 'Supprimer la référence d’image de la base de données uniquement',

    'IH_HEADING_TITLE' => 'Image Handler<sup>5</sup>',
    'IH_HEADING_TITLE_PRODUCT_SELECT' => 'Veuillez sélectionner un produit pour gérer les images.',

    'TABLE_HEADING_PHOTO_NAME' => 'Nom de l’image',
    'TABLE_HEADING_BASE_SIZE' => 'Image de base',
    'TABLE_HEADING_SMALL_SIZE' => 'Petite image',
    'TABLE_HEADING_MEDIUM_SIZE' => 'Image moyenne',
    'TABLE_HEADING_LARGE_SIZE' => 'Grande image',
    'TABLE_HEADING_ACTION' => 'Action',
    'TABLE_HEADING_FILETYPE' => 'Type de fichier',

    'TEXT_PRODUCT_INFO' => 'Produit',
    'TEXT_PRODUCTS_MODEL' => 'Modèle',
    'TEXT_PRICE' => 'Prix',
    'TEXT_IMAGE_BASE_DIR' => 'Répertoire d’images',
    'TEXT_NO_IMAGE_DEFINED' => 'L’image de ce produit n’est pas définie actuellement.',
    'TEXT_NO_PRODUCT_IMAGES' => 'Aucune correspondance n’a été trouvée pour l’image de ce produit (%s).',
    'TEXT_PRODUCT_IMAGE_NOT_SUPPORTED' => 'L’extension d’image (%s) du produit n’est pas prise en charge par Image Handler.',
    'TEXT_CLICK_TO_ENLARGE' => 'Cliquez pour agrandir',

    'TEXT_INFO_IMAGE_INFO' => 'Informations sur les images',
    'TEXT_INFO_NAME' => 'Nom',
    'TEXT_INFO_FILE_TYPE' => 'Type de fichier',
    'TEXT_INFO_EDIT_PHOTO' => 'Modifier l’image <em>principale</em>',
    'TEXT_INFO_EDIT_ADDL_PHOTO' => 'Modifier une image <em>supplémentaire</em>',
    'TEXT_INFO_NEW_PHOTO' => 'Nouvelle image <em>principale</em>',
    'TEXT_INFO_NEW_ADDL_PHOTO' => 'Nouvelle image <em>supplémentaire</em>',
    'TEXT_INFO_IMAGE_BASE_NAME' => 'Nom de base de l’image (facultatif)',
    'TEXT_INFO_AUTOMATIC_FROM_DEFAULT' => ' Automatique (à partir du nom de l’image d’origine)',
    'TEXT_INFO_MAIN_DIR' => 'Répertoire principal',
    'TEXT_INFO_BASE_DIR' => 'Répertoire d’image principale',
    'TEXT_INFO_NEW_DIR' => 'Sélectionnez ou définissez un nouveau répertoire pour les images.',
    'TEXT_INFO_IMAGE_DIR' => 'Répertoire de l’image',
    'TEXT_INFO_OR' => 'ou',
    'TEXT_INFO_AUTOMATIC' => 'Automatique',
    'TEXT_INFO_IMAGE_SUFFIX' => 'Suffixe d’image (facultatif)',
    'TEXT_INFO_USE_AUTO_SUFFIX' => 'Entrez un suffixe spécifique ou laissez vide pour la génération automatique du suffixe.',
    'TEXT_INFO_DEFAULT_IMAGE' => 'Fichier image de base',
    'TEXT_INFO_DEFAULT_IMAGE_HELP' => 'Une image de base est requise. Cette image est supposée être la plus petite lorsque <em>différentes</em> images de taille moyenne ou grande sont téléchargées.',
    'TEXT_INFO_IMAGE_NOT_SUPPORTED' => 'Le type d’image de ce produit n’est pas pris en charge par Image Handler. Aucune action supplémentaire ne peut être effectuée.',
    'TEXT_INFO_CLICK_TO_ADD_MAIN' => 'Cliquez sur le bouton « Ajouter une image » pour ajouter une nouvelle image <em>principale</em> pour ce produit.',
    'TEXT_INFO_CLICK_TO_ADD_ADDL' => 'Cliquez sur le bouton « Ajouter une image » pour ajouter une nouvelle image <em>supplémentaire</em> pour ce produit.',
    'TEXT_INFO_CONFIRM_DELETE' => 'Confirmez la suppression de l’image <em>%s</em>',
    'TEXT_MAIN' => 'principale',
    'TEXT_ADDITIONAL' => 'supplémentaire',
    'TEXT_INFO_CONFIRM_DELETE_SURE' => 'Etes-vous sûr de vouloir supprimer toutes les tailles de cette image ?',
    'TEXT_INFO_SELECT_ACTION' => 'Sélectionnez l’action',

    'TEXT_NOT_NEEDED' => 'Pas nécessaire',

    'TEXT_MSG_FILE_NOT_FOUND' => 'Ce fichier n’existe pas.',
    'TEXT_MSG_ERROR_RETRIEVING_IMAGESIZE' => 'Impossible de déterminer la taille de l’image',
    'TEXT_MSG_AUTO_BASE_ERROR' => 'Sélection de base automatique sans fichier par défaut.',
    'TEXT_MSG_INVALID_BASE_ERROR' => 'Nom de base de l’image non valide ou impossible de trouver l’image de base.',
    'TEXT_MSG_AUTO_REPLACE' => 'Remplacement automatique des mauvais caractères dans le nom de base, nouveau nom : ',
    'TEXT_MSG_INVALID_SUFFIX' => 'Suffixe d’image non valide.',
    'TEXT_MSG_IMAGE_TYPES_NOT_SAME_ERROR' => 'Les types d’images ne sont pas les mêmes; image <b>non</b> téléchargée.',
    'TEXT_MSG_DEFAULT_REQUIRED_FOR_RESIZE' => 'Une image par défaut est requise pour le redimensionnement automatique.',
    'TEXT_MSG_NO_DEFAULT' => 'Aucun <b>fichier image de base</b> n’a été téléchargé. Veuillez réessayer.',
    'TEXT_MSG_NO_DEFAULT_ON_NAME_CHANGE' => 'Vous devez fournir une image « de base » lors de la mise à jour de l’image principale et de la modification de son nom.',
    'TEXT_MSG_INVALID_EXTENSION' => 'L’extension (%2$s) du fichier image téléchargé « %1$s » n’est pas prise en charge. L’extension doit être parmi (%3$s).',
    'TEXT_BASE' => 'de base',
    'TEXT_MEDIUM' => 'moyenne',
    'TEXT_LARGE' => 'grande',
    'TEXT_MSG_FILE_EXISTS' => 'Le fichier existe (%s) ! Veuillez modifier le nom de base ou le suffixe.',
    'TEXT_MSG_INVALID_SQL' => 'Impossible de terminer la requête SQL.',
    'TEXT_MSG_NOCREATE_IMAGE_DIR' => 'Impossible de créer le répertoire d’images.',
    'TEXT_MSG_NOCREATE_MEDIUM_IMAGE_DIR' => 'Impossible de créer un répertoire pour les images moyennes.',
    'TEXT_MSG_NOCREATE_LARGE_IMAGE_DIR' => 'Impossible de créer un répertoire pour les grandes images.',
    'TEXT_MSG_NOPERMS_IMAGE_DIR' => 'Impossible de définir les autorisations du répertoire d’images.',
    'TEXT_MSG_NOPERMS_MEDIUM_IMAGE_DIR' => 'Impossible de définir les autorisations du répertoire d’images moyennes.',
    'TEXT_MSG_NOPERMS_LARGE_IMAGE_DIR' => 'Impossible de définir les autorisations du répertoire des grandes images.',
    'TEXT_MSG_NAME_TOO_LONG_ERROR' => 'Le fichier image « %1$s » est trop long pour être enregistré dans la base de données. Choisissez un nom contenant %2$u caractères ou moins.',
    'TEXT_MSG_NO_SUFFIXES_FOUND' => 'Impossible de trouver un suffixe d’image supplémentaire inutilisé dans la plage _01 à _99.',
    'TEXT_MSG_NO_FILE_UPLOADED' => 'Aucun <b>fichier image de base</b> n’a été sélectionné; Veuillez réessayer.',

    'TEXT_MSG_NOUPLOAD_DEFAULT' => 'Impossible de télécharger le fichier image par défaut.',
    'TEXT_MSG_NORESIZE' => 'Impossible de redimensionner l’image',
    'TEXT_MSG_NOCOPY_LARGE' => 'Impossible de copier un fichier image de grande taille.',
    'TEXT_MSG_NOCOPY_MEDIUM' => 'Impossible de copier un fichier image de taille moyenne.',
    'TEXT_MSG_NOCOPY_DEFAULT' => 'Impossible de copier le fichier image par défaut.',
    'TEXT_MSG_NOPERMS_LARGE' => 'Impossible de définir les autorisations d’un fichier image de grande taille.',
    'TEXT_MSG_NOPERMS_MEDIUM' => 'Impossible de définir les autorisations d’un fichier image de taille moyenne.',
    'TEXT_MSG_NOPERMS_DEFAULT' => 'Impossible de définir les autorisations du fichier image par défaut.',
    'TEXT_MSG_IMAGE_SAVED' => 'Image enregistrée avec succès.',
    'TEXT_MSG_LARGE_DELETED' => 'La grande image (%s) a été supprimée avec succès.',
    'TEXT_MSG_NO_DELETE_LARGE' => 'Impossible de supprimer la grande image (%s), vérifiez les autorisations.',
    'TEXT_MSG_MEDIUM_DELETED' => 'L’image moyenne (%s) a été supprimée avec succès.',
    'TEXT_MSG_NO_DELETE_MEDIUM' => 'Impossible de supprimer l’image moyenne (%s), vérifiez les autorisations.',
    'TEXT_MSG_DEFAULT_DELETED' => 'L’image de base (%s) a été supprimée avec succès.',
    'TEXT_MSG_NO_DELETE_DEFAULT' => 'Impossible de supprimer l’image de base (%s), vérifiez les autorisations.',
    'TEXT_MSG_NO_DEFAULT_FILE_FOUND' => 'L’image de base (%s) n’a pas été trouvée pour une action de suppression.',

    'TEXT_MSG_IMAGE_DELETED' => 'L’image (%s) a été supprimée avec succès.',
    'TEXT_MSG_IMAGE_NOT_FOUND' => 'L’image (%s) n’a pas été trouvée.',
    'TEXT_MSG_IMAGE_NOT_DELETED' => 'Impossible de supprimer l’image (%s). Vérifiez les autorisations.',

    'TEXT_MSG_IMPORT_SUCCESS' => 'Importation réussie : ',
    'TEXT_MSG_IMPORT_FAILURE' => 'Échec de l’importation : ',

// image manager
    'IH_IMAGE_NEW_FILE' => 'Cliquez pour ajouter une nouvelle image à ce produit',
    'IH_IMAGE_EDIT' => 'Cliquez pour modifier cette image',
    'TEXT_MEDIUM_FILE_IMAGE' => 'Fichier image moyenne (facultatif)',
    'TEXT_LARGE_FILE_IMAGE' => 'Fichier grande image (facultatif)',

// ih menu
    'IH_MENU_MANAGER' => 'Gestionnaire d’images',
    'IH_MENU_ADMIN' => 'Outils d’administration',
    'IH_MENU_ABOUT' => 'À propos/Aide',
    'IH_MENU_PREVIEW' => 'Aperçu',

    'IH_RESIZE_INSTRUCTIONS_HEADING' => 'Image Handler<sup>5</sup> est actuellement en train de redimensionner les images.',
    'IH_RESIZE_NOT' => ' pas',
    'IH_RESIZE_INSTRUCTIONS' => 'Pour %s le redimensionnement d’images, cliquez sur le bouton ci-dessous.',
    'IH_RESIZE_DISABLE' => 'désactiver',
    'IH_RESIZE_ENABLE' => 'activer',
    'IH_BUTTON_RESIZE_TOGGLE' => 'Basculer le réglage',
];

$define['TEXT_TABLE_CAPTION_INSTRUCTIONS'] = '<b>Remarque :</b> Toutes les images supplémentaires du produit sont <em>automatiquement</em> créées dans leurs tailles « petite » et « grande » <em>uniquement</em> et affichent « ' . $define['TEXT_NOT_NEEDED'] . ' » pour leur <b>image moyenne</b>. Si votre vitrine utilise d’autres tailles d’image pour celles-ci (ou pour l’image principale du produit), ces images sont créées (et mises en cache) « à la demande ».';

return $define;
