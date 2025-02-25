<?php
/**
 * Part of Ultimate URLs for Zen Cart, v3.1.0+.
 *
 * @copyright Copyright 2019, 2023  Cindy Merkin (vinosdefrutastropicales.com)
 * @copyright Copyright 2013 - 2015 Andrew Ballanger
 * @license http://www.gnu.org/licenses/gpl.txt GNU GPL V3.0
 */
define('BOX_CONFIGURATION_USU', 'URL ultimes');
define('BOX_CONFIGURATION_USU_UNINSTALL', 'Désinstaller URL Ultimes');

// Messages used on the configuration page
define('USU_PLUGIN_WARNING_SHORT_WORDS', 'La valeur saisie pour le paramètre <em>Filtrer les mots courts</em> (<b>%s</b>) n\'est pas un entier positif ; le paramètre a été défini par défaut sur <b>0</b>.');
define('USU_PLUGIN_WARNING_CATEGORY_DIR', 'Le paramètre <em>Afficher les catégories sous forme de répertoires</em> a été modifié en <code>short</code>, car son paramètre <code>full</code> est incompatible avec le paramètre <code>parent</code> de <em>Format des URL alternatives</em>.');
define('USU_PLUGIN_WARNING_FORMAT', 'Le paramètre pour <em>Format des URL alternatives</em> a été modifié en <code>original</code>, car son paramètre <code>parent</code> est incompatible avec le paramètre <code>complet</code> d\'<em>Afficher les catégories sous forme de répertoires</em>.');

define('USU_INSTALLED_SUCCESS', BOX_CONFIGURATION_USU . ', v%s, a été installé avec succès.');
define('USU_UPDATED_SUCCESS', BOX_CONFIGURATION_USU . ' a été mis à jour avec succès de v%1$s à v%2$s.');
