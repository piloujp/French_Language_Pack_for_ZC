<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2024 Aug 30 Modified in v2.1.0-alpha1 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_POSM' => 'Gestionnaire de stock des options de produits',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_POSM' => 'Ce plugin permet à votre site d\'attribuer des niveaux de stock et des numéros de modèle à vos produits en fonction de combinaisons produit-attributs (également appelées « variantes de produit » ou « stock par attributs »). La prise en charge de l\'<em>éditeur de commandes</em><sup>5</sup> a été ajoutée.',
// POSM - configuration
    'CFGTITLE_POSM_ENABLE' => 'Général : Activer le gestionnaire de stock des options de produits ?',
    'CFGDESC_POSM_ENABLE' => 'Activer le traitement du stock des <em>options de produits</em> dans la boutique ?',
    'CFGTITLE_POSM_DUPLICATE_MODELNUMS' => 'Général : Numéros de modèle en double',
    'CFGDESC_POSM_DUPLICATE_MODELNUMS' => 'Comment les outils d\'administration doivent-ils gérer les numéros de modèle en double ?  Choisissez parmi :<ol><li><b>Allow</b> (default): Pas de message, permet de sauvegarder.</li><li><b>Disallow:</b> Émettre un message, ne pas autoriser l\'enregistrement.</li><li><b>Message-Only:</b> Émettre un message, autoriser l\'enregistrement.</li></ol>',
    'CFGTITLE_POSM_DIVIDER_COLOR' => 'Général : Couleur du séparateur',
    'CFGDESC_POSM_DIVIDER_COLOR' => 'Saisissez la couleur de fond à utiliser pour le séparateur dans <em>Catalogue :: Gestionnaire de stock des options de produits.',
    'CFGTITLE_POSM_STOCK_REORDER_LEVEL' => 'Général : Niveau de réapprovisionnement des stocks d\'options',
    'CFGDESC_POSM_STOCK_REORDER_LEVEL' => 'Entrez le niveau de stock faible pour les produits avec stock d\'options. Cette valeur est utilisée pour mettre en évidence les options à faible stock dans les outils <em>Catalogue->Gérer le stock des options</em> et, si <em>Configuration->Options de courrier électronique->Envoyer des e-mails en cas de stock faible</em> est activé, détermine le niveau de stock auquel envoyer ces e-mails.<br><br><strong>Note:</strong> The value entered must consist of numeric (0-9) characters <em>only</em>.',
    'CFGTITLE_POSM_BIS_DATE_REMINDER' => 'Général : Rappel de date de retour en stock',
    'CFGDESC_POSM_BIS_DATE_REMINDER' => 'Si votre magasin utilise les étiquettes de retour en stock de <em>POSM</em> avec les dates de disponibilité, vous souhaiterez peut-être un rappel lorsqu\'une date est imminente. Identifier le nombre de jours <b>avant</b> toute expiration pendant lequel la notification doit être émise ; définissez la valeur sur 0 (valeur par défaut) si vous ne souhaitez pas de rappel.',
    'CFGTITLE_POSM_OPTIONS_TYPES_TO_MANAGE' => 'Général : Types d\'options à gérer ?',
    'CFGDESC_POSM_OPTIONS_TYPES_TO_MANAGE' => 'Saisissez les types d\'options à gérer à l\'aide d\'une liste condensée séparée par des virgules. Actuellement, seuls les types d\'options Dropdown/Select (0) et Radio (2) sont pris en charge !',
    'CFGTITLE_POSM_OPTIONAL_OPTION_TYPES_LIST' => 'Général : Liste facultative des <em>Types d\'options</em>',
    'CFGDESC_POSM_OPTIONAL_OPTION_TYPES_LIST' => 'Entrez les types d\'options à ignorer pour déterminer si la combinaison d\'options d\'un produit est gérée, à l\'aide d\'une liste condensée et séparée par des virgules.<br><br>Les types d\'options Zen Cart intégrées sont Dropdown/Select (0), Text (1), Radio (2), Checkbox (3), File (4) et Read-Only (5).',
    'CFGTITLE_POSM_OPTIONAL_OPTION_NAMES_LIST' => 'Général : Liste facultative des <em>Noms d\'options</em>',
    'CFGDESC_POSM_OPTIONAL_OPTION_NAMES_LIST' => 'Entrez la liste des options de produits facultatives pour votre magasin, en utilisant une liste condensée et séparée par des virgules de leurs valeurs option_id. Toutes les valeurs d\'option associées aux options que vous identifiez ici sont ignorées lorsque l\'on détermine si la combinaison d\'options d\'un produit est gérée.<br><br>Utilisez cette valeur conjointement avec la « Liste des <em>Types d\'options</em> facultatifs » pour affiner les configurations de combinaisons d\'options de votre magasin.',
    'CFGTITLE_POSM_SHOW_STOCK_MESSAGES' => 'Affichage de l\'état du stock : Afficher les messages ?',
    'CFGDESC_POSM_SHOW_STOCK_MESSAGES' => 'Choisissez où (Magasin uniquement, Administration uniquement, Les deux ou Ni l\'un ni l\'autre) les messages <em>POSM</em> concernant le stock seront affichés.<br><br>Si vous choisissez <b>Store Only</b> ou <b>Both</b>, ce statut sera visible par vos clients sur les pages du cart, de confirmation de payement et d\'historique du compte. Voir également le paramètre <em>Attributs dépendants : Affichage de l\'état du stock</em> ci-dessous, qui fonctionne indépendamment de ce paramètre.<br><br>Si vous choisissez <b>Admin Only</b> ou <b>Both</b>, les messages concernant le stock seront visibles dans l\'affichage des détails de <em>Clients-&gt;Commandes</em>, vos factures et vos bons de livraison.',
    'CFGTITLE_POSM_SHOW_UNMANAGED_OPTIONS_STATUS' => 'Affichage de l\'état du stock : messages pour les options non gérées ?',
    'CFGDESC_POSM_SHOW_UNMANAGED_OPTIONS_STATUS' => 'Le traitement côté magasin doit-il inclure des messages concernant le stock pour les produits non gérés par <em>POSM</em> ?  Si défini sur <b>true</b>, les messages seront affichés en fonction de la quantité en stock du produit non géré. &mdash; En stock si > 0; sinon, le message de rupture de stock par défaut (PRODUCTS_OPTIONS_STOCK_NOT_IN_STOCK).',
    'CFGTITLE_POSM_SHOW_IN_STOCK_MESSAGE' => 'Affichage de l\'état du stock : inclure l\'état du stock ?',
    'CFGDESC_POSM_SHOW_IN_STOCK_MESSAGE' => 'Choisissez d\'inclure ou non l\'affichage de l\'état du produit « en stock », <em>partout</em> où cet affichage est activé. Si la valeur est <b>false</b>, seuls les messages en rupture de stock seront affichés.',
    'CFGTITLE_POSM_ADMIN_MODEL_WIDTH' => 'Administration : Largeur du champ du numéro de modèle',
    'CFGDESC_POSM_ADMIN_MODEL_WIDTH' => 'Utilisez ce paramètre pour contrôler la largeur du champ <em>Modèle d\'option/UGS</em> affiché dans <em>Catalogue : Gérer le stock des options</em> et <em>Catalogue : Stock des options &mdash; Tout afficher</em>. Entrez une valeur de « largeur » CSS valide, par ex. 9em (par défaut) ou 9px.<br><br><b>Remarque :</b> Laissez le paramètre vide pour utiliser la largeur de champ définie par la base de données.<br>',
    'CFGTITLE_POSM_DEPENDENT_ATTRS_ENABLE' => 'Attributs dépendants : activer',
    'CFGDESC_POSM_DEPENDENT_ATTRS_ENABLE' => 'Identifiez si le traitement des attributs dépendants du plugin doit être activé ou non.',
    'CFGTITLE_POSM_DEPENDENT_ATTRS_PLEASE_CHOOSE' => 'Attributs dépendants : Insérer « Veuillez choisir » ?',
    'CFGDESC_POSM_DEPENDENT_ATTRS_PLEASE_CHOOSE' => 'Identifiez si le traitement des attributs dépendants du plugin doit ou non insérer un message « Veuillez choisir » dans les options déroulantes d\'un produit. Si <em>false</em>, la première valeur d\'option pour chaque attribut est <em>supposée</em> être une valeur de type « Veuillez choisir &hellip; ».<br><br><b>Remarque :</b> Ce paramètre <b><i>ne s\'applique pas</i></b> lorsqu\'un produit dispose d\'une seule option déroulante.',
    'CFGTITLE_POSM_DEPENDENT_ATTRS_SHOW_MODEL' => 'Attributs dépendants : Afficher le numéro de modèle ?',
    'CFGDESC_POSM_DEPENDENT_ATTRS_SHOW_MODEL' => 'Identifiez si le traitement des attributs dépendants du plug-in doit ou non inclure les numéros de modèle pour chaque valeur d\'attribut sur l\'option d\'attribut finale.<br><br><strong>Remarque :</strong> Le numéro de modèle est inclus <b>uniquement</b> s\'il n\'est pas vide.',
    'CFGTITLE_POSM_DEPENDENT_ATTRS_STOCK_STATUS' => 'Attributs dépendants : Afficher l\'état du stock ?',
    'CFGDESC_POSM_DEPENDENT_ATTRS_STOCK_STATUS' => 'Identifiez si le traitement des attributs dépendants du plugin doit inclure ou non l\'état concernant le stock pour chaque valeur d\'attribut sur l\'option d\'attribut finale.<br><br><strong>Remarque :</strong> le statut « En stock » est inclus <em>uniquement</em> si <em>Affichage de l\'état du stock : Inclure le statut en stock ?</em> est défini sur <b>true </b>.',
    'CFGTITLE_POSM_DEPENDENT_ATTRS_STOCK_STATUS_QTY' => 'Attributs dépendants : Afficher la quantité en stock dans l\'état ?',
    'CFGDESC_POSM_DEPENDENT_ATTRS_STOCK_STATUS_QTY' => 'Lorsque <em>Attributs dépendants : Affichage de l\'état du stock</em> et <em>Affichage de l\'état du stock : Inclure l\'état en stock ?</em> sont tous deux <b>true</b>, la quantité en stock doit-elle être affichée lorsque la combinaison d\'options est <em>En stock</em> ?',
    'CFGTITLE_POSM_ATTRIBUTE_WRAPPER_SELECTOR' => 'Attributs dépendants : sélecteur externe',
    'CFGDESC_POSM_ATTRIBUTE_WRAPPER_SELECTOR' => 'Identifiez le sélecteur CSS <em>externe</em> (par défaut : une chaîne vide) qui encapsule <b>tous</b> les éléments associés à une seule option.<br><br><b>Remarques :</b><ol><li>Pour les modèles <code>responsive_classic</code> et <code>template_default</code> intégrés à Zen Cart (et leurs clones), cette valeur doit être définie à <em>.attribBlock</em>.</li><li>Pour le modèle <code>bootstrap</code> (et ses clones), cette valeur doit être définie sur une chaîne vide.</li></ul>',
    'CFGTITLE_POSM_ATTRIBUTE_SELECTOR' => 'Attributs dépendants : sélecteur interne',
    'CFGDESC_POSM_ATTRIBUTE_SELECTOR' => 'Identifiez le sélecteur CSS <em>interne</em> (par défaut : <em>.wrapperAttribsOptions</em>) qui contient, au minimum, le nom de chaque option.<b>Remarque :</b> Cette valeur doit être modifiée <em>uniquement</em> si votre modèle personnalisé a modifié le format d\'affichage des attributs.',
    'CFGTITLE_POSM_OPTION_NAME_SELECTOR' => 'Attributs dépendants : sélecteur de nom d\'option',
    'CFGDESC_POSM_OPTION_NAME_SELECTOR' => 'Identifiez le sélecteur CSS (par défaut : <em>.optionName</em>) qui identifie lélément contenant le nom de loption actuelle.<b>Remarque :</b> Cette valeur ne doit être modifiée que si votre modèle personnalisé a modifié le format d\'affichage des attributs.',
    'CFGTITLE_POSM_ATTRIBUTE_IMAGE_SELECTOR' => 'Attributs dépendants : Sélecteur d\'images d\'attributs',
    'CFGDESC_POSM_ATTRIBUTE_IMAGE_SELECTOR' => 'Identifiez le sélecteur CSS (par défaut : <em>.attribImg</em>) qui encapsule, s\'il est configuré, l\'image de chaque attribut.<b>Remarque :</b> Cette valeur ne doit être modifiée que si votre modèle personnalisé a modifié le format d\'affichage des attributs.',
    'CFGTITLE_POSM_USE_MINIFIED_JSCRIPT' => 'Attributs dépendants : utiliser un fichier de script réduit ?',
    'CFGDESC_POSM_USE_MINIFIED_JSCRIPT' => 'Identifiez si le traitement des attributs dépendants du plugin doit charger la version minifiée du script jQuery, réduisant ainsi le temps de chargement de la page d\'un produit.',
    'CFGTITLE_POSM_VIEW_ALL_MODEL_UPDATE' => 'Tout afficher : Autoriser les mises à jour des numéros de modèle ?',
    'CFGDESC_POSM_VIEW_ALL_MODEL_UPDATE' => 'Le traitement de « Tout afficher » pour <em>Catalogue->Gérer le stock des options</em> doit-il permettre de mettre à jour les numéros de modèle des variantes gérées ? S\'il est défini sur <b>false</b>, les numéros de modèle sont affichés mais ne peuvent pas être mis à jour; vous devrez mettre à jour les numéros de modèle produit par produit.',
    'CFGTITLE_POSM_MAX_PRODUCTS_VIEW_ALL' => 'Tout afficher : Nombre maximum de produits par page',
    'CFGDESC_POSM_MAX_PRODUCTS_VIEW_ALL' => 'Saisissez le nombre maximum de produits à afficher sur une seule page de l\'outil <em>Tout afficher</em>.',
    'CFGTITLE_POSM_CART_DISPLAY_MODEL_NUMBERS' => 'Panier : Afficher les numéros de modèle ?',
    'CFGDESC_POSM_CART_DISPLAY_MODEL_NUMBERS' => 'La page <code>panier</code> doit-elle afficher le numéro de modèle d\'un produit ? Si vous choisissez <code>true</code>, le numéro de modèle d\'un produit est ajouté à son nom pour l\'affichage, par ex. « Nom du produit [modèle] », si le numéro de modèle n\'est pas vide.',
    'CFGTITLE_POSM_ENABLE_DEBUG' => 'Activer le débogage ?',
    'CFGDESC_POSM_ENABLE_DEBUG' => 'S\'il est activé, le traitement de <em>POSM</em> écrira les informations de débogage soit dans un fichier myDEBUG-POSM-*.log (pour les actions côté magasin), soit dans un fichier myDEBUG-POSM-adm-*.log (pour les actions côté administration) dans le répertoire des journaux de votre magasin.',
// POSM - configuration_group
    'CFG_GRP_TITLE_PRODUCTS_OPTIONS_STOCK_MANAGER' => '%%BOX_CONFIGURATION_PRODUCTS_OPTIONS_STOCK%%',
    'CFG_GRP_DESC_PRODUCTS_OPTIONS_STOCK_MANAGER' => 'Configuration du %%BOX_CONFIGURATION_PRODUCTS_OPTIONS_STOCK%%',
];

return $define;
