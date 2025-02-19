<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2024 Oct 16 Modified in v2.1.0-beta1 $
*/

$define = [
    'CFGTITLE_IH_RESIZE' => 'IH redimensionne les images',    'CFGDESC_IH_RESIZE' => 'Sélectionnez soit -no- qui est l\'ancien comportement de Zen-Cart, soit -yes- pour activer le redimensionnement automatique et la mise en cache des images. --Remarque : Si vous sélectionnez -no-, tous les paramètres d\'image spécifiques au gestionnaire d\'images ne seront pas disponibles, notamment : sélection du type de fichier image, couleurs d\'arrière-plan, compression, survol de l\'image et filigrane - Si vous souhaitez utiliser ImageMagick, vous devez spécifier l\'emplacement de l\'exécutable <strong>de conversion</strong> dans <em>includes/extra_configures/bmz_image_handler_conf.php</em>.',
    'CFGTITLE_SMALL_IMAGE_FILETYPE' => 'Type de fichier d\'images de petite taille IH',
    'CFGDESC_SMALL_IMAGE_FILETYPE' => 'Sélectionnez l\'un des formats -jpg-, -gif-, -png- ou -webp-. Les anciennes versions d\'Internet Explorer -v6.0 et plus anciennes- auront des problèmes pour afficher les images -png- avec des zones transparentes. Il est préférable de s\'en tenir à -gif- pour la transparence si vous DEVEZ prendre en charge les anciennes versions d\'Internet Explorer. Cependant, -png- est un format BIEN MEILLEUR pour la transparence. Utilisez -jpg- ou -png- pour les images plus grandes. -no_change- est un ancien comportement de Zen-Cart, utilisez la même extension de fichier pour les petites images que pour les images téléchargées.',
    'CFGTITLE_SMALL_IMAGE_BACKGROUND' => 'Arrière-plan des petites images IH',
    'CFGDESC_SMALL_IMAGE_BACKGROUND' => 'Si une image téléchargée avec des zones transparentes est convertie, ces zones prennent la couleur spécifiée. Définissez sur -transparent- pour conserver la transparence.',
    'CFGTITLE_SMALL_IMAGE_QUALITY' => 'Qualité de compression des petites images IH',
    'CFGDESC_SMALL_IMAGE_QUALITY' => 'Spécifie la qualité d\'image souhaitée pour les petites images jpg, valeurs décimales comprises entre 0 et 100. Plus la valeur est élevée, meilleure est la qualité et plus le fichier est gros. La valeur par défaut est 85, ce qui est correct, sauf si vous avez des besoins très spécifiques.',
    'CFGTITLE_WATERMARK_SMALL_IMAGES' => 'Filigrane pour les petites images IH',
    'CFGDESC_WATERMARK_SMALL_IMAGES' => 'Réglez sur -yes- si vous souhaitez afficher les petites images filigranées au lieu des petites images non marquées.',
    'CFGTITLE_MEDIUM_IMAGE_FILETYPE' => 'Type de fichier d\'images moyennes IH',
    'CFGDESC_MEDIUM_IMAGE_FILETYPE' => 'Sélectionnez l\'un des formats -jpg-, -gif-, -png- ou -webp. Les anciennes versions d\'Internet Explorer -v6.0 et plus anciennes- auront des problèmes pour afficher les images -png- avec des zones transparentes. Il est préférable de s\'en tenir à -gif- pour la transparence si vous DEVEZ prendre en charge les anciennes versions d\'Internet Explorer. Cependant, -png- est un format BIEN MEILLEUR pour la transparence. Utilisez -jpg- ou -png- pour les images plus grandes. -no_change- est un ancien comportement de Zen-Cart, utilisez la même extension de fichier pour les images moyennes que pour les images téléchargées.',
    'CFGTITLE_MEDIUM_IMAGE_BACKGROUND' => 'Arrière-plan des images moyennes IH',
    'CFGDESC_MEDIUM_IMAGE_BACKGROUND' => 'Si une image téléchargée avec des zones transparentes est convertie, ces zones prennent la couleur spécifiée. Définissez sur -transparent- pour conserver la transparence.',
    'CFGTITLE_MEDIUM_IMAGE_QUALITY' => 'Qualité de compression des images moyennes IH',
    'CFGDESC_MEDIUM_IMAGE_QUALITY' => 'Spécifiez la qualité d\'image souhaitée pour les images jpg moyennes, les valeurs décimales allant de 0 à 100. Plus la valeur est élevée, meilleure est la qualité et plus le fichier est gros. La valeur par défaut est 85, ce qui est correct, sauf si vous avez des besoins très spécifiques.',
    'CFGTITLE_WATERMARK_MEDIUM_IMAGES' => 'Filigrane pour les images moyennes IH',
    'CFGDESC_WATERMARK_MEDIUM_IMAGES' => 'Réglez sur -oui- si vous souhaitez afficher des images moyennes filigranées au lieu d\'images moyennes non marquées.',
    'CFGTITLE_LARGE_IMAGE_FILETYPE' => 'Type de fichier d\'images volumineuses IH',
    'CFGDESC_LARGE_IMAGE_FILETYPE' => 'Sélectionnez l\'un des formats -jpg-, -gif-, -png- ou -webp-. Internet Explorer -v6.0 et versions antérieures- rencontreront des problèmes pour afficher les images -png- avec des zones transparentes. Il est préférable de s\'en tenir à -gif- pour la transparence si vous DEVEZ prendre en charge les anciennes versions d\'Internet Explorer. Cependant, -png- est un format BIEN MEILLEUR pour la transparence. Utilisez -jpg- ou -png- pour les images plus grandes. -no_change- est un ancien comportement de Zen-Cart, utilisez la même extension de fichier pour les grandes images que pour les images téléchargées.',
    'CFGTITLE_LARGE_IMAGE_BACKGROUND' => 'Arrière-plan des grandes images IH',
    'CFGDESC_LARGE_IMAGE_BACKGROUND' => 'Si une image téléchargée avec des zones transparentes est convertie, ces zones prennent la couleur spécifiée. Définissez sur -transparent- pour conserver la transparence.',
    'CFGTITLE_LARGE_IMAGE_QUALITY' => 'Qualité de compression des grandes images IH',
    'CFGDESC_LARGE_IMAGE_QUALITY' => 'Spécifiez la qualité d\'image souhaitée pour les grandes images jpg, valeurs décimales comprises entre 0 et 100. Plus la valeur est élevée, meilleure est la qualité et plus le fichier est gros. La valeur par défaut est 85, ce qui est correct, sauf si vous avez des besoins très spécifiques.',
    'CFGTITLE_WATERMARK_LARGE_IMAGES' => 'Filigrane pour les images de grande taille IH',
    'CFGDESC_WATERMARK_LARGE_IMAGES' => 'Réglez sur -yes- si vous souhaitez afficher de grandes images filigranées au lieu de grandes images non marquées.',
    'CFGTITLE_LARGE_IMAGE_MAX_WIDTH' => 'Largeur maximale des grandes images IH',
    'CFGDESC_LARGE_IMAGE_MAX_WIDTH' => 'Spécifie une largeur maximale pour vos grandes images. Si la largeur et la hauteur sont vides ou définies sur 0, aucun redimensionnement des grandes images n\'est effectué.',
    'CFGTITLE_LARGE_IMAGE_MAX_HEIGHT' => 'Hauteur maximale des grandes images IH',
    'CFGDESC_LARGE_IMAGE_MAX_HEIGHT' => 'Spécifiez une hauteur maximale pour vos grandes images. Si la largeur et la hauteur sont vides ou définies sur 0, aucun redimensionnement des grandes images n\'est effectué.',
    'CFGTITLE_WATERMARK_GRAVITY' => 'Position du filigrane IH',
    'CFGDESC_WATERMARK_GRAVITY' => 'Sélectionnez la position du filigrane par rapport au cadre de l\'image. La valeur par défaut est <strong>Center</Strong>.',
    'CFGTITLE_IH_VERSION' => 'Version d\'IH',    'CFGDESC_IH_VERSION' => 'Affiche la version actuellement installée d\'<em>Image Handler</em>.',
    'CFGTITLE_IH_CACHE_NAMING' => 'Convention de dénomination des fichiers de cache d\'IH',    'CFGDESC_IH_CACHE_NAMING' => '<br>Choisissez la méthode utilisée par <em>Image Handler</em> pour nommer les images redimensionnées dans le répertoire <code>bmz_cache</code>.<br><br><em>Hashed</em> : Utilise un hache &quot;MD5&quot; pour produire les noms de fichiers. Cela peut être « difficile » pour identifier visuellement le fichier original en utilisant cette méthode.<br><br><em>Readable</em> : C\'est un bon choix pour les nouvelles installations de <em>IH</em> ou pour les installations mises à niveau qui n\'ont pas de liens d\'images codés en dur.<br><br><em>Mirrored</em> : Similaire à <em>Readable</em>, mais la structure des répertoires dans <code>bmz_cache</code> reflète la structure des sous-répertoires des images d\'origine.',
];

return $define;
