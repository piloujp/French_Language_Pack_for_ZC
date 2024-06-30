<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2021 Apr 02 New in v1.5.8-alpha $
*/


$define = [
    'HEADING_TITLE' => 'Afficher les fichiers journaux de débogage',
    'TABLE_HEADING_FILENAME' => 'Nom de fichier',
    'TABLE_HEADING_MODIFIED' => 'Date de modification',
    'TABLE_HEADING_FILESIZE' => 'Taille du fichier (octets)',
    'TABLE_HEADING_DELETE' => 'Supprimer ?',
    'TABLE_HEADING_ACTION' => 'Action',
    'BUTTON_DELETE_SELECTED' => 'Supprimer la sélection',
    'DELETE_SELECTED_ALT' => 'Supprimer tous les fichiers sélectionnés',
    'BUTTON_DELETE_ALL' => 'Tout supprimer',
    'DELETE_ALL_ALT' => 'Supprimer tous les fichiers de la vue courante',
    'ICON_INFO_VIEW' => 'Afficher le contenu de ce fichier',
    'DISPLAY_DEBUG_LOGS_ONLY' => 'Afficher uniquement les journaux de débogage ?',
    'TEXT_HEADING_INFO' => 'Contenu du fichier',
    'TEXT_MOST_RECENT' => 'plus récent(s)',
    'TEXT_OLDEST' => 'plus ancien(s)',
    'TEXT_SMALLEST' => 'plus petit(s)',
    'TEXT_LARGEST' => 'plus grand(s)',
    'TEXT_INSTRUCTIONS' => '<br><br>Les fichiers peuvent être triés par ordre croissant ou décroissant (en fonction de la date de la dernière modification ou de la taille du fichier) en cliquant sur l\'un des Liens <em>Asc</em> ou <em>Desc</em>. Cliquez sur une icône %7$s pour afficher le contenu du fichier associé. Seuls les %1$u premiers octets du fichier sélectionné seront affichés; si un fichier est &quot;surdimensionné&quot;, sa <em>taille du fichier</em> sera mise en surbrillance comme <span class="bigfile">ceci</span>.<br><br>Cliquer sur le bouton <strong>Tout supprimer</strong> supprimera tous les fichiers en cours de visualisation; cliquer sur <strong>supprimer la sélection</strong> supprimera uniquement les fichiers dont les cases sont cochées.<br><br>Nous consultons actuellement le(s) %3$u %2$s de %4$u fichier(s) journaux avec ces préfixes <code>%5$s</code> et qui <b>ne correspondent pas</b> à ces <code>%6$s </code>.<br>',
    'JS_MESSAGE_DELETE_ALL_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ces \'+n+\' fichiers ?',
    'JS_MESSAGE_DELETE_SELECTED_CONFIRM' => 'Etes-vous sûr de vouloir supprimer le(s) fichier(s) \'+selected+\' sélectionné(s) ?',
    'WARNING_NOT_SECURE' => '<span class="errorText">REMARQUE : Vous n\'avez pas activé SSL. Le contenu des fichiers que vous affichez à partir de cette page ne sera pas chiffré et pourrait présenter un risque de sécurité.</span>',
    'WARNING_NO_FILES_SELECTED' => 'Aucun fichier n\'a été sélectionné pour suppression !',
    'WARNING_SOME_FILES_DELETED' => 'Avertissement : Seuls %u des %u fichiers journaux ont été supprimés; vérifiez les autorisations.',
    'SUCCESS_FILES_DELETED' => '%u fichiers journaux ont été supprimés.',
];

return $define;
