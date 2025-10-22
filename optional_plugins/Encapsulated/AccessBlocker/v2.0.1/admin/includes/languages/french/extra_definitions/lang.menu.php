<?php
/**
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2025 June 25 Modified in v2.1.0 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_ACCESSBLOCKER' => 'Bloqueur d’accès',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_ACCESSBLOCKER' => 'Ce plugin intégré fournit à votre boutique des contrôles de niveau administrateur pour bloquer (ou limiter) les actions fournies par les pages ask_a_question, contact_us, create_account, login et OPC guest-checkout.',
// Admin configuration
    'CFGTITLE_ACCESSBLOCK_ENABLED' => 'Activer le bloqueur d’accès ?',
    'CFGDESC_ACCESSBLOCK_ENABLED' => 'Lorsqu’il est activé, le plugin bloque les accès indésirables aux pages <code>ask_a_question</code>, <code>contact_us</code>, <code>create_account</code> et <code>login</code> de votre boutique, en fonction des « menaces » identifiées par le service ipdata.co et/ou des éléments supplémentaires identifiés ci-dessous.<br><br>Valeur par défaut : <b>false</b>',
    'CFGTITLE_ACCESSBLOCK_IPDATA_API_KEY' => 'Service ipData : clé API',
    'CFGDESC_ACCESSBLOCK_IPDATA_API_KEY' => 'Saisissez la clé API reçue du service <a href=\"https://ipdata.co/registration.html\" target=\"_blank\" rel=\"noreferrer\">ipData</a>. Laissez ce paramètre vide si aucune information ipdata.co ne doit être utilisée.<br>',
    'CFGTITLE_ACCESSBLOCK_USE_EU_ENDPOINT' => 'Utiliser ipdata.co EU Endpoint ?',
    'CFGDESC_ACCESSBLOCK_USE_EU_ENDPOINT' => '<br>Indiquez si le point de terminaison UE ipdata.co doit être utilisé pour les requêtes de menaces. Si ce paramètre est défini sur <em>true</em>, un point de terminaison UE dédié est utilisé pour garantir que les données des utilisateurs finaux que vous nous envoyez restent dans l’UE.<br><br>Valeur par défaut : <b>false</b>',
    'CFGTITLE_ACCESSBLOCK_RESTRICT_THREAT_ACCESS' => 'Restreindre totalement l’accès aux menaces ?',
    'CFGDESC_ACCESSBLOCK_RESTRICT_THREAT_ACCESS' => '<br>Indiquez si le bloqueur d’accès doit ou non restreindre <b>totalement</b> l’accès en forçant un « HTTP 410 (Gone) » si une menace est détectée.<br><br>Valeur par défaut : <b>false</b>',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_COUNTRIES' => 'Bloquer par : Pays',
    'CFGDESC_ACCESSBLOCK_BLOCKED_COUNTRIES' => 'Saisissez, en utilisant une liste séparée par des virgules, les codes pays ISO à deux caractères des pays à bloquer. Toutes les adresses IP provenant de ces pays seront bloquées.<br><br><b>Remarque :</b> Ce paramètre ne s’applique pas si la clé API du service ipData n’est pas définie.',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_ORGS' => 'Bloquer par : Organisation',
    'CFGDESC_ACCESSBLOCK_BLOCKED_ORGS' => 'Saisissez, en les séparant par des virgules, les adresses IP spécifiques à bloquer. Si vous ne saisissez que les segments supérieurs d’une adresse IP, par exemple <code>192.168.1.</code>, toutes les adresses IP correspondantes, par exemple <code>192.168.1.0-192.168.1.255</code>, seront bloquées.',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_IPS' => 'Bloquer par : adresse IP',
    'CFGDESC_ACCESSBLOCK_BLOCKED_IPS' => 'Saisissez, en les séparant par des virgules, les adresses IP spécifiques à bloquer. Si vous ne saisissez que les segments supérieurs d’une adresse IP, par exemple <code>192.168.1.</code>, toutes les adresses IP correspondantes, par exemple <code>192.168.1.0-192.168.1.255</code>, seront bloquées.',
    'CFGTITLE_ACCESSBLOCK_WHITELISTED_IPS' => 'Adresse IP : liste blanche',
    'CFGDESC_ACCESSBLOCK_WHITELISTED_IPS' => 'Saisissez, en les séparant par des virgules, les adresses IP spécifiques à activer sans condition. Si vous ne saisissez que les segments supérieurs d’une adresse IP, par exemple <code>192.168.1.</code>, toutes les adresses IP correspondantes, par exemple <code>192.168.1.0-192.168.1.255</code>, ne seront pas bloquées, même si elles sont identifiées comme un thread par ipdata.co.',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_HOSTS' => 'Bloquer par : Adresse de l’hôte',
    'CFGDESC_ACCESSBLOCK_BLOCKED_HOSTS' => 'Saisissez, en les séparant par des virgules, les adresses d’hôte à bloquer. Si l’adresse d’hôte à l’origine de l’adresse IP contient l’une des chaînes saisies ici, l’accès sera bloqué.',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_EMAILS' => 'Bloquer par : Adresse e-mail',
    'CFGDESC_ACCESSBLOCK_BLOCKED_EMAILS' => 'Saisissez, en les séparant par des virgules, les adresses e-mail à bloquer. Si l’adresse e-mail saisie contient l’une des chaînes indiquées ici, l’accès sera bloqué. Vous pouvez bloquer l’accès à une adresse e-mail spécifique (<code>joe@example.com</code>) ou à un domaine de messagerie entier (<code>@example.com</code>).',
    'CFGTITLE_ACCESSBLOCK_WHITELISTED_EMAILS' => 'Adresse e-mail : Liste blanche',
    'CFGDESC_ACCESSBLOCK_WHITELISTED_EMAILS' => 'Saisissez, en les séparant par des virgules, les adresses e-mail à activer sans condition. Si l’adresse e-mail saisie contient l’une des chaînes indiquées ici, l’accès ne sera pas bloqué. Vous pouvez activer l’accès pour une adresse e-mail spécifique (<code>joe@example.com</code>) ou pour un domaine de messagerie entier (<code>@example.com</code>).',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_PHRASES' => 'Bloquer par : Mots-clés du message',
    'CFGDESC_ACCESSBLOCK_BLOCKED_PHRASES' => 'Saisissez, en les séparant par des virgules, les mots d’un message <code>contact_us</code> qui doivent entraîner un blocage. Si le message contient l’un des mots saisis ici, l’e-mail <em>contact-us</em> associé ne sera pas envoyé.',
    'CFGTITLE_ACCESSBLOCK_DEBUG' => 'Activer le débogage ?',
    'CFGDESC_ACCESSBLOCK_DEBUG' => 'Lorsqu’il est activé, le plugin crée un journal mensuel, <code>/logs/accesses_blocked_YYYY_mm.log</code>, des accès refusés par le plugin.',
];

return $define;
