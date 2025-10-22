<?php
// -----
// Part of the "Image Handler" plugin, v5.0.0 and later, by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2017-2018 Vinos de Frutas Tropicales
//
// Note: Some of these definitions were present in /admin/includes/languages/english/bmz_image_handler.php for IH versions
//         prior to v5.0.0.
//
// -----
// The title displayed on the admin's "Tools" dropdown menu.
//
define('BOX_TOOLS_IMAGE_HANDLER', 'Image Handler<sup>5</sup>');
define('BOX_TOOLS_IMAGE_HANDLER_UNINSTALL', 'Désinstallation d’Image Handler<sup>5</sup>');
define('BOX_TOOLS_IMAGE_HANDLER_VIEW_CONFIG', 'Afficher la configuration d’Image Handler<sup>5</sup>');

// -----
// Messages issued by /admin/includes/init_includes/init_image_handler.php
//
define('IH_TEXT_MESSAGE_INSTALLED', 'Image Handler<sup>5</sup>, v%s a été installé avec succès.');
define('IH_TEXT_MESSAGE_UPDATED', 'La mise à jour d’Image Handler<sup>5</sup> v%1$s vers v%2$s a réussi.');

// -----
// The image-title text for the button in the Categories->Products listing.  Also used by /admin/image_handler.php
//
define('ICON_IMAGE_HANDLER', 'Image Handler ' . (defined('IH_VERSION') ? IH_VERSION : ''));