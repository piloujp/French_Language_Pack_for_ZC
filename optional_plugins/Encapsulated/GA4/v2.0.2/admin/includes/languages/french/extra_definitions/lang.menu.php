<?php
/**
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2025 Feb 19 Modified in v2.1.0 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_GA4' => 'Google Analytics GA4',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_GA4' => 'Créer un lien vers Google Analytics 4 pour la création de rapports',
// Admin configuration
    'CFGTITLE_GA4_ANALYTICS_VERSION' => 'Version du plug-in',
    'CFGDESC_GA4_ANALYTICS_VERSION' => 'La version installée de <em>GA4 Analytics</em>.',
    'CFGTITLE_GA4_ANALYTICS_TRACKING_ID' => 'ID de mesure de GA4 Analytics',
    'CFGDESC_GA4_ANALYTICS_TRACKING_ID' => '<br>Saisissez soit l’ID de mesure GA4 Analytics, soit l’ID de conteneur Google Tag Manager qui vous a été fourni lors de l’enregistrement de votre site auprès de Google. L’ID GA4 commence par <code>G-</code> tandis que l’ID GTM commence par <code>GTM-</code>. Définissez cette valeur sur une chaîne vide (valeur par défaut) pour désactiver le plug-in <em>GA4 Analytics</em>.<br>',
    'CFGTITLE_GA4_ANALYTICS_VARIANT_SEPARATOR' => 'Séparateur de variantes de produits',
    'CFGDESC_GA4_ANALYTICS_VARIANT_SEPARATOR' => 'Si votre boutique propose des produits avec plusieurs attributs, identifiez la chaîne de caractères à utiliser comme séparateur pour la propriété <code>item_variant</code> d’un produit avec attributs. Valeur par défaut : <code>|</code>.<br>',
    'CFGTITLE_GA4_ANALYTICS_DEBUG_MODE' => 'Activer le mode débogage ?',
    'CFGDESC_GA4_ANALYTICS_DEBUG_MODE' => 'Tous les événements GA4 doivent-ils être envoyés en mode de débogage ? Cela peut vous aider à déboguer votre installation GA4. Valeur par défaut : <b>false</b>.',
    'CFGTITLE_GA4_ANALYTICS_ITEM_ID_VALUE' => 'Choisissez la valeur du paramètre <code>item_id</code>',
    'CFGDESC_GA4_ANALYTICS_ITEM_ID_VALUE' => '<br>Lorsque des produits sont inclus dans des événements GA4, quelle valeur doit être utilisée pour le paramètre <code>item_id</code> ? Si vous choisissez <code>products_id</code>, le modèle du produit (si cette valeur n’est pas vide) est placé dans le nom du champ que vous identifiez ci-dessous. Valeur par défaut : <code>products_model</code>.',
    'CFGTITLE_GA4_ANALYTICS_DEBUG_IP_LIST' => 'Mode débogage, liste IP',
    'CFGDESC_GA4_ANALYTICS_DEBUG_IP_LIST' => 'Si vous souhaitez activer le mode débogage uniquement pour certaines adresses IP, saisissez ces adresses IP ici, en les séparant par des virgules (les espaces intermédiaires sont acceptables). Laissez ce champ vide (valeur par défaut) et le mode débogage s’applique à <b>toutes</b> les adresses IP.<br>',
    'CFGTITLE_GA4_ANALYTICS_ITEM_MODEL_FIELD' => 'Choisissez le nom du champ <code>products_model</code>',
    'CFGDESC_GA4_ANALYTICS_ITEM_MODEL_FIELD' => 'Si vous choisissez <code>products_id</code> pour le paramètre ci-dessus, identifiez le nom du champ d’événement dans lequel le modèle du produit doit être placé. La valeur par défaut (<code>ep.item_model</code>) peut être « difficile » à voir dans votre console de gestion Google. Des suggestions alternatives, réutilisant les champs GA4 intégrés sont <code>item_list_id</code> et <code>item_list_name</code>.<br>',
];

return $define;
