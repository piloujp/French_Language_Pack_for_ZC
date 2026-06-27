<?php
/**
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2023 Jan 16 New in v1.5.8a $
 */


$define = [
    'HEADING_TITLE' => 'Afficher les fichiers journaux de débogage',
    'TABLE_HEADING_FILENAME' => 'Nom de fichier',
    'TABLE_HEADING_MODIFIED' => 'Date',
    'TABLE_HEADING_FILESIZE' => 'Taille (octets)',
    'TABLE_HEADING_DELETE' => 'Sélectionné(s)',
    'TABLE_HEADING_ACTION' => 'Action',
    'BUTTON_INVERT_SELECTED' => 'Inverser la sélection',
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
    'TEXT_INSTRUCTIONS' => '<p>Les fichiers peuvent être triés par ordre croissant ou décroissant en cliquant sur l’un des Liens <em>Asc</em> ou <em>Desc</em>.</p><p>Cliquez sur une icône %7$s pour afficher le contenu du fichier associé. Seuls les %1$u premiers octets du fichier sélectionné seront affichés; si un fichier est &quot;surdimensionné&quot;, sa <em>taille du fichier</em> sera mise en surbrillance comme <span class="bigfile">ceci</span>.</p><ul><li><strong>Tout supprimer</strong> supprimera tous les fichiers en cours de visualisation.</li><li><strong>Supprimer la sélection</strong> supprimera uniquement les fichiers dont les cases sont cochées.</li><li><strong>Inverser la sélection</strong> échangera les fichiers cochés contre les fichiers non cochés et vice versa. Par exemple, si vous souhaitez supprimer tous les fichiers sauf un, cochez la sélection du fichier à conserver, puis « Inverser la sélection » et enfin « Supprimer la sélection ».</li></ul><p>Vous consultez actuellement le(s) %3$u %2$s de %4$u fichier(s) journaux avec ces préfixes :<br><code>%5$s</code><br> et qui <b>ne correspondent pas</b> à des péfixes (optionels) définis par des utilisateurs : <code>%6$s </code></p>',
    'JS_MESSAGE_DELETE_ALL_CONFIRM' => 'Êtes-vous sûr de vouloir supprimer ces \'+n+\' fichiers ?',
    'JS_MESSAGE_DELETE_SELECTED_CONFIRM' => 'Etes-vous sûr de vouloir supprimer le(s) fichier(s) sélectionné(s) ?',
    'WARNING_NOT_SECURE' => '<span class="errorText">REMARQUE : vous n’avez pas activé SSL. Le contenu des fichiers que vous affichez à partir de cette page ne sera pas chiffré et pourrait présenter un risque de sécurité.</span>',
    'WARNING_NO_FILES_SELECTED' => 'Aucun fichier n’a été sélectionné pour suppression !',
    'WARNING_SOME_FILES_DELETED' => 'Avertissement : seuls %u des %u fichiers journaux ont été supprimés; vérifiez les autorisations.',
    'SUCCESS_FILES_DELETED' => '%u fichiers journaux ont été supprimés.',
];

return $define;
