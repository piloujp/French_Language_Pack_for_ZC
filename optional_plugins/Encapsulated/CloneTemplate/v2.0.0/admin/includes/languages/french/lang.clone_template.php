<?php
// -----
// Part of the "Clone Template" plugin for Zen Cart v1.5.8 or later (now an encapsulated plugin).
//
// Last updated: v2.0.0
//
// Copyright (c) 2016-2023, Vinos de Frutas Tropicales (lat9)
//
$define = [
    'HEADING_TITLE' => 'Cloner un modèle <span style="font-size: smaller;">(%s)</span>',
    'TEXT_DESCRIPTION' => '<p>Cet outil vous permet de « cloner » ou de supprimer un modèle <em>existant</em>.</p>',

    'TEXT_INSTRUCTIONS_CLONE' => '<p>Lorsqu’un modèle est « cloné », tous les fichiers de remplacement et les paramètres du <b>contrôleur de zones de mise en page</b> du modèle source sont copiés dans le nouveau modèle.</p><p>Le nom que vous saisissez dans le champ <b>Nom d’affichage du nouveau modèle</b> identifiera le nouveau modèle dans la page <strong>Outils->Sélection de modèle</strong>.</p>',

    'TEXT_INSTRUCTIONS_REMOVE' => 'Vous pouvez supprimer tous les fichiers de remplacement de modèle associés à un modèle supplémentaire (non principal).',
    'TEXT_NOTHING_TO_REMOVE' => 'Il n’y a pas de modèles supplémentaires disponibles pour la suppression ; les modèles principaux <em>classic</em> et <em>responsive_classic</em> ne peuvent pas être supprimés.',

    'TEXT_TEMPLATE_SOURCE' => 'Nom du répertoire du modèle source : ',
    'TEXT_TEMPLATE_TARGET' => 'Nom du répertoire du nouveau　modèle : ',
    'TEXT_TEMPLATE_TARGET_NAME' => 'Nom d’affichage du nouveau　modèle : ',
    'CLONE_TEMPLATE_GO_ALT' => 'Cliquez ici pour cloner ce modèle',

    'TEXT_TEMPLATE_REMOVE_SOURCE' => 'Fichiers de modèles à supprimer : ',
    'CLONE_TEMPLATE_GO_REMOVE_ALT' => 'Cliquez ici pour supprimer les fichiers du modèle sélectionné',

    'TEXT_TEMPLATE_CLONED' => ' Ce modèle a été cloné à partir de %1$s le %2$s.',  //-%1$s (source template folder), %2$s (date of the cloning)

    'ERROR_TEMPLATE_TARGET_BLANK' => 'Le champ <b>Nom du répertoire du nouveau　modèle</b> ne peut pas être vide ; veuillez saisir une valeur.',
    'ERROR_TEMPLATE_TARGET_INVALID_CHARS' => 'Le champ <b>Nom du répertoire du nouveau　modèle</b> ne peut contenir que des caractères alphanumériques (a-z, A-Z, 0-9) ou des traits de soulignement (_) ; veuillez réessayer.',
    'ERROR_TEMPLATE_TARGET_NAME_BLANK' => 'Le champ <b>Nom d’affichage du nouveau modèle</b> ne peut pas être vide ; veuillez saisir une valeur.',
    'ERROR_TEMPLATE_TARGET_NAME_INVALID_CHARS' => 'Le champ <b>Nom d’affichage du nouveau modèle</b> ne peut contenir que des caractères alphanumériques (a-z, A-Z, 0-9) ou des traits de soulignement (_) ; veuillez réessayer.',
    'ERROR_TEMPLATE_TARGET_NAME_DUPLICATE' => 'Le <b>Nom d’affichage du nouveau modèle</b> existe déjà ; veuillez saisir un nouveau nom.',

    'MESSAGE_COPYING_FILES' => 'Copie des fichiers de %1$s vers %2$s',
    'MESSAGE_REMOVING_FILES' => 'Suppression des fichiers de %s',

    'MESSAGE_FILE_LOG' => '&nbsp;&nbsp;&nbsp;Les actions effectuées par ce traitement sont enregistrées dans %s.',

    'JS_CONFIRMATION_MESSAGE' => 'Cette action écrasera tous les fichiers du même nom dans les dossiers du modèle cible. Continuer ?',
    'JS_CONFIRM_REMOVAL_MESSAGE' => 'Cette action supprimera tous les fichiers de remplacement du modèle sélectionné. Continuer ?',

    // -----
    // These constants are used to log (both on display and to file) the files copied by the plugin.
    //
    'LOG_FOLDER_FILES_FOUND' => 'Copie de %1$u fichier(s) du dossier %2$s ...',     //-%1$u (number of files), %2$s (folder name),
    'LOG_FOLDER_CREATED' => '&nbsp;&nbsp;&nbsp;Création du répertoire %s',           //-%s (folder name)
    'LOG_COPYING_FILE' => '&nbsp;&nbsp;&nbsp;Copie de %1$s vers %2$s',              //-%1$s (source file) => %2$s (target file)

    // -----
    // These constants are used to log (both on display and to file) the files removed by the plugin
    //
    'LOG_FOLDER_REMOVE_FILES_FOUND' => 'Suppression de %1$u fichier(s) du dossier %2$s ...', //-%1$u (number of files), %2$s (folder name)
    'LOG_FOLDER_REMOVED' => '&nbsp;&nbsp;&nbsp;Suppression du répertoire %s',               //-%s (folder name)
    'LOG_REMOVING_FILE' => '&nbsp;&nbsp;&nbsp;Suppression de %s',                          //-%s (file name)
];

return $define;
