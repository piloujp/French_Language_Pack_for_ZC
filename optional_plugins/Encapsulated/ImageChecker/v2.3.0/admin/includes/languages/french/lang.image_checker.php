<?php

declare(strict_types=1);

/**
 * Plugin: Image Checker
 * @link https://github.com/torvista/Zen_Cart-Image_Checker
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @updated 03 August 2025 torvista
 */

$define = [
    'HEADING_TITLE' => 'Vérificateur d’images',
    'TEXT_IMAGES_DIRECTORY' => 'Chemin des images : ' . DIR_FS_CATALOG_IMAGES,
    'TEXT_INTRO' => '<p>« <em>Problèmes</em> d’image » : le produit a une image définie, mais cette image est manquante ou l’image définie n’est pas du bon type de fichier.</p><p>Les filtres sont activés par défaut pour examiner uniquement les catégories/produits <em>activés</em>.</p>',
    'TEXT_LIST_TYPE' => 'Vérifier :',
    'TEXT_CATEGORIES' => 'Catégories',
    'TABLE_HEADING_PRODUCTS' => 'Produits',
    'TEXT_FILTERS' => 'Filtres :',
    'TEXT_LIST_ALL' => 'Tout afficher',
    'TEXT_LIST_DISABLED' => 'Afficher les éléments désactivés (avec des problèmes d’image)',
    'TEXT_LIST_NO_IMAGES' => 'Afficher les éléments sans images définies',
    'TEXT_ENTRIES_CHECKED' => 'Produits vérifiés : ',
    'TEXT_IMAGE_PROBLEMS' => 'Problèmes d’image : ',
    'TEXT_QUERY_LIMITED' => 'Résultats limités à <b>%s</b> éléments.</b>',
    'TEXT_RESULTS_COUNT' => '%1$s vérifié(e)s : %2$s.',
    'TEXT_NO_ERRORS_FOUND' => 'Aucune erreur d’image n’a été trouvée.<br>Toutes les entrées avec des images définies font référence à un fichier image existant, avec l’extension correcte (le type de fichier) et d’un format d’image Web courant.',
    'ERROR_NO_ERROR' => 'ok',
    'ERROR_NO_IMAGE_DEFINED' => 'Aucune image définie',
    'ERROR_IMAGE_NOT_FOUND' => 'Image non trouvée',
    'ERROR_NOT_IMAGE' => 'Le fichier est nommé <b>%s</b> mais n’est pas une image valide (selon « getimagesize »)',
    'ERROR_IMAGE_FORMAT' => 'L’image est nommée avec une extension <b>%1$s</b>, mais est en fait un <b>%2$s</b> !',
    'ERROR_NOT_COMMON_FORMAT' => 'Un fichier <b>%s</b> n’est pas un type couramment utilisé pour les images Web (changez en PNG/GIF/JPG/WEBP ou même BMP).',
    'TABLE_HEADING_ENTRY' => 'Entrée',
    'TABLE_HEADING_NAME' => 'Nom',
    'TABLE_HEADING_IMAGE' => 'Image',
    'TABLE_HEADING_RESULT' => 'Résultat',
    'TEXT_EDIT_CATEGORY' => 'Modifier la catégorie',
    'TEXT_EDIT_PRODUCT' => 'Modifier le produit',
    'TEXT_NO_CATEGORIES_FOUND' => 'Aucune catégorie correspondante trouvée.',
    'TEXT_NO_PRODUCTS_FOUND' => 'Aucun produit correspondant trouvé.',
];

return $define;
