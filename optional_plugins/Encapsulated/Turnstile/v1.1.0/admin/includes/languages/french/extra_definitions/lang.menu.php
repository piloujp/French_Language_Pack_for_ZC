<?php

/**
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2026 Oct 14 Modified in v3.3.0-dev $
*/

$pluginForumUrl = 'https://www.zen-cart.com/threads/207429';
$pluginGithubUrl = 'https://github.com/dbltoe/Cloudflare_Turnstile';

$ButtonGap = '4px';
$ButtonStyle = ' target="_blank" rel="noopener noreferrer" class="btn btn-primary" role="button" style="margin:0 ' . $ButtonGap . ' 0 0;padding-left:8px;padding-right:8px"';

$ButtonsLinks =
    '<div style="margin:10px 0 0;padding:0 0 0 ' . $ButtonGap . '">'
    . '<a href="' . (defined('DIR_WS_CATALOG') ? DIR_WS_CATALOG : '/') . 'zc_plugins' . str_replace(dirname(__DIR__, 7), '', dirname(__DIR__, 5)) . '/readme.html"' . $ButtonStyle . '>Lisez-moi</a>'
    . '<a href="' . $pluginForumUrl . '"' . $ButtonStyle . '>Forum</a>'
    . '<a href="' . $pluginGithubUrl . '"' . $ButtonStyle . '>GitHub</a>'
    . '</div>';

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_TURNSTILE' => 'Tourniquet Cloudflare',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_TURNSTILE' => 'Ajoute le système gratuit de vérification anti-bots « Turnstile » (tourmiquet) de Cloudflare à tous les formulaires de création de compte (la page de création de compte, le formulaire pour nouveaux clients sur la page de connexion, ainsi que le formulaire d’inscription lors des commandes en une seule étape) et au formulaire de contact ; toute soumission pour laquelle la vérification est absente ou échoue est rejetée. Aucun fichier de modèle (template) n’est modifié. Le module reste inactif tant qu’une clé de site (Site Key) et une clé secrète (Secret Key) n’ont pas été saisies dans la section Configuration > Tourniquet Cloudflare.'
    . $ButtonsLinks,
// Turnstile - configuration
    'CFGTITLE_TURNSTILE_STATUS' => 'Activer le tourniquet Cloudflare ?',
    'CFGDESC_TURNSTILE_STATUS' => 'Interrupteur principal. Si réglé sur <strong>true</strong>, le système active la vérification Turnstile sur les formulaires sélectionnés ci-dessous et rejette toute soumission pour laquelle cette vérification est absente ou échoue. Aucune action n’est effectuée tant que les deux clés ci-dessous ne sont pas renseignées. Si réglé sur <strong>false</strong>, la fonctionnalité est désactivée sans être pour autant désinstallée.',
    'CFGTITLE_TURNSTILE_SITE_KEY' => 'Clé de site :',
    'CFGDESC_TURNSTILE_SITE_KEY' => 'La <strong>clé de site</strong> (Site Key) issue du tableau de bord Cloudflare (Turnstile), correspondant à un widget dont les noms d’hôte incluent le domaine de cette boutique. Elle est publique : elle apparaît sur la page.',
    'CFGTITLE_TURNSTILE_SECRET_KEY' => 'Clé secrète :',
    'CFGDESC_TURNSTILE_SECRET_KEY' => 'La <strong>clé secrète</strong> (Secret Key) correspondant au même widget. Elle est uniquement transmise à Cloudflare, depuis le serveur, afin de vérifier chaque soumission.',
    'CFGTITLE_TURNSTILE_CREATE_ACCOUNT' => 'Protéger la création de compte',
    'CFGDESC_TURNSTILE_CREATE_ACCOUNT' => 'Vérifie chaque formulaire permettant de créer un compte : la page de création de compte, le formulaire destiné aux nouveaux clients sur la page de connexion, ainsi que le formulaire de commande en une seule étape « One Page Checkout ».',
    'CFGTITLE_TURNSTILE_CONTACT_US' => 'Protection – Nous contacter',
    'CFGDESC_TURNSTILE_CONTACT_US' => 'Vérifie le formulaire « Contactez-nous » avant l’envoi de l’e-mail.',
// Turnstile - configuration_group
    'CFG_GRP_TITLE_CLOUDFLARE_TURNSTILE' => '%%BOX_CONFIGURATION_TURNSTILE%%',
    'CFG_GRP_DESC_CLOUDFLARE_TURNSTILE' => 'Configuration du %%BOX_CONFIGURATION_TURNSTILE%%',
];

return $define;
