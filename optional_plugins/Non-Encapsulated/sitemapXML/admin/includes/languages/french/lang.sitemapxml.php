<?php
/**
 * Sitemap XML Feed
 *
 * Last updated: v4.0.2
 *
 * @package Sitemap XML Feed
 * @copyright Copyright 2005-2016 Andrew Berezin eCommerce-Service.com
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @link http://www.sitemaps.org/
 * @version $Id: sitemapxml.php, v 3.8 07.07.2016 12:39:33 AndrewBerezin $
 */
global $current_page;   //- Needed for zc158 since language files are now loaded by a class

$define = [
    'HEADING_TITLE' => 'Plan du site XML',
    'TEXT_SITEMAPXML_TIPS_HEAD' => 'Conseils',
    'TEXT_SITEMAPXML_TIPS_TEXT' => '<p>Pour en savoir plus sur la gestion des plans de site de ce logiciel, veuillez <a href="' . zen_href_link($current_page, zen_get_all_get_params()) . '">recharger</a> cette page.</p>',
    'TEXT_SITEMAPXML_INSTRUCTIONS_HEAD' => 'Créez / mettez à jour votre(vos) plan(s) de site',
    'TEXT_SITEMAPXML_CHOOSE_PARAMETERS_REBUILD' => 'Reconstruisez tous les fichiers sitemap*.xml !',

    'ERROR_SITEMAPXML_TOKEN_INVALID_HDR' => 'Les plans de site ne peuvent pas être créés',
    'ERROR_SITEMAPXML_TOKEN_INVALID_MESSAGE' => 'Le jeton d’exécution (%1$s) que vous avez fourni contient des caractères non valides.',

    'WARNING_SITEMAPXML_FORCE_COOKIE_USE' => 'Les moteurs de recherche ne pourront pas explorer votre plan de site tant que vous n’aurez pas modifié le paramètre de configuration <samp>Sessions :: Forcer l’utilisation des cookies</samp> sur <b>False</b>.',

    'TEXT_SITEMAPXML_ROBOTS_HDR' => 'Le fichier <code>robots.txt</code> de votre site',
    'SUCCESS_SITEMAPXML_ROBOTS_TXT_OK' => 'Le fichier <code>robots.txt</code> de votre site pointe les moteurs de recherche vers votre plan de site XML <code>%1$s</code> !',
    'WARNING_SITEMAPXML_NO_ROBOTS_FILE' => 'Il manque le fichier <code>robots.txt</code> à votre site ! Les moteurs de recherche ne pourront pas trouver votre plan de site.',
    'WARNING_SITEMAPXML_NO_ROBOTS_TEXT' => 'Le fichier <code>robots.txt</code> de votre site ne redirige pas les moteurs de recherche vers votre fichier XML Sitemap. Pensez à ajouter <code>Sitemap: %1$s</code> à votre fichier robots.txt.',

    'TEXT_SITEMAPXML_PLUGINS_LIST' => 'Plugins de plan de site',
    'TEXT_SITEMAPXML_PLUGINS_LIST_SELECT' => 'Sélectionnez les plans de site à générer',

    'TEXT_SITEMAPXML_FILE_LIST' => 'Liste des fichiers Sitemaps',
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_FNAME' => 'Nom',
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_FSIZE' => 'Taille',
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_FTIME' => 'Dernière modification',
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_FPERMS' => 'Autorisations',
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_TYPE' => 'Type',
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_ITEMS' => 'Articles',
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_COMMENTS' => 'Commentaires',
    'TEXT_SITEMAPXML_FILE_LIST_TABLE_ACTION' => 'Action',

    'TEXT_SITEMAPXML_IMAGE_POPUP_ALT' => 'ouvrir le plan du site dans une nouvelle fenêtre',
    'TEXT_SITEMAPXML_RELOAD_WINDOW' => 'Actualiser la liste des fichiers',

    'TEXT_SITEMAPXML_FILE_LIST_COMMENTS_READONLY' => 'Lecture seule !!!',
    'TEXT_SITEMAPXML_FILE_LIST_COMMENTS_IGNORED' => 'Ignorés',

    'TEXT_SITEMAPXML_FILE_LIST_TYPE_URLSET' => 'Ensemble d’URL',
    'TEXT_SITEMAPXML_FILE_LIST_TYPE_SITEMAPINDEX' => 'Index du plan du site',
    'TEXT_SITEMAPXML_FILE_LIST_TYPE_UNDEFINED' => 'Indéfinis!!!',

    'TEXT_ACTION_VIEW_FILE' => 'Voir',
    'TEXT_ACTION_TRUNCATE_FILE' => 'Tronquer',
    'TEXT_ACTION_TRUNCATE_FILE_CONFIRM' => 'Vous voulez vraiment tronquer le fichier %s ?',
    'TEXT_ACTION_DELETE_FILE' => 'Supprimer',
    'TEXT_ACTION_DELETE_FILE_CONFIRM' => 'You really want to delete the file %s?',

    'TEXT_MESSAGE_FILE_ERROR_OPENED' => 'Erreur lors de l’ouverture du fichier %s',
    'TEXT_MESSAGE_FILE_TRUNCATED' => 'Fichier %s tronqué',
    'TEXT_MESSAGE_FILE_DELETED' => 'Fichier %s supprimé',
    'TEXT_MESSAGE_FILE_ERROR_DELETED' => 'Erreur lors de la suppression du fichier %s',
];

