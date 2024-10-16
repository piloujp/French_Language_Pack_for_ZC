<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2024 Oct 16 Modified in v2.1.0-beta1 $
*/

$define = [
    'CFGTITLE_IH_RESIZE' => 'IH redimensionne les images',    'CFGDESC_IH_RESIZE' => 'Sélectionnez soit -no- qui est l\'ancien comportement de Zen-Cart, soit -yes- pour activer le redimensionnement automatique et la mise en cache des images. --Remarque : Si vous sélectionnez -no-, tous les paramètres d\'image spécifiques au gestionnaire d\'images ne seront pas disponibles, notamment : sélection du type de fichier image, couleurs d\'arrière-plan, compression, survol de l\'image et filigrane - Si vous souhaitez utiliser ImageMagick, vous devez spécifier l\'emplacement de l\'exécutable <strong>de conversion</strong> dans <em>includes/extra_configures/bmz_image_handler_conf.php</em>.',
    'CFGTITLE_IH_VERSION' => 'Version d\'IH',    'CFGDESC_IH_VERSION' => 'Affiche la version actuellement installée d\'<em>Image Handler</em>.',
    'CFGTITLE_IH_CACHE_NAMING' => 'Convention de dénomination des fichiers de cache d\'IH',    'CFGDESC_IH_CACHE_NAMING' => '<br>Choisissez la méthode utilisée par <em>Image Handler</em> pour nommer les images redimensionnées dans le répertoire <code>bmz_cache</code>.<br><br><em>Hashed</em> : Utilise un hache &quot;MD5&quot; pour produire les noms de fichiers. Cela peut être « difficile » pour identifier visuellement le fichier original en utilisant cette méthode.<br><br><em>Readable</em> : C\'est un bon choix pour les nouvelles installations de <em>IH</em> ou pour les installations mises à niveau qui n\'ont pas de liens d\'images codés en dur.<br><br><em>Mirrored</em> : Similaire à <em>Readable</em>, mais la structure des répertoires dans <code>bmz_cache</code> reflète la structure des sous-répertoires des images d\'origine.',
];

return $define;
