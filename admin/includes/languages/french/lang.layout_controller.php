<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Modification des cases latérales pour le modèle : ',
    'TEXT_CURRENTLY_VIEWING' => 'Actuellement consulté : ',
    'TEXT_THIS_IS_PRIMARY_TEMPLATE' => ' (Principal)',
    'TABLE_HEADING_BOXES_PATH' => 'Chemin des cases : ',
    'TEXT_WARNING_NEW_BOXES_FOUND' => 'AVERTISSEMENT : Nouvelles cases trouvées : ',
    'TEXT_ORIGINAL_DEFAULTS' => '[Paramètres par défaut d\'origine/principaux de Zen-Cart',
    'TEXT_CAUTION_EDITING_NOT_LIVE_TEMPLATE' => 'CAUTION: Vous modifiez les paramètres d\'un modèle qui n\'est pas le modèle principal utilisé par les clients.',

    'TEXT_HEADING_MISSING_BOXES' => 'Cases manquantes',
    'BUTTON_REMOVE_SELECTED' => 'Supprimer la sélection',
    'TEXT_NO_BOXES_TO_REMOVE' => 'Aucune case latérale manquante n\'a été sélectionnée pour être supprimée.',
    'BUTTON_REMOVE_BOXES' => 'Supprimer les cases',
    'BUTTON_CLOSE' => 'Fermer',

    'TEXT_INFO_HEADING_DELETE_BOX' => 'Supprimer les cases latérales manquantes',
    'TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE' => 'REMARQUE : Cela ne supprime pas les fichiers et vous pouvez rajouter les cases à tout moment en les ajoutant au bon répertoire.<br><br><strong>Cases à supprimer : </strong>',
    'SUCCESS_BOX_DELETED' => 'Ces cases ont été supprimées : ',

    'TEXT_RESET_SETTINGS' => 'Réinitialiser les paramètres',
    'TEXT_INFO_RESET_TEMPLATE_SORT_ORDER' => 'Réinitialiser l\'état de la case/paramètres de tri : ',
    'TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE' => 'Cela ne supprime aucune case. Cela réinitialisera uniquement le statut/l\'ordre de tri des cases correspondantes aux cases de l\'autre modèle.',
    'TEXT_SETTINGS_COPY_FROM' => 'Copier l\'état/les paramètres de tri DE : ',
    'TEXT_SETTINGS_COPY_TO' => ' À : ',
    'SUCCESS_BOX_RESET' => 'Les paramètres de [%1$s] ont été réinitialisés aux paramètres actuels de [%2$s].',
    'TEXT_ERROR_INVALID_RESET_SUBMISSION' => 'ERREUR : Choix de réinitialisation non valide',

    'TEXT_INSTRUCTIONS' => 'Si votre appareil est équipé d\'une souris, vous pouvez faire glisser et déposer une case pour modifier son emplacement de colonne ou son ordre de tri dans ses emplacements de colonne actifs. Sinon, utilisez les icônes de flèche vers le haut et vers le bas pour modifier l\'emplacement ou l\'ordre de tri d\'une case. Utilisez une icône <i class="fa-solid fa-xmark"></i> pour déplacer rapidement une case active vers son groupe inactif.',
    'BUTTON_SHOW_NOTES' => 'Afficher les remarques :',
    'BUTTON_HIDE_NOTES' => 'Masquer les remarques :',
    'TEXT_NOTES' => 'Remarques :',
    'TEXT_NOTE1_OPT' => 'L\'affichage de ces (%1$s) cases sur la vitrine dépend fortement du modèle %2$s. Vérifiez auprès de l\'auteur du modèle pour plus de détails !',
    'TEXT_NOTE1' => 'Une fois que vous avez déplacé une case, un bouton s\'affiche qui, une fois cliqué, enregistre toutes les modifications que vous avez apportées.',
    'TEXT_NOTE2' => 'Les ordres de tri des cases sont calculés lorsque vous enregistrez vos choix, pas besoin de les fournir.',
    'TEXT_NOTE3' => 'Toutes les cases inactives sont enregistrées avec le même ordre de tri, afin qu\'elles s\'affichent par ordre alphabétique.',
    'TEXT_NOTE4' => 'Déplacer une case dans un groupe inactif n’est pas considéré comme un changement !',
    'TEXT_NOTE5' => 'Si vous avez apporté des modifications et que vous quittez cet outil, votre navigateur vous informera que vous avez des modifications non enregistrées.',

    'TEXT_COLUMN_DISABLED' => 'Colonne désactivée globalement',
    'TEXT_DISABLED_MESSAGE' => 'Les modifications apportées à cette colonne seront enregistrées, mais ne seront pas affichées sur la vitrine. Voir le paramètre associé dans Configuration :: Paramètres de mise en page.',
    'TEXT_HEADING_MAIN_PAGE_BOXES' => 'Cases de la page principale',
    'TEXT_HEADING_ACTIVE_LEFT' => 'Cases actives de la colonne de gauche',
    'TEXT_HEADING_ACTIVE_RIGHT' => 'Cases actives de la colonne de droite',
    'TEXT_HEADING_INACTIVE_LEFT_RIGHT' => 'Cases inactives de la page principale',
    'TEXT_HEADING_HEADER_BOXES' => 'Cases d\'en-tête',
    'TEXT_HEADING_FOOTER_BOXES' => 'Cases de pied de page',
    'TEXT_HEADING_MOBILE_BOXES' => 'Cases de menu mobiles',
    'TEXT_HEADING_ACTIVE_BOXES' => 'Cases actives',
    'TEXT_HEADING_INACTIVE_BOXES' => 'Cases inactives',
    'BUTTON_SHOW' => 'Afficher',
    'BUTTON_HIDE' => 'Cacher',

    'TEXT_MOVE_BOX_UP' => 'Déplacez %1$s vers le haut dans les cases %2$s.',
    'TEXT_MOVE_BOX_DOWN' => 'Déplacez %1$s vers le bas dans les cases %2$s.',
    'TEXT_MOVE_BOX_UNUSED' => 'Déplacez %1$s vers les cases %2$s inactives.',
        'TEXT_MOVE_MAIN_PAGE_COLUMN' => 'page principale',  //- Used as %2$s value in above three phrases
        'TEXT_MOVE_HEADER_COLUMN' => 'en-tête',        //- Used as %2$s value in the above three phrases
        'TEXT_MOVE_FOOTER_COLUMN' => 'pied de page',        //- Used as %2$s value in the above three phrases
        'TEXT_MOVE_MOBILE_COLUMN' => 'menu mobiles',   //- Used as %2$s value in the above three phrases
    'BUTTON_SAVE_CHANGES' => 'Enregistrer les modifications',
    'SUCCESS_BOX_UPDATED' => 'Mise à jour réussie des paramètres du bloc : ',
];

return $define;