if (defined('SITEMAPXML_SITEMAPINDEX')) {
    $sitemapindex_http_link = HTTP_CATALOG_SERVER . DIR_WS_CATALOG . SITEMAPXML_SITEMAPINDEX . '.xml';
    $define['SITEMAPXML_SITEMAPINDEX_HTTP_LINK'] = $sitemapindex_http_link;
    $define['TEXT_SITEMAPXML_TIPS_TEXT'] =
        '<p>Vous pouvez tout lire sur les plans de site sur <strong><a href="https://sitemaps.org/" target="_blank" rel="noopener noreferrer" class="splitPageLink">[Sitemaps.org]</a></strong>.</p>
        <p>Une fois les plans de site générés, vous devez les faire remarquer :</p>
        <ol>
            <li>Inscrivez-vous ou connectez-vous à votre compte : <strong><a href="https://www.google.com/webmasters/tools/home" target="_blank" rel="noopener noreferrer" class="splitPageLink">[Google]</a></strong>, <strong><a href="https://ssl.bing.com/webmaster" target="_blank" rel="noopener noreferrer" class="splitPageLink">[Bing]</a></strong>.</li>
            <li>Soumettez votre plan de site <code>' . $sitemapindex_http_link . '</code> via l’interface de soumission du moteur de recherche <strong><a href="https://www.google.com/webmasters/tools/home" target="_blank" rel="noopener noreferrer" class="splitPageLink">[Google]</a></strong>.</li>
            <li>Spécifiez l’emplacement du plan du site dans votre fichier <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . 'robots.txt' . '" target="_blank" class="splitPageLink">robots.txt</a> (<a href="https://sitemaps.org/protocol.php#submit_robots" target="_blank" rel="noopener noreferrer" class="splitPageLink">plus...</a>) : <code>Plan du site　:' . $sitemapindex_http_link . '</code></li>
        </ol>
        <p>Pour mettre à jour <em>automatiquement</em> les plans de site, vous devrez configurer une tâche Cron via le panneau de contrôle de votre hébergeur.</p>
        <p>Pour exécuter la génération en tant que tâche cron (à 5 heures du matin par exemple), vous devrez créer quelque chose de similaire aux exemples suivants.</p>
        <samp>0 5 * * * GET \'https://your_domain/index.php?main_page=sitemapxml&amp;rebuild=yes%1$s\'</samp><br>
        <samp>0 5 * * * wget -q \'https://your_domain/index.php?main_page=sitemapxml&amp;rebuild=yes%1$s\' -O /dev/null</samp><br>
        <samp>0 5 * * * curl -s \'https://your_domain/index.php?main_page=sitemapxml&amp;rebuild=yes%1$s\'</samp><br>
        <samp>0 5 * * * php -f &lt;path to shop&gt;/cgi-bin/sitemapxml.php rebuild=yes%2$s</samp><br>';
}
return $define;
