<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 Sep 04 Modified in v2.1.0-beta1 $
 */

$define = [
    'HEADING_TITLE' => 'Gestion des Bannières',
    'TABLE_HEADING_BANNERS' => 'Bannières',
    'TABLE_HEADING_GROUPS' => 'Groupes',
    'TABLE_HEADING_POSITIONS' => 'Positions',
    'TABLE_HEADING_STATISTICS' => 'Affichages / Clics',
    'TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS' => 'Nouvelle fenêtre',
    'TABLE_HEADING_BANNER_SORT_ORDER' => 'Classement',
    'TEXT_BANNERS_TITLE' => 'Intitulé de la bannière :',
    'TEXT_BANNERS_URL' => 'URL de la bannière :',
    'TEXT_BANNERS_GROUP' => 'Groupe de bannières :',
    'TEXT_BANNERS_NEW_GROUP' => 'ou entrez un nouveau groupe de bannières ci-dessous',
    'TEXT_BANNERS_IMAGE' => 'Télécharger l\'image :',
    'TEXT_BANNERS_CURRENT_IMAGE' => 'Image actuelle :',
    'TEXT_BANNERS_IMAGE_LOCAL' => 'Nom de fichier de l\'image actuelle affiché. Modifiez pour spécifier une image existante. Ou téléchargez-en une nouvelle.',
    'TEXT_BANNERS_IMAGE_TARGET' => 'Dossier cible de l\'image [Enregistrer sous] :',
    'TEXT_BANNER_IMAGE_TARGET_INFO' => '<strong>Répertoire cible suggéré pour l\'image téléchargée : </strong> '.DIR_FS_CATALOG_IMAGES.'banners/',
    'TEXT_BANNERS_HTML_TEXT_INFO' => '<strong>REMARQUE : les bannières HTML ne suivent pas les clics sur la bannière. Les bannières HTML remplacent l\'image de bannière spécifiée ci-dessus.</strong>',
    'TEXT_BANNERS_HTML_TEXT' => 'Texte HTML :',
    'TEXT_BANNERS_ALL_SORT_ORDER' => 'Classement - banner_box_all',
    'TEXT_BANNERS_ALL_SORT_ORDER_INFO' => '<strong>NOTE : la sidebox banners_box_all affichera les bannières selon leur ordre de classement</strong>',
    'TEXT_BANNERS_EXPIRES_ON' => 'Expire le :',
    'TEXT_BANNERS_OR_AT' => 'ou à',
    'TEXT_BANNERS_IMPRESSIONS' => 'expositions/affichages.',
    'TEXT_BANNERS_SCHEDULED_AT' => 'Planifiée le :',
    'TEXT_BANNERS_BANNER_NOTE' => '<b>Notes sur les bannières :</b><ul><li>Utilisez une image ou du texte HTML pour la bannière mais pas les deux en même temps.</li><li>Le texte HTML a priorité sur l\'image</li><li>Le texte HTML ne comptera pas les clics sur la bannière, mais comptera les affichages</li><li>Les bannières avec des URLs absolues ne sont pas conseillées sur des pages sécurisées</li></ul>',
    'TEXT_BANNERS_INSERT_NOTE' => '<b>Notes sur les images :</b><ul><li>Le répertoire de destination lors de l\'upload doit avoir les bonnes permissions (en écriture) !</li><li>Ne remplissez pas le champ \'Enregistrer sous\'(\'Save To\') si vous n\'uploadez pas d\'image sur le serveur web (c\'est à dire si vous utilisez une image déja présente sur le serveur).</li><li>Le champ \'Enregistrer sous\' doit pointer sur un répertoire existant et avec un slash de fin (ex: banners/).</li></ul>',
    'TEXT_BANNERS_EXPIRCY_NOTE' => '<b>Notes sur la date d\'expiration :</b><ul><li>Seul un des deux champs devrait être renseigné</li><li>Si vous ne désirez pas faire figurer de date d\'expiration automatique de la bannière, laissez ces deux champs vides</li></ul>',
    'TEXT_BANNERS_SCHEDULE_NOTE' => '<b>Notes sur la planification :</b><ul><li>Si la date de planification est précisée, la bannière sera affichée à partir de cette date.</li><li>Toutes les bannières planifiées sont marquées inactives et le restent jusqu\'à leur date où elles deviennent actives.</li></ul>',
    'TEXT_BANNERS_STATUS' => 'Statut de la bannière :',
    'TEXT_BANNERS_ACTIVE' => 'Active',
    'TEXT_BANNERS_NOT_ACTIVE' => 'Inactive',
    'TEXT_INFO_BANNER_STATUS' => '<strong>NOTE :</strong> Le statut de la bannière sera actualisé selon la date de planification et les expositions',
    'TEXT_BANNERS_OPEN_NEW_WINDOWS' => 'Bannière dans nouvelle fenêtre',
    'TEXT_INFO_BANNER_OPEN_NEW_WINDOWS' => '<strong>NOTE :</strong> La bannière s\'ouvrira dans une nouvelle fenêtre',
    'TEXT_BANNERS_DATE_ADDED' => 'Date ajoutée :',
    'TEXT_BANNERS_SCHEDULED_AT_DATE' => 'Planifiée le : <b>%s</b>',
    'TEXT_BANNERS_EXPIRES_AT_DATE' => 'Expire le : <b>%s</b>',
    'TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS' => 'Expire après : <b>%s</b> expositions',
    'TEXT_BANNERS_STATUS_CHANGE' => 'Changement de statut : %s',
    'TEXT_BANNERS_LAST_3_DAYS' => '3 derniers jours',
    'TEXT_INFO_DELETE_INTRO' => 'Êtes-vous certain(e) de vouloir supprimer cette bannière ?',
    'TEXT_INFO_DELETE_IMAGE' => 'Supprimer l\'image de la bannière',
    'SUCCESS_BANNER_INSERTED' => 'SUCCÈS : la bannière a été inséré.',
    'SUCCESS_BANNER_UPDATED' => 'SUCCÈS : la bannière a été actualisée.',
    'SUCCESS_BANNER_REMOVED' => 'SUCCÈS : la bannière a été supprimée.',
    'SUCCESS_BANNER_STATUS_UPDATED' => 'SUCCÈS : le statut de la bannière a été actualisé.',
    'ERROR_BANNER_TITLE_REQUIRED' => 'Erreur : intitulé de bannière requis.',
    'ERROR_BANNER_GROUP_REQUIRED' => 'Erreur : groupe de bannière requis.',
    'ERROR_IMAGE_DOES_NOT_EXIST' => 'Erreur : l\'image n\'existe pas.',
    'ERROR_IMAGE_IS_NOT_WRITEABLE' => 'Erreur: l\'image ne peut être supprimée.',
    'ERROR_UNKNOWN_STATUS_FLAG' => 'Erreur : statut de drapeau inconnu.',
    'ERROR_BANNER_IMAGE_REQUIRED' => 'Erreur : image de bannière requise.',
    'ERROR_UNKNOWN_BANNER_OPEN_NEW_WINDOW' => 'Erreur : la bannière n\'a pas pu être configurée pour s\'ouvrir dans une nouvelle fenêtre',
    'ERROR_INVALID_SCHEDULED_DATE' => 'La date de l\'option « Planifié à » n\'est pas valide, veuillez la saisir à nouveau.',
    'ERROR_INVALID_EXPIRES_DATE' => 'La date de l\'option « Expire le » n\'est pas valide, veuillez la saisir à nouveau.',
    'TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS' => 'Nouvelle fenêtre',
    'IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON' => 'Ouverture dans nouvelle fenêtre - Activé',
    'IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF' => 'Ouverture dans nouvelle fenêtre - Désactivé',
    'SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED' => 'SUCCÈS : la capacité de la bannière à s\'ouvrir dans une nouvelle fenêtre a été mis à jour.',
];

return $define;