<?php
/**
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2026 Jul 31  Plugin version 4.0 $
 */

$define = [
    'HEADING_TITLE' => 'Gestionnaire des archives d’e-mails',

    'HEADING_SEARCH_INSTRUCT' =>  'Vous pouvez effectuer une recherche en utilisant n’importe quelle combinaison des critères suivants...',

    'HEADING_MODULE_SELECT' =>  'Filtrer par module :',
    'HEADING_SEARCH_TEXT' =>  'Texte de recherche :',
    'HEADING_SEARCH_TEXT_FILTER' =>  'Filtre de recherche actuel : ',
    'HEADING_START_DATE' =>  'Date de début :',
    'HEADING_END_DATE' =>  'Date de fin :',
    'HEADING_DATE_RANGE' =>  'Plage de dates :',
    'HEADING_PRINT_FORMAT' =>  'Afficher les résultats dans un format imprimable ?',
    'HEADING_ONLY_ERRORS' => 'Seulement ceux contenant des erreurs',
    'HEADING_TRIM_INSTRUCT' =>  'Supprimer les e-mails antérieurs à...',

    'TOOLTIP_SEARCH_TEXT' => 'Effectue des recherches dans : le nom et l’adresse du destinataire, l’objet de l’e-mail, le contenu HTML et texte de l’e-mail, ainsi que tout message d’erreur.',
    'TOOLTIP_ONLY_ERRORS' => 'Afficher uniquement les enregistrements pour lesquels une erreur s’est produite lors de la tentative d’envoi d’e-mail.',

    'HEADING_TEXT_INSTEAD' =>  'Affichage en mode texte par mesure de sécurité ; le code HTML peut être malveillant.',

    'TABLE_HEADING_EMAIL_DATE' =>  'Date d’envoi',
    'TABLE_HEADING_CUSTOMERS_NAME' =>  'Nom du client',
    'TABLE_HEADING_CUSTOMERS_EMAIL' =>  'Adresse email',
    'TABLE_HEADING_EMAIL_FORMAT' =>  'Format',
    'TABLE_HEADING_EMAIL_SUBJECT' =>  'Objet',
    'TABLE_HEADING_EMAIL_ERRORINFO' => 'Informations sur l’erreur',
    'TABLE_FORMAT_TEXT' =>  'TEXT',
    'TABLE_FORMAT_HTML' =>  'HTML',

    'TEXT_TRIM_ARCHIVE' =>  'Réduire les archives des e-mails...',
    'TEXT_ARCHIVE_ID' =>  'Archive #%d',
    'TEXT_ALL_MODULES' =>  'Tous les modules',
    'TEXT_DISPLAY_NUMBER_OF_EMAILS' =>  'Affichage de <b>%1$d</b> à <b>%2$d</b> (sur <b>%3$d</b> e-mails)',
    'TEXT_EMAIL_MODULE' =>  'Module : ',
    'TEXT_EMAIL_TO' =>  'À : ',
    'TEXT_EMAIL_FROM' =>  'De : ',
    'TEXT_EMAIL_DATE_SENT' =>  'Envoyé : ',
    'TEXT_EMAIL_SUBJECT' =>  'Objet : ',
    'TEXT_EMAIL_EXCERPT' =>  'Extrait du message :',
    'TEXT_EMAIL_ERRORINFO' => 'Informations sur l’erreur :',
    'TEXT_EMAIL_NUMBER' =>  'E-mail n°',

    'TEXT_NO_ARCHIVE_RECORDS_FOUND' =>  'Aucun enregistrement correspondant n’a été trouvé.',

    'RADIO_1_MONTH' =>  ' 1 mois',
    'RADIO_6_MONTHS' =>  ' 6 mois',
    'RADIO_1_YEAR' =>  ' 12 mois',

    'TEXT_DROPDOWN_DATE_SELECT_ALL' =>  'Toute la période',
    'TEXT_DROPDOWN_DATE_SELECT_7_DAYS' =>  '7 derniers jours',
    'TEXT_DROPDOWN_DATE_SELECT_30_DAYS' =>  '30 derniers jours',
    'TEXT_DROPDOWN_DATE_SELECT_3_MONTHS' =>  '3 derniers mois',
    'TEXT_DROPDOWN_DATE_SELECT_LAST_YEAR' =>  'L’année dernière',

    'TEXT_RESEND_PREFIX' => 'Renvoi : ',
    'TRIM_CONFIRM_WARNING' =>  'Attention : cela supprimera définitivement les e-mails de l’archive.<br>Êtes-vous sûr ?',
    'POPUP_CONFIRM_RESEND' =>  'Êtes-vous sûr de vouloir renvoyer ce message ?',
    'POPUP_CONFIRM_DELETE' =>  'Êtes-vous sûr de vouloir supprimer ce message ?',
    'SUCCESS_TRIM_ARCHIVE' =>  'Succès : les e-mails antérieurs à %s ont été supprimés.',
    'SUCCESS_EMAIL_RESENT' =>  'Succès : L’e-mail n° %1$s a été renvoyé à %2$s.',

    'IMAGE_ICON_HTML' =>  ' Afficher le message HTML ',
    'IMAGE_ICON_TEXT' =>  ' Voir le message texte ',
    'IMAGE_ICON_RESEND' =>  ' Renvoyer le message ',
    'IMAGE_ICON_EMAIL' =>  ' Destinataire de l’e-mail ',
    'IMAGE_ICON_DELETE' =>  ' Supprimer le message ',

    'SEND_NEW_EMAIL' =>  'Envoyer un nouvel e-mail',
    'BUTTON_SEARCH_ARCHIVE' =>  'Rechercher dans les archives',
    'BUTTON_TRIM_CONFIRM' =>  'Supprimer l’e-mail',
    'BUTTON_CANCEL' =>  'Annuler',
    'BUTTON_RESET_SEARCH_ARCHIVE' =>  'Réinitialiser',
];

return $define;
