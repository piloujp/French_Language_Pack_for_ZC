<?php
// -----
// Part of the DataBase Import/Export (aka DbIo) plugin, created by Cindy Merkin (cindy@vinosdefrutastropicales.com)
//
// Last updated: DbIo v2.0.2
//
// Copyright (c) 2017-2025, Vinos de Frutas Tropicales.
//
define('HEADING_TITLE', 'Configurer les modèles DbIo%s');

define('TEXT_SCOPE_PUBLIC', 'Public');
define('TEXT_SCOPE_PRIVATE', 'Privé');
define('TEXT_SYSTEM_UPDATE', 'Système');
define('TEXT_UNKNOWN_ADMIN', 'Inconnu');

define('HEADING_TITLE_EDIT', 'Vous modifiez un modèle pour le gestionnaire <em>%s</em>.');
define('HEADING_TITLE_NEW', 'Vous créez un nouveau modèle pour le gestionnaire <em>%s</em>.');
define('HEADING_TITLE_COPY', 'Vous copiez un modèle défini pour le gestionnaire <em>%s</em>.');

define('HEADING_SCOPE', 'Portée');
define('HEADING_TEMPLATE_NAME', 'Nom du modèle');
define('HEADING_DESCRIPTION', 'Description');
define('HEADING_UPDATED_BY', 'Dernière mise à jour par');
define('HEADING_LAST_UPDATE', 'Date de dernière mise à jour');
define('HEADING_ACTION', 'Action');

define('COLUMN_HEADING_SCOPE', 'Portée du modèle :');
define('INSTRUCTIONS_SCOPE', 'Un modèle DbIo peut être soit <em>privé</em> pour votre usage exclusif, soit <em>public</em> et disponible pour tous les utilisateurs administrateurs autorisés.');
define('COLUMN_HEADING_NAME', 'Nom du modèle :');
define('INSTRUCTIONS_NAME', 'Lorsque vous effectuez une exportation basée sur un modèle, le nom du modèle fait partie du nom de fichier de l\'exportation. Utilisez uniquement des caractères alphanumériques et des traits de soulignement (_) pour le nom. Le nom que vous choisissez doit être unique dans la portée sélectionnée de vos modèles disponibles.');
define('COLUMN_HEADING_DESCRIPTION', 'Description du modèle :');
define('INSTRUCTIONS_DESCRIPTION', 'Utilisez la description du modèle (le HTML est interdit !) pour vous rappeler son objectif. Vous pouvez personnaliser la description pour chaque langue prise en charge par votre boutique.');
define('COLUMN_HEADING_CHOOSE_FIELDS', 'Choisissez les champs du modèle :');
define('COLUMN_HEADING_COPY_FIELDS', 'Champs du modèle :');
define('INSTRUCTIONS_CHOOSE', 'Vous pouvez déplacer les champs disponibles (à gauche) vers ceux sélectionnés (à droite) pour ce modèle. Vous pouvez sélectionner plusieurs champs simultanément en maintenant la touche « Ctrl » enfoncée tout en cliquant sur d\'autres champs. Une fois les champs sélectionnés pour ce modèle, utilisez les boutons pour les déplacer vers le haut ou vers le bas dans votre liste personnalisée. Lorsque le modèle est utilisé pour une opération d\'exportation, le fichier .CSV obtenu contient les colonnes dans l\'ordre spécifié.');
define('INSTRUCTIONS_CHOOSE_COPY', 'Lorsque vous copiez un modèle, celui-ci contient initialement les champs précédemment configurés. Une fois le modèle copié, vous pouvez modifier la copie pour ajuster les champs. Si vous ne pouvez pas afficher tous les champs, utilisez la souris et faites glisser la liste déroulante vers le bas jusqu\'à ce qu\'ils soient tous visibles.');

define('NO_TEMPLATES_EXIST', 'Aucun modèle n\'est actuellement défini. Utilisez le bouton « Nouveau modèle » pour en ajouter un !');
define('TEXT_ENTER_REPORT_DESCRIPTION_HERE', 'Saisissez la description du rapport ici.');

define('BUTTON_EDIT', 'Modifier');
define('BUTTON_EDIT_TITLE', 'Cliquez ici pour modifier ce modèle');
define('BUTTON_COPY', 'Copier');
define('BUTTON_COPY_TITLE', 'Cliquez ici pour copier ce modèle');
define('BUTTON_REMOVE', 'Supprimer');
define('BUTTON_REMOVE_TITLE', 'Cliquez ici pour supprimer définitivement ce modèle');
define('BUTTON_NEW', 'Nouveau modèle');
define('BUTTON_NEW_TITLE', 'Cliquez ici pour créer un nouveau modèle DbIo pour le gestionnaire actuel');

