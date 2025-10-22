<?php
/**
 * Sitemap XML Feed
 *
 * @package Sitemap XML Feed
 * @copyright Copyright 2005-2015 Andrew Berezin eCommerce-Service.com
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @link http://www.sitemaps.org/
 * @version $Id: sitemapxml.php, v 3.8 07.07.2016 12:39:33 AndrewBerezin $
 */
$define = [
    'NAVBAR_TITLE' => 'Plan du site XML',
    'HEADING_TITLE' => 'SiteMapXML (' . SITEMAPXML_VERSION . ')',

    'TEXT_EXECUTION_TIME' => 'Total : temps d’exécution %s, requêtes DB %s, temps des requêtes DB %s.',
    'TEXT_TOTAL_SITEMAP' => 'Total : fichiers %s, éléments %s (%s octets), temps d’exécution %s, requêtes de base de données %s, temps des requêtes de base de données %s.',
    'TEXT_FILE_SITEMAP_INFO' => 'Fichier <a href="%s" target="_blank">%s</a>. %s éléments écrits (%s octets), taille du fichier : %s octets',
    'TEXT_WRITTEN' => 'Éléments %s écrits (%s octets), taille du fichier : %s octets',

    'TEXT_URL_FILE' => 'URL - ',
    'TEXT_INCLUDE_FILE' => 'Inclure',
    'TEXT_FILE_NOT_CHANGED' => 'n’a pas changé - utilise le(s) fichier(s) existant(s)',
    'TEXT_FAILED_TO_OPEN' => 'Échec de l’ouverture du fichier « %s » !!!',
    'TEXT_FAILED_TO_CREATE' => 'Impossible de créer le fichier « %s ». Vous devrez peut-être utiliser le panneau de configuration ou le gestionnaire de fichiers de votre hébergeur web pour modifier efficacement les autorisations.',
    'TEXT_FAILED_TO_CHMOD' => 'Le fichier « %s » est en lecture seule. Vous devrez peut-être utiliser le panneau de configuration ou le gestionnaire de fichiers de votre hébergeur web pour modifier efficacement les autorisations.',

    'TEXT_HEAD_SITEMAP_INDEX' => 'Index du plan du site',
    'TEXT_HEAD_SITEMAP_INDEX_NONE' => 'Index du plan du site non généré : aucun plan de site trouvé (aucun plugin sélectionné)',

    'TEXT_ERROR_CURL_NOT_FOUND' => 'Fonctions CURL introuvables - requises pour les fonctions ping/vérification d’URL',
    'TEXT_ERROR_CURL_INIT' => 'Erreur cURL : initialiser cURL',
    'TEXT_ERROR_CURL_EXEC' => 'Erreur cURL : « <b>%s</b> » en lisant « %s »',
    'TEXT_ERROR_CURL_NO_HTTPCODE' => 'Erreur cURL : aucun code http lisant « %s »',
    'TEXT_ERROR_CURL_ERR_HTTPCODE' => 'Erreur cURL : Erreur lors de la lecture de « %s », code http « <b>%s</b> »',
    'TEXT_ERROR_CURL_0_DOWNLOAD' => 'Erreur cURL : taille de téléchargement nulle lors de la lecture de « %s »',
    'TEXT_ERROR_CURL_ERR_DOWNLOAD' => 'Erreur cURL : Lecture d’une page dont la taille est inférieure à « %s ». Téléchargement = %s, longueur du contenu = %s.',

    'TEXT_HEAD_PRODUCTS' => 'Plan du site des produits',
    'TEXT_HEAD_CATEGORIES' => 'Plan du site des catégories',
    'TEXT_HEAD_CATS2MAN' => 'Plan du site des catégories vers les fabricants',
    'TEXT_HEAD_MANUFACTURERS' => 'Plan du site des fabricants',
    'TEXT_HEAD_MAINPAGE' => 'Plan du site de la page principale',
    'TEXT_HEAD_EZPAGES' => 'Plan du site Ezpages',
    'TEXT_HEAD_REVIEWS' => 'Plan du site des avis',
    'TEXT_HEAD_PRODUCTS_REVIEWS' => 'Plan du site des avis sur les produits',
    'TEXT_HEAD_TESTIMONIALS' => 'Plan du site du gestionnaire de témoignages',

    'TEXT_HEAD_NEWS' => 'Plan du site des actualités',
    'TEXT_HEAD_NEWS_ARTICLES' => 'Plan du site des articles d’actualité',

    'TEXT_HEAD_PRODUCTS_VIDEO' => 'Plan du site vidéo des produits',

    'TEXT_ERRROR_EZPAGES_OUTOFBASE' => 'EZ-Page ignorée (hors URL de base) : « <b>%s</b> » (%s)',
    'TEXT_ERRROR_EZPAGES_ROBOTS' => 'EZ-Page ignorée (trouvée dans ROBOTS_PAGES_TO_SKIP) : « <b>%s</b> » (%s)',

    'TEXT_HEAD_BOXNEWS' => 'Plan du site du gestionnaire de la boîte de nouvelles',
];
return $define;
