<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'EZ-Pages',
    'TABLE_HEADING_PAGES' => 'Intitulé de page',
    'TABLE_HEADING_VSORT_ORDER' => 'Classement sidebox',
    'TABLE_HEADING_HSORT_ORDER' => 'Classement de pied de page',
    'TEXT_PAGES_TITLE' => 'Intitulé de page :',
    'TEXT_PAGES_HTML_TEXT' => 'Contenu HTML :',
    'TEXT_PAGES_STATUS_CHANGE' => 'Changement de statut : %s',
    'TEXT_INFO_DELETE_INTRO' => 'Êtes-vous sûr(e) de vouloir supprimer cette page ?',
    'SUCCESS_PAGE_INSERTED' => 'SUCCÈS : La page a été insérée.',
    'SUCCESS_PAGE_UPDATED' => 'SUCCÈS : La page a été mise à jour.',
    'SUCCESS_PAGE_REMOVED' => 'SUCCÈS : La page a été supprimée.',
    'SUCCESS_PAGE_STATUS_UPDATED' => 'SUCCÈS : Le statut de la page a été mis à jour.',
    'ERROR_PAGE_TITLE_REQUIRED' => 'ERREUR : Intitulé de page requis.',
    'ERROR_UNKNOWN_STATUS_FLAG' => 'ERREUR : Drapeau statut inconnu.',
    'ERROR_MULTIPLE_HTML_URL' => 'ERREUR : Vous avez défini plusieurs règlages alors qu\'un seul peut être défini par lien ...<br>Définissez uniquement au choix : Contenu HTML -ou- URL lien interne -ou- URL lien externe',
    'TABLE_HEADING_STATUS_HEADER' => 'En-tête :',
    'TABLE_HEADING_STATUS_SIDEBOX' => 'Sidebox :',
    'TABLE_HEADING_STATUS_FOOTER' => 'Pied :',
    'TABLE_HEADING_STATUS_TOC' => 'TOC :',
    'TABLE_HEADING_CHAPTER' => 'Chapitre :',
    'TABLE_HEADING_VISIBLE' => 'Visible :',
    'TABLE_HEADING_PAGE_OPEN_NEW_WINDOW' => 'Ouvrir dans<br />nouvelle fenêtre :',
    'TABLE_HEADING_PAGE_IS_SSL' => 'Page en SSL :',
    'TABLE_HEADING_PAGE_IS_VISIBLE' => 'La page est visible :',
    'TABLE_HEADING_PAGE_IS_VISIBLE_EXPLANATION' => 'Page affichée même si elle ne figure pas dans l\'en-tête, le pied de page ou la zone latérale<br>
(Si tous les paramètres pour Visible et En-tête et Pied de page et Boîte latérale sont tous désactivés, les visiteurs qui tentent de voir la page recevront une réponse Page non trouvée.)',
    'TEXT_DISPLAY_NUMBER_OF_PAGES' => 'Affiche <b>%1$d</b> à <b>%2$d</b> (de <b>%3$d</b> pages)',
    'IMAGE_NEW_PAGE' => 'Nouvelle page',
    'TEXT_INFO_PAGES_ID' => 'ID : ',
    'TEXT_INFO_PAGES_ID_SELECT' => '- Choisissez une page ...',
    'TEXT_HEADER_SORT_ORDER' => 'Classement :',
    'TEXT_SIDEBOX_SORT_ORDER' => 'Classement :',
    'TEXT_FOOTER_SORT_ORDER' => 'Classement :',
    'TEXT_TOC_SORT_ORDER' => 'Classement :',
    'TEXT_CHAPTER' => 'Chapitre précédent/suivant :',
    'TABLE_HEADING_CHAPTER_PREV_NEXT' => 'Chapitre :&nbsp;<br>',
    'TEXT_HEADER_SORT_ORDER_EXPLAIN' => 'Le classement d\'en-tête indique dans quelle séquence les ez-pages apparaîtront en une unique rangée dans l\'en-tête de votre boutique.<br>Pour qu\'une ez-page apparaisse dans l\'entête, le classement doit être plus grand que zéro et le bouton d\'activation &quot;vert&quot;.<br>',
    'TEXT_SIDEBOX_ORDER_EXPLAIN' => 'Le classement de sidebox indique dans quelle séquence les ez-pages apparaîtront en liste verticale dans la sidebox \'Liens importants\' de votre boutique.<br>Pour qu\'une ez-page apparaisse dans cette sidebox, le classement doit être plus grand que zéro et le bouton d\'activation &quot;vert&quot;.<br>',
    'TEXT_FOOTER_ORDER_EXPLAIN' => 'Le classement de pied indique dans quelle séquence les ez-pages apparaîtront en une unique rangée dans le pied de page de votre boutique.<br>Pour qu\'une ez-page apparaisse dans le pied de page, le classement doit être plus grand que zéro et le bouton d\'activation &quot;vert&quot;.<br>',
    'TEXT_TOC_SORT_ORDER_EXPLAIN' => 'Le classement de TOC (Table of Contents) indique dans quelle séquence les ez-pages apparaîtront en liste verticale dans la TOC du chapitre,<br>ou par les boutons Précédent/Suivant.<br>Pour qu\'une ez-page apparaisse dans la TOC, le classement doit être plus grand que zéro et le bouton d\'activation &quot;vert&quot;.<br>',
    'TEXT_CHAPTER_EXPLAIN' => 'Les chapitres vous permettent de grouper ensemble des ez-pages en leur donnant un même numéro de chapitre.<br>Des liens de navigation (précédente/suivante) apparaîtront sur les ez-pages d\'un même groupe et une TOC générée automatiquement pourra être affichée.<br>Les liens dans la TOC consistent des ez-pages ayant ce même numéro de chapitre, et affichées selon leur classement TOC.<br>',
    'TEXT_ALT_URL' => 'Lien interne :',
    'TEXT_ALT_URL_EXPLAIN' => 'Si spécifié, le contenu de la page sera ignoré et cet URL INTERNE sera utilisé à la place pour faire le lien.<br>Exemple vers Reviews : index.php?main_page=reviews<br>Exemple vers Mon compte : index.php?main_page=account et marqué en SSL',
    'TEXT_ALT_URL_EXTERNAL' => 'Lien externe :',
    'TEXT_ALT_URL_EXTERNAL_EXPLAIN' => 'Si spécifié, le contenu de la page sera ignoré et cet URL EXTERNE sera utilisé à la place pour faire le lien.<br>Exemple de lien externe : http://www.zen-cart.com',
    'TEXT_SORT_CHAPTER_TOC_TITLE_INFO' => 'Ordre d\'affichage ',
    'TEXT_SORT_CHAPTER_TOC_TITLE' => 'Chapitre/TOC',
    'TEXT_SORT_HEADER_TITLE' => 'En-tête',
    'TEXT_SORT_SIDEBOX_TITLE' => 'Sidebox',
    'TEXT_SORT_FOOTER_TITLE' => 'Pied de page',
    'TEXT_SORT_PAGE_TITLE' => 'Intitulé de page',
    'TEXT_SORT_PAGE_ID_TITLE' => 'Page ID, Intitulé',
    'TEXT_PAGE_TITLE' => 'Intitulé :',
    'TEXT_WARNING_MULTIPLE_SETTINGS' => '<strong>ATTENTION : Définition de liens multiples</strong>',
];

return $define;