define('BUTTON_INSERT', 'Insérer');
define('BUTTON_INSERT_TITLE', 'Cliquez ici pour créer un nouveau modèle DbIo');
define('BUTTON_UPDATE', 'Mettre à jour');
define('BUTTON_UPDATE_TITLE', 'Cliquez ici pour mettre à jour ce modèle DbIo');
define('BUTTON_RETURN', 'Gestionnaire DbIo');
define('BUTTON_RETURN_TITLE', 'Cliquez ici pour revenir à la page principale de DbIo Manager');
define('BUTTON_CANCEL', 'Annuler');
define('BUTTON_CANCEL_TITLE', 'Cliquez ici pour annuler l\'action en cours');

define('INSTRUCTIONS_MAIN',
    'Utilisez cette page pour personnaliser un modèle d\'exportation pour le gestionnaire <em>%1$s</em> de DbIo. Vous pouvez choisir un sous-ensemble de champs pris en charge par ce gestionnaire et personnaliser l\'ordre d\'exportation de ces champs vers les colonnes du fichier .csv associé. Pour plus d\'informations, consultez cet <a href="https://github.com/lat9/dbio/wiki/Manage-DbIo-Templates" target="_blank" rel="noreferrer noopener">article wiki</a>.' .
    '<br><br>' .
    'La portée d\'un modèle peut être soit <b>' . TEXT_SCOPE_PUBLIC . '</b>, disponible pour tous les utilisateurs administrateurs, soit <b>' . TEXT_SCOPE_PRIVATE . '</b>, disponible uniquement pour votre usage. Son nom sera inclus dans le nom du fichier CSV exporté si le modèle est utilisé pour personnaliser une action d\'exportation, par exemple <code>dbio.%1$s.template_name.datetime_string</code>. La description que vous fournissez s\'affiche sur l\'écran principal du <strong>Gestionnaire d\'E/S de base de données</strong> lorsque le modèle est sélectionné, ce qui vous permet de confirmer ses fonctionnalités.'
);

define('ERROR_UNKNOWN_HANDLER', 'Un nom de gestionnaire inconnu a été spécifié, veuillez réessayer.');
define('ERROR_TEMPLATE_NAME_EXISTS', 'Un modèle « %3$s » nommé « %2$s » existe déjà pour le gestionnaire <em>%1$s</em>. Veuillez choisir un autre nom.');
define('ERROR_TEMPLATE_NAME_INVALID_CHARS', 'Le nom du modèle saisi contient des caractères non valides. Veuillez le ressaisir en utilisant <b>uniquement</b> des caractères alphanumériques et des traits de soulignement.');
define('ERROR_TEMPLATE_NAME_TOO_LONG', 'Le nom du modèle saisi comporte trop de caractères. Veuillez le ressaisir en utilisant %u ou moins de caractères.');
define('ERROR_TEMPLATE_NO_FIELDS', 'Veuillez choisir au moins un champ personnalisé pour ce modèle DbIo.');
define('SUCCESS_TEMPLATE_ADDED', 'Le modèle DbIo nommé <em>%s</em> a été ajouté avec succès.');
define('SUCCESS_TEMPLATE_UPDATED', 'Le modèle DbIo nommé <em>%s</em> a été mis à jour avec succès.');
define('SUCCESS_TEMPLATE_REMOVED', 'Le modèle DbIo nommé <em>%s</em> a été supprimé avec succès.');

define('JS_MESSAGE_CONFIRM_REMOVE', 'Êtes-vous sûr de vouloir supprimer définitivement ce modèle ?');
define('JS_MESSAGE_NAME_CANT_BE_EMPTY', 'Le champ Nom du modèle ne peut pas être vide.');
define('JS_MESSAGE_NAME_TOO_LONG', 'Le champ Nom du modèle ne doit pas comporter plus de %u caractères.');
define('JS_MESSAGE_AT_LEAST_ONE_FIELD', 'Une personnalisation de modèle doit inclure au moins un champ.');
define('JS_MESSAGE_ERRORS_EXIST', 'Vous devez apporter quelques modifications à la saisie du formulaire :');
define('JS_MESSAGE_TRY_AGAIN', 'Veuillez effectuer ces corrections et réessayer.');
