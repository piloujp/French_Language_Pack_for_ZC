<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2024 Oct 18 in v2.1.0-beta1 $
*/

$define = [
    'CFG_GRP_TITLE_ZCA_BOOTSTRAP_COLORS' => 'Couleurs de bootstrap ZCA',
    'CFG_GRP_TITLE_BOOTSTRAP_TEMPLATE_SETTINGS' => 'Paramètres du modèle Bootstrap',
// update to ZC configuration descriptions
    'CFGDESC_BOX_WIDTH_LEFT' => 'Largeur des encadrés de la colonne de gauche<br>px peut être inclus<br>Par défaut = 150 px<br><b>Cette configuration n\'a aucun effet avec les composants réactifs ZCA ou les thèmes Bootstrap ZCA</b>',
    'CFGDESC_BOX_WIDTH_RIGHT' => 'Largeur des encadrés de la colonne de droite<br>px peut être inclus<br>Par défaut = 150 px<br><b>Cette configuration n\'a aucun effet avec les composants réactifs ZCA ou les thèmes ZCA Bootstrap</b>',
    'CFGDESC_COLUMN_WIDTH_LEFT' => 'Largeur de la colonne de gauche<br>px peut être inclus<br>Par défaut = 150 px<br><br><b>Cette configuration n\'a aucun effet avec les composants réactifs ZCA ou les thèmes Bootstrap ZCA</b>',
    'CFGDESC_COLUMN_WIDTH_RIGHT' => 'Largeur de la colonne de droite<br>px peut être inclus<br>Par défaut = 150 px<br><b>Cette configuration n\'a aucun effet avec les composants réactifs ZCA ou les thèmes ZCA Bootstrap</b>',
    'CFGDESC_PRODUCT_LISTING_COLUMNS_PER_ROW' => 'Sélectionnez le nombre de colonnes de produits à afficher par ligne dans la liste des produits.<br>Recommandé : 3<br>1 = mode [lignes].<br><br>Pour le modèle <code>bootstrap</code>, utilisez 0 (colonnes fluides) ou 1 (lignes).<br>',
// Boostrap configuration settings
    'CFGTITLE_BS4_AJAX_SEARCH_ENABLE' => 'Activer la recherche AJAX ?',
    'CFGDESC_BS4_AJAX_SEARCH_ENABLE' => 'Activer la fonction de recherche AJAX du modèle ?',
    'CFGTITLE_BS4_AJAX_SEARCH_RESULTS_PER_PAGE' => 'Recherche AJAX : résultats maximum',
    'CFGDESC_BS4_AJAX_SEARCH_RESULTS_PER_PAGE' => 'Identifiez le nombre de produits à afficher dans la fenêtre modale de recherche AJAX. Par défaut : <b>8</b>.',
    'CFGTITLE_BS4_AJAX_SEARCH_IMAGE_WIDTH' => 'Recherche AJAX : Largeur de l\'image',
    'CFGDESC_BS4_AJAX_SEARCH_IMAGE_WIDTH' => 'Identifiez la largeur de l\'image d\'un produit affichée dans la fenêtre de recherche AJAX. Par défaut : <b>50</b>.',
    'CFGTITLE_BS4_AJAX_SEARCH_IMAGE_HEIGHT' => 'Recherche AJAX : Hauteur de l\'image',
    'CFGDESC_BS4_AJAX_SEARCH_IMAGE_HEIGHT' => 'Identifiez la hauteur de l\'image d\'un produit affichée dans la fenêtre de recherche AJAX. Par défaut : <b>50</b>.',
    'CFGTITLE_BS4_AJAX_SEARCH_USE_MINIMIZED_SCRIPT' => 'Recherche AJAX : Utiliser un script minifié ?',
    'CFGDESC_BS4_AJAX_SEARCH_USE_MINIMIZED_SCRIPT' => 'Utiliser la version minimisée du script de recherche AJAX ?',
    'CFGTITLE_BS4_AJAX_SEARCH_INC_DESC' => 'Recherche AJAX : inclure des descriptions ?',
    'CFGDESC_BS4_AJAX_SEARCH_INC_DESC' => 'Inclure les descriptions de produits lors de l\'utilisation de la recherche AJAX ? Par défaut : <samp>false</samp>.',
    'CFGTITLE_BS4_FEATURED_CENTERBOX_CAROUSEL' => 'Boîte centrale en vedette comme carrousel ?',
    'CFGDESC_BS4_FEATURED_CENTERBOX_CAROUSEL' => 'Si la zone centrale <em>Produits en vedette</em> doit être affichée sous forme de carrousel, saisissez le nombre de produits à afficher dans les fenêtres d\'affichage grandes et moyennes sous forme de liste séparée par des virgules avec <code>;fade</code> à la fin pour <em>faire disparaître</em> le carrousel au lieu de le faire glisser, par exemple <code>3, 2</code> ou <code>3, 2;fade</code>. Laissez ce paramètre vide (par défaut) pour afficher la zone centrale en fonction de <code>Index des produits :: Colonnes par ligne des produits phares</code>.<br>',
    'CFGTITLE_BS4_FLOAT_ADD_SELECTED' => 'Faire flotter le bouton <em>Ajouter la sélection au panier</em> ?',
    'CFGDESC_BS4_FLOAT_ADD_SELECTED' => 'Le positionnement de ce bouton doit-il remplacer le paramètre dans <code>Liste de produits :: Afficher le bouton Ajouter au panier</code>, afin que le bouton soit toujours visible ?<br><br>Choisissez <em>Toujours</em> (valeur par défaut), <em>Petits appareils uniquement</em> pour remplacer uniquement sur les petits appareils ou <em>Jamais</em>.',
    'CFGTITLE_BS4_FOOTER_CONTAINER' => 'Type de conteneur du pied de page',
    'CFGDESC_BS4_FOOTER_CONTAINER' => 'Choisissez le type de <samp>conteneur</samp> utilisé pour afficher le pied de page du site.',
    'CFGTITLE_BS4_HEADER_CONTAINER' => 'Type de conteneur d\'en-tête',
    'CFGDESC_BS4_HEADER_CONTAINER' => 'Choisissez le type de <samp>conteneur</samp> utilisé pour afficher l\'en-tête du site. Reportez-vous à <a href="https://www.w3schools.com/bootstrap4/bootstrap_containers.asp" target="_blank" rel="noreferrer noopener">cet</a> article W<sup>3</sup>Schools sur les différences entre les deux types.',
    'CFGTITLE_BS4_MAIN_CONTAINER' => 'Type de conteneur de contenu principal',
    'CFGDESC_BS4_MAIN_CONTAINER' => 'Choisissez le type de <samp>conteneur</samp> utilisé pour afficher le contenu principal du site, c\'est-à-dire les boîtes latérales et la page principale.',
    'CFGTITLE_BS4_NEW_CENTERBOX_CAROUSEL' => 'Nouvelle boîte centrale comme carrousel ?',
    'CFGDESC_BS4_NEW_CENTERBOX_CAROUSEL' => 'Si la zone centrale <em>Nouveaux produits</em> doit être affichée sous forme de carrousel, saisissez le nombre de produits à afficher dans les fenêtres d\'affichage grandes et moyennes sous forme de liste séparée par des virgules avec <code>;fade</code> à la fin pour <em>faire disparaître</em> le carrousel au lieu de le faire glisser, par exemple <code>3, 2</code> ou <code>3, 2;fade</code>. Laissez ce paramètre vide (par défaut) pour afficher la zone centrale en fonction de <code>Index des produits :: Colonnes par ligne des nouveaux produits</code>.<br>',
    'CFGTITLE_BS4_PRICING_LOCATION' => 'Informations sur le produit - Emplacement des prix',
    'CFGDESC_BS4_PRICING_LOCATION' => 'Lorsqu\'un produit possède des attributs, où le prix du produit doit-il être affiché par rapport à l\'affichage des attributs ? Valeur par défaut : <samp>Les deux</samp>.',
    'CFGTITLE_BS4_SIDEBOXES_DISPLAY_CAROUSEL' => 'Boîtes latérales comme carrousels',
    'CFGDESC_BS4_SIDEBOXES_DISPLAY_CAROUSEL' => 'Choisissez les encadrés latéraux à afficher à l\'aide d\'un carrousel, en utilisant une liste séparée par des virgules. Actuellement pris en charge : <samp>best_sellers</samp>, <samp>featured</samp>, <samp>reviews</samp>, <samp>specials</samp> et <samp>whats_new</samp>.<br>',
    'CFGTITLE_BS4_SIDEBOXES_FADE_CAROUSEL' => 'Carrousels d\'encadrés latéraux qui s\'estompent',
    'CFGDESC_BS4_SIDEBOXES_FADE_CAROUSEL' => 'Parmi les encadrés latéraux choisis ci-dessus, lesquels doivent <em>s\'estomper</em> vers le suivant au lieu de <em>glisser</em> ? Utilisez une liste séparée par des virgules.<br>',
    'CFGTITLE_BS4_SLIDER_BANNER_GROUP' => 'Images défilantes de la page d\'accueil : Groupe « Gestionnaire de bannières »',
    'CFGDESC_BS4_SLIDER_BANNER_GROUP' => 'Identifie le groupe <em>Gestionnaire de bannières</em> contenant la bande d\'images défilantes de la page d\'accueil. Reportez-vous à <a href="https://github.com/lat9/ZCA-Bootstrap-Template/wiki/Using-the-Home%E2%80%90Page-Slider-Feature" target="_blank" rel="noreferrer noopener">cet</a> article du wiki GitHub pour obtenir des informations supplémentaires sur les paramètres de la bande d\images défilantes de la page d\'accueil.',
    'CFGTITLE_BS4_SLIDER_WIDTH' => 'Images défilantes de la page d\'accueil : Largeur d\'images',
    'CFGDESC_BS4_SLIDER_WIDTH' => 'Quelle largeur d’image doit être appliquée à la bande d\images défilantes de la page d\'accueil ?',
    'CFGTITLE_BS4_SLIDER_HEIGHT' => 'Images défilantes de la page d\'accueil : Hauteur d\'images',
    'CFGDESC_BS4_SLIDER_HEIGHT' => 'Quelle hauteur d’image doit être appliquée à la bande d\images défilantes de la page d\'accueil ?',
    'CFGTITLE_BS4_SPECIALS_CENTERBOX_CAROUSEL' => 'Promotions - Boîte centrale comme carrousel ?',
    'CFGDESC_BS4_SPECIALS_CENTERBOX_CAROUSEL' => 'Si la zone centrale <em>Produits en promotion</em> doit être affichée sous forme de carrousel, saisissez le nombre de produits à afficher dans les fenêtres d\'affichage grandes et moyennes sous forme de liste séparée par des virgules avec <code>;fade</code> à la fin pour <em>faire disparaître</em> le carrousel au lieu de le faire glisser, par exemple <code>3, 2</code> ou <code>3, 2;fade</code>. Laissez ce paramètre vide (par défaut) pour afficher la zone centrale en fonction de <code>Index des produits :: Colonnes par ligne des produits en promotion</code>.<br>',
    'CFGTITLE_PRODUCT_INFO_SHOW_BOOTSTRAP_MODAL_POPUPS' => 'Activer les fenêtres contextuelles d\'image modales <em>Bootstrap</em>',
    'CFGDESC_PRODUCT_INFO_SHOW_BOOTSTRAP_MODAL_POPUPS' => 'Le modèle ZCA <code>bootstrap</code> doit-il afficher les images de produits contextuelles à l\'aide de sa boîte de dialogue <em>modale</em> ? Si votre boutique utilise un plug-in d\'affichage d\'images (comme <b>Zen ColorBox</b>), définissez cette valeur sur <em>No</em>. Valeur par défaut : <b>Yes</b>',
    'CFGTITLE_PRODUCT_INFO_SHOW_BOOTSTRAP_MODAL_SLIDE' => 'Utiliser le carrousel d\'images supplémentaires de Bootstrap',
    'CFGDESC_PRODUCT_INFO_SHOW_BOOTSTRAP_MODAL_SLIDE' => 'La valeur par défaut est <b>0</b>, ouvre les images dans une fenêtre modale individuelle, <b>1</b> ouvre les images dans une seule fenêtre modale avec carrousel.',
    'CFGTITLE_PRODUCT_INFO_SHOW_MANUFACTURER_BOX' => 'Afficher l\'encadré « Fabricant » sur les pages produits',
    'CFGDESC_PRODUCT_INFO_SHOW_MANUFACTURER_BOX' => 'Utilisé par le modèle ZCA Bootstrap. La valeur par défaut est <b>1</b>, s\'affiche sur la page d\'informations produit. <b>0</b>, ne s\'affiche pas.',
    'CFGTITLE_PRODUCT_INFO_SHOW_NOTIFICATIONS_BOX' => 'Afficher la boîte de notifications sur les pages de produits',
    'CFGDESC_PRODUCT_INFO_SHOW_NOTIFICATIONS_BOX' => 'Utilisé par le modèle ZCA Bootstrap. La valeur par défaut est <b>1</b>, s\'affiche sur la page d\'informations produit. <b>0</b>, ne s\'affiche pas.',
    'CFGTITLE_SET_COLUMN_LEFT_LAYOUT' => 'Réactif - Largeur de la colonne de gauche',
    'CFGDESC_SET_COLUMN_LEFT_LAYOUT' => 'Défini la largeur de la colonne de gauche<br>La valeur par défaut est <b>3</b>, le nombre total de colonnes est <b>12</b>.<br>La somme des largeurs des colonnes réactives gauche, centrale et droite doit être égale à 12',
    'CFGTITLE_SET_COLUMN_CENTER_LAYOUT' => 'Réactif - Largeur de la colonne centrale',
    'CFGDESC_SET_COLUMN_CENTER_LAYOUT' => 'Défini la largeur de la colonne centrale<br>La valeur par défaut est <b>6</b>, le nombre total de colonnes est <b>12</b>.<br>La somme des largeurs des colonnes réactives gauche, centrale et droite doit être égale à 12',
    'CFGTITLE_SET_COLUMN_RIGHT_LAYOUT' => 'Réactif - Largeur de la colonne de droite',
    'CFGDESC_SET_COLUMN_RIGHT_LAYOUT' => 'Défini la largeur de la colonne de droite<br>La valeur par défaut est <b>3</b>, le nombre total de colonnes est <b>12</b>.<br>La somme des largeurs des colonnes réactives gauche, centrale et droite doit être égale à 12',
    'CFGTITLE_ZCA_ACTIVATE_BANNER_ONE_CAROUSEL' => '<i>Affichage de bannière Bootstrap</i> - Activer la fonction de carrousel pour la position d\'en-tête 1',    'CFGDESC_ZCA_ACTIVATE_BANNER_ONE_CAROUSEL' => 'Activer le carrousel de bannières pour la position d\'en-tête 1.',
    'CFGTITLE_ZCA_ACTIVATE_BANNER_TWO_CAROUSEL' => '<i>Affichage de bannière Bootstrap</i> - Activer la fonction de carrousel pour la position d\'en-tête 2',    'CFGDESC_ZCA_ACTIVATE_BANNER_TWO_CAROUSEL' => 'Activer le carrousel de bannières pour la position d\'en-tête 2.',
    'CFGTITLE_ZCA_ACTIVATE_BANNER_THREE_CAROUSEL' => '<i>Affichage de bannière Bootstrap</i> - Activer la fonction de carrousel pour la position d\'en-tête 3',    'CFGDESC_ZCA_ACTIVATE_BANNER_THREE_CAROUSEL' => 'Activer le carrousel de bannières pour la position d\'en-tête 3.',
    'CFGTITLE_ZCA_ACTIVATE_BANNER_FOUR_CAROUSEL' => '<i>Affichage de bannière Bootstrap</i> - Activer la fonction de carrousel de la position 1 du pied de page',    'CFGDESC_ZCA_ACTIVATE_BANNER_FOUR_CAROUSEL' => 'Activer le carrousel de bannières pour la position de pied de page 1.',
    'CFGTITLE_ZCA_ACTIVATE_BANNER_FIVE_CAROUSEL' => '<i>Affichage de bannière Bootstrap</i> - Activer la fonction de carrousel de la position 2 du pied de page',    'CFGDESC_ZCA_ACTIVATE_BANNER_FIVE_CAROUSEL' => 'Activer le carrousel de bannières pour la position de pied de page 2.',
    'CFGTITLE_ZCA_ACTIVATE_BANNER_SIX_CAROUSEL' => '<i>Affichage de bannière Bootstrap</i> - Activer la fonction de carrousel de la position 3 du pied de page',    'CFGDESC_ZCA_ACTIVATE_BANNER_SIX_CAROUSEL' => 'Activer le carrousel de bannières pour la position de pied de page 3.',
    'CFGTITLE_ZCA_BOOTSTRAP_VERSION' => 'Version du modèle Bootstrap',
    'CFGDESC_ZCA_BOOTSTRAP_VERSION' => 'Affiche la version actuelle du modèle.',
];

return $define;
