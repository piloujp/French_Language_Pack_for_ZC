<?php
/**
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2026 Mar 29 Modified in v2.2.1 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_GDPR_DSAR' => 'Gestionnaire RGPD / DADP',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_GDPR_DSAR' => 'Réception des demandes d’accès aux données personnelles (DADP) des titulaires de compte, avec traitement vérifié par l’administrateur, livraison des exportations, flux de travail d’effacement et enregistrement du consentement.',
// Admin configuration
    'CFGTITLE_GDPR_DSAR_ENABLE' => 'Activer le plugin RGPD/DADP ?',
    'CFGDESC_GDPR_DSAR_ENABLE' => 'Activer les outils de traitement des demandes DADP côté client et d’administration.',
    'CFGTITLE_GDPR_DSAR_EXPORT_EXPIRY_DAYS' => 'Expiration du lien d’exportation (jours)',
    'CFGDESC_GDPR_DSAR_EXPORT_EXPIRY_DAYS' => 'Nombre de jours avant l’expiration des liens de téléchargement pour l’exportation.',
    'CFGTITLE_GDPR_DSAR_MAX_ACTIVE_REQUESTS_PER_TYPE' => 'Nombre maximal de requêtes actives par type',
    'CFGDESC_GDPR_DSAR_MAX_ACTIVE_REQUESTS_PER_TYPE' => 'Nombre maximal de demandes actives qu’un client peut avoir par type de DADP.',
    'CFGTITLE_GDPR_DSAR_EXPORT_STORAGE_RELATIVE' => 'Dossier de stockage d’exportation',
    'CFGDESC_GDPR_DSAR_EXPORT_STORAGE_RELATIVE' => 'Chemin relatif depuis la racine du catalogue utilisé pour stocker les fichiers ZIP d’exportation.',
    'CFGTITLE_GDPR_DSAR_SEND_CUSTOMER_EMAILS' => 'Envoyer des e-mails aux clients relatifs au cycle de vie DADP ?',
    'CFGDESC_GDPR_DSAR_SEND_CUSTOMER_EMAILS' => 'Envoyer des notifications aux clients lorsque les demandes DADP sont soumises, approuvées, rejetées et terminées.',
    'CFGTITLE_GDPR_DSAR_NOTIFY_ADMIN_NEW_REQUEST' => 'Notifier l’administrateur des nouvelles demandes DADP ?',
    'CFGDESC_GDPR_DSAR_NOTIFY_ADMIN_NEW_REQUEST' => 'Envoyer un courriel de notification au propriétaire du magasin lorsqu’un client soumet une nouvelle demande d’accès aux données.',
    'CFGTITLE_GDPR_DSAR_SLA_DAYS' => 'Nombre de jours pour le SLA ou le DADP',
    'CFGDESC_GDPR_DSAR_SLA_DAYS' => 'Nombre de jours pour traiter une demande DADP avant qu’elle ne soit considérée comme en retard dans le suivi administratif.',
];

return $define;
