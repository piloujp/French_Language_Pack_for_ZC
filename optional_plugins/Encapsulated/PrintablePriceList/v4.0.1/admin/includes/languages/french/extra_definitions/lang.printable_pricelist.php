<?php

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_PRINTABLEPRICELIST' => 'Liste de prix imprimable',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_PRINTABLEPRICELIST' => 'Ce plugin fournit une liste de prix imprimable pour votre boutique Zen Cart. Jusqu\'à 3 variantes distinctes peuvent être personnalisées ; consultez le fichier readme.html du plugin pour plus d\'informations.',
// Admin configuration group
    'CFG_GRP_TITLE_PRINTABLE_PRICELIST' => 'Liste de prix imprimable',
    'CFG_GRP_TITLE_PRICELIST_PROFILE1' => 'Liste de prix : Profil-1',
    'CFG_GRP_TITLE_PRICELIST_PROFILE2' => 'Liste de prix : Profil-2',
    'CFG_GRP_TITLE_PRICELIST_PROFILE3' => 'Liste de prix : Profil-3',
// Admin configuration
    'CFGTITLE_PL_DEFAULT_PROFILE' => 'Profil par défaut',
    'CFGDESC_PL_DEFAULT_PROFILE' => 'Choisissez le profil à utiliser par défaut.',
    'CFGTITLE_PL_SHOW_PROFILES' => 'Afficher les liens du profil ?',
    'CFGDESC_PL_SHOW_PROFILES' => 'Choisissez <em>true</em> pour afficher les liens vers les profils actuellement activés sur la page <em>liste de prix</em>.',
    'CFGTITLE_PL_SHOW_INFO_LINK' => 'Afficher le lien dans la boîte latérale d\'informations ?',
    'CFGDESC_PL_SHOW_INFO_LINK' => 'Choisissez si un lien « Liste de prix » doit être affiché dans la zone latérale Informations.',
    'CFGTITLE_PL_INFO_LINK_POSITION' => 'Position du lien dans la boîte latérale d\'informations',
    'CFGDESC_PL_INFO_LINK_POSITION' => 'Si le lien « Liste de prix » doit être affiché dans la zone latérale Informations, identifiez la position numérique à laquelle ce lien est inséré. Saisissez <code>1</code> pour la première position dans la liste, <code>2</code> pour la seconde et ainsi de suite. Pour le positionner comme dernière entrée, saisissez un nombre supérieur au nombre d\'éléments actuellement présents dans la liste de la zone latérale.<br>',
    'CFGTITLE_PL_INFO_LINK_NEW_PAGE' => 'Boîte latérale d\'informations, lien vers une nouvelle page ?',
    'CFGDESC_PL_INFO_LINK_NEW_PAGE' => 'Si le lien « Liste de prix » doit être affiché dans la zone latérale Informations, indiquez si un clic sur le lien doit ouvrir une nouvelle page (par défaut : <code>true</code>).',
    'CFGTITLE_PL_INCLUDE_CURRENCY_SYMBOL' => 'Inclure le symbole monétaire dans l\'en-tête de la liste de prix ?',
    'CFGDESC_PL_INCLUDE_CURRENCY_SYMBOL' => 'Choisissez si le symbole des devises actuellement sélectionnées doit être inclus dans l\'impression de la liste de prix.',
// Admin configuration profile 1
    'CFGTITLE_PL_ENABLE_1' => 'Activer le profil ?',
    'CFGDESC_PL_ENABLE_1' => 'Choisissez <em>true</em> pour permettre à ce profil d\'être utilisé sur la page <em>liste de prix</em>.',
    'CFGTITLE_PL_GROUP_NAME_1' => 'Nom de groupe',
    'CFGDESC_PL_GROUP_NAME_1' => 'Définissez ce champ avec un <b>Nom de groupe</b> (voir <em>Clients->Tarification de groupe</em>) pour activer ce profil <em>uniquement</em> pour les clients de ce groupe. Laissez le champ vide pour que le profil s\'applique à tous les clients.',
    'CFGTITLE_PL_PROFILE_NAME_1' => 'Nom du profil',
    'CFGDESC_PL_PROFILE_NAME_1' => 'Donnez un nom à ce profil.',
    'CFGTITLE_PL_INCLUDED_PRODUCTS_1' => 'Produits à inclure ?',
    'CFGDESC_PL_INCLUDED_PRODUCTS_1' => 'Choisissez les produits à inclure dans cette liste de prix :<ul><li><b>all</b> : affiche tous les produits</li><li><b>featured</b> : affiche uniquement tous les produits actuellement en vedette.</li><li><b>specials</b> : affiche tous les produits en promotion.</li><li><b>category</b> : affiche les produits associés à la catégorie identifiée dans le paramètre <em>Catégorie de départ</em> ci-dessous.</li></ul>',
    'CFGTITLE_PL_START_CATEGORY_1' => 'Catégorie de départ',
    'CFGDESC_PL_START_CATEGORY_1' => 'Si vous incluez uniquement des produits d\'une catégorie spécifique, identifiez cet <code>categories_id</code> ici.',
    'CFGTITLE_PL_USE_MASTER_CATS_ONLY_1' => 'Afficher les produits liés ?',
    'CFGDESC_PL_USE_MASTER_CATS_ONLY_1' => 'Les produits doivent-ils être répertoriés dans toutes les catégories liées (<em>false</em>) ou uniquement dans leur catégorie principale (<em>true</em>) ?',
    'CFGTITLE_PL_SHOW_BOXES_1' => 'Afficher les sélections ?',
    'CFGDESC_PL_SHOW_BOXES_1' => 'Définissez cette valeur sur <em>true</em> pour afficher les sélections de langue et de devise ainsi qu\'un menu déroulant de catégories.',
    'CFGTITLE_PL_CATEGORY_TREE_MAIN_CATS_ONLY_1' => 'Liste déroulante des catégories : Principales uniquement ?',
    'CFGDESC_PL_CATEGORY_TREE_MAIN_CATS_ONLY_1' => 'Le menu déroulant des catégories doit-il contenir <em>uniquement</em> les catégories principales ? Si ce paramètre est défini sur <em>false</em>, <b>toutes</b> les catégories sont affichées. <b>Remarque :</b> ce paramètre est ignoré si <em>Afficher les sélections</em> est défini sur <em>false</em>.',
    'CFGTITLE_PL_MAINCATS_NEW_PAGE_1' => 'Catégories principales : nouvelle page',
    'CFGDESC_PL_MAINCATS_NEW_PAGE_1' => 'Si défini sur « true », les catégories principales de la liste de prix imprimée commenceront sur une nouvelle page.',
    'CFGTITLE_PL_SHOW_ATTRIBUTES_1' => 'Inclure les attributs dans la tarification ?',
    'CFGDESC_PL_SHOW_ATTRIBUTES_1' => 'Des prix relatifs aux attributs doivent-ils être indiqués pour les produits ?',
    'CFGTITLE_PL_NOWRAP_1' => 'Pas d\'habillage',
    'CFGDESC_PL_NOWRAP_1' => 'Pour activer ou désactiver l\'habillage à l\'écran (aucun habillage est plus facile pour le débogage)',
    'CFGTITLE_PL_SHOW_MODEL_1' => 'Colonnes : Modèle',
    'CFGDESC_PL_SHOW_MODEL_1' => 'Afficher le numéro de modèle de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_MANUFACTURER_1' => 'Colonnes : Fabricant',
    'CFGDESC_PL_SHOW_MANUFACTURER_1' => 'Afficher le fabricant de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_WEIGHT_1' => 'Colonnes : Poids',
    'CFGDESC_PL_SHOW_WEIGHT_1' => 'Afficher le poids de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_SOH_1' => 'Colonnes : Stock disponible',
    'CFGDESC_PL_SHOW_SOH_1' => 'Afficher le stock disponible de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_NOTES_A_1' => 'Colonnes : Remarques (A)',
    'CFGDESC_PL_SHOW_NOTES_A_1' => 'Afficher une colonne vide pour chaque produit, permettant au client de prendre des notes ?',
    'CFGTITLE_PL_SHOW_NOTES_B_1' => 'Colonnes : Remarques (B)',
    'CFGDESC_PL_SHOW_NOTES_B_1' => 'Afficher une autre colonne vide pour chaque produit, permettant au client de prendre des notes ?',
    'CFGTITLE_PL_SHOW_PRICE_1' => 'Colonnes : Prix',
    'CFGDESC_PL_SHOW_PRICE_1' => 'Afficher le prix de chaque produit, taxes comprises ou non, en fonction des paramètres de configuration des taxes de votre boutique ?',
    'CFGTITLE_PL_SHOW_TAX_FREE_1' => 'Colonnes : Prix (HT)',
    'CFGDESC_PL_SHOW_TAX_FREE_1' => 'Afficher le prix hors taxes de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_SPECIAL_PRICE_1' => 'Afficher les prix spéciaux ?',
    'CFGDESC_PL_SHOW_SPECIAL_PRICE_1' => 'Afficher le prix « spécial » de chaque produit ? Si défini sur <em>true</em>, le script exécutera 4 requêtes supplémentaires par produit !',
    'CFGTITLE_PL_SHOW_SPECIAL_DATE_1' => 'Afficher la date d\'expiration des prix spéciaux ?',
    'CFGDESC_PL_SHOW_SPECIAL_DATE_1' => 'Afficher la date d\'expiration du prix spécial ? Cela ne fonctionne que pour les offres spéciales (pas pour la tarification par attributs et les soldes). Exécute une requête supplémentaire par offre spéciale si cette option est activée.',
    'CFGTITLE_PL_SHOW_ADDTOCART_BUTTON_1' => 'Colonnes : Ajouter au panier',
    'CFGDESC_PL_SHOW_ADDTOCART_BUTTON_1' => 'Afficher un bouton d\'ajout au panier pour chaque produit ? Si le produit possède des options, un lien « Plus d\'infos » s\'affiche à la place.',
    'CFGTITLE_PL_ADDTOCART_TARGET_1' => 'Cible du bouton Ajouter au panier',
    'CFGDESC_PL_ADDTOCART_TARGET_1' => 'Comment réagir à un clic sur le bouton Ajouter au panier : <em>Cartpage</em> envoie tous les résultats vers la même page Web, <em>_self</em> envoie le résultat vers la page actuelle et <em>_blank</em> envoie chaque résultat vers une nouvelle page.',
    'CFGTITLE_PL_SHOW_IMAGE_1' => 'Afficher les images du produit ?',
    'CFGDESC_PL_SHOW_IMAGE_1' => 'Afficher l\'image de chaque produit ?',
    'CFGTITLE_PL_IMAGE_PRODUCT_HEIGHT_1' => 'Hauteur de l\'image',
    'CFGDESC_PL_IMAGE_PRODUCT_HEIGHT_1' => 'Si les images du produit doivent être affichées, quelle est la hauteur de chaque image ?',
    'CFGTITLE_PL_IMAGE_PRODUCT_WIDTH_1' => 'Largeur de l \'image',
    'CFGDESC_PL_IMAGE_PRODUCT_WIDTH_1' => 'Si les images du produit doivent être affichées, quelle est la largeur de chaque image ?',
    'CFGTITLE_PL_SHOW_DESCRIPTION_1' => 'Afficher les descriptions ?',
    'CFGDESC_PL_SHOW_DESCRIPTION_1' => 'Afficher la description de chaque produit ?',
    'CFGTITLE_PL_TRUNCATE_DESCRIPTION_1' => 'Tronquer les descriptions ?',
    'CFGDESC_PL_TRUNCATE_DESCRIPTION_1' => 'Si <em>Afficher les descriptions ?</em> est défini sur <b>true</b> et que ce champ a une valeur autre que 0 ou vide, les descriptions de produits seront tronquées à cette longueur – le code HTML sera supprimé.',
    'CFGTITLE_PL_SHOW_INACTIVE_1' => 'Afficher les produits et catégories inactifs ?',
    'CFGDESC_PL_SHOW_INACTIVE_1' => 'Définissez cette valeur sur <em>true</em> pour inclure les produits et catégories désactivés dans la liste.',
    'CFGTITLE_PL_SORT_PRODUCTS_BY_1' => 'Trier par : Champs',
    'CFGDESC_PL_SORT_PRODUCTS_BY_1' => 'Comment les produits sont triés dans une catégorie',
    'CFGTITLE_PL_SORT_ASC_DESC_1' => 'Trier par : Asc/Desc',
    'CFGDESC_PL_SORT_ASC_DESC_1' => 'Trier par ordre croissant ou décroissant',
    'CFGTITLE_PL_DEBUG_1' => 'Activer le débogage ?',
    'CFGDESC_PL_DEBUG_1' => 'Si défini sur <em>true</em>, les informations de débogage sont affichées',
    'CFGTITLE_PL_HEADER_LOGO_1' => 'Afficher le logo du magasin à l\'écran ?',
    'CFGDESC_PL_HEADER_LOGO_1' => 'Afficher le logo du magasin en haut de l\'écran ?',
    'CFGTITLE_PL_SHOW_PRICELIST_PAGE_HEADERS_1' => 'Afficher les en-têtes de page ?',
    'CFGDESC_PL_SHOW_PRICELIST_PAGE_HEADERS_1' => 'Si défini sur vrai, les en-têtes de page sur chaque page sont affichés (écran et impression).',
    'CFGTITLE_PL_SHOW_PRICELIST_PAGE_FOOTERS_1' => 'Afficher les pieds de page ?',
    'CFGDESC_PL_SHOW_PRICELIST_PAGE_FOOTERS_1' => 'Si défini sur vrai, les pieds de page de chaque page sont affichés (écran et impression).',
// Admin configuration profile 2
    'CFGTITLE_PL_ENABLE_2' => 'Activer le profil ?',
    'CFGDESC_PL_ENABLE_2' => 'Choisissez <em>true</em> pour permettre à ce profil d\'être utilisé sur la page <em>liste de prix</em>.',
    'CFGTITLE_PL_GROUP_NAME_2' => 'Nom de groupe',
    'CFGDESC_PL_GROUP_NAME_2' => 'Définissez ce champ avec un <b>Nom de groupe</b> (voir <em>Clients->Tarification de groupe</em>) pour activer ce profil <em>uniquement</em> pour les clients de ce groupe. Laissez le champ vide pour que le profil s\'applique à tous les clients.',
    'CFGTITLE_PL_PROFILE_NAME_2' => 'Nom du profil',
    'CFGDESC_PL_PROFILE_NAME_2' => 'Donnez un nom à ce profil.',
    'CFGTITLE_PL_INCLUDED_PRODUCTS_2' => 'Produits à inclure ?',
    'CFGDESC_PL_INCLUDED_PRODUCTS_2' => 'Choisissez les produits à inclure dans cette liste de prix :<ul><li><b>all</b> : affiche tous les produits</li><li><b>featured</b> : affiche uniquement tous les produits actuellement en vedette.</li><li><b>specials</b> : affiche tous les produits en promotion.</li><li><b>category</b> : affiche les produits associés à la catégorie identifiée dans le paramètre <em>Catégorie de départ</em> ci-dessous.</li></ul>',
    'CFGTITLE_PL_START_CATEGORY_2' => 'Catégorie de départ',
    'CFGDESC_PL_START_CATEGORY_2' => 'Si vous incluez uniquement des produits d\'une catégorie spécifique, identifiez cet <code>categories_id</code> ici.',
    'CFGTITLE_PL_USE_MASTER_CATS_ONLY_2' => 'Afficher les produits liés ?',
    'CFGDESC_PL_USE_MASTER_CATS_ONLY_2' => 'Les produits doivent-ils être répertoriés dans toutes les catégories liées (<em>false</em>) ou uniquement dans leur catégorie principale (<em>true</em>) ?',
    'CFGTITLE_PL_SHOW_BOXES_2' => 'Afficher les sélections ?',
    'CFGDESC_PL_SHOW_BOXES_2' => 'Définissez cette valeur sur <em>true</em> pour afficher les sélections de langue et de devise ainsi qu\'un menu déroulant de catégories.',
    'CFGTITLE_PL_CATEGORY_TREE_MAIN_CATS_ONLY_2' => 'Liste déroulante des catégories : Principales uniquement ?',
    'CFGDESC_PL_CATEGORY_TREE_MAIN_CATS_ONLY_2' => 'Le menu déroulant des catégories doit-il contenir <em>uniquement</em> les catégories principales ? Si ce paramètre est défini sur <em>false</em>, <b>toutes</b> les catégories sont affichées. <b>Remarque :</b> ce paramètre est ignoré si <em>Afficher les sélections</em> est défini sur <em>false</em>.',
    'CFGTITLE_PL_MAINCATS_NEW_PAGE_2' => 'Catégories principales : nouvelle page',
    'CFGDESC_PL_MAINCATS_NEW_PAGE_2' => 'Si défini sur « true », les catégories principales de la liste de prix imprimée commenceront sur une nouvelle page.',
    'CFGTITLE_PL_SHOW_ATTRIBUTES_2' => 'Inclure les attributs dans la tarification ?',
    'CFGDESC_PL_SHOW_ATTRIBUTES_2' => 'Des prix relatifs aux attributs doivent-ils être indiqués pour les produits ?',
    'CFGTITLE_PL_NOWRAP_2' => 'Pas d\'habillage',
    'CFGDESC_PL_NOWRAP_2' => 'Pour activer ou désactiver l\'habillage à l\'écran (aucun habillage est plus facile pour le débogage)',
    'CFGTITLE_PL_SHOW_MODEL_2' => 'Colonnes : Modèle',
    'CFGDESC_PL_SHOW_MODEL_2' => 'Afficher le numéro de modèle de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_MANUFACTURER_2' => 'Colonnes : Fabricant',
    'CFGDESC_PL_SHOW_MANUFACTURER_2' => 'Afficher le fabricant de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_WEIGHT_2' => 'Colonnes : Poids',
    'CFGDESC_PL_SHOW_WEIGHT_2' => 'Afficher le poids de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_SOH_2' => 'Colonnes : Stock disponible',
    'CFGDESC_PL_SHOW_SOH_2' => 'Afficher le stock disponible de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_NOTES_A_2' => 'Colonnes : Remarques (A)',
    'CFGDESC_PL_SHOW_NOTES_A_2' => 'Afficher une colonne vide pour chaque produit, permettant au client de prendre des notes ?',
    'CFGTITLE_PL_SHOW_NOTES_B_2' => 'Colonnes : Remarques (B)',
    'CFGDESC_PL_SHOW_NOTES_B_2' => 'Afficher une autre colonne vide pour chaque produit, permettant au client de prendre des notes ?',
    'CFGTITLE_PL_SHOW_PRICE_2' => 'Colonnes : Prix',
    'CFGDESC_PL_SHOW_PRICE_2' => 'Afficher le prix de chaque produit, taxes comprises ou non, en fonction des paramètres de configuration des taxes de votre boutique ?',
    'CFGTITLE_PL_SHOW_TAX_FREE_2' => 'Colonnes : Prix (HT)',
    'CFGDESC_PL_SHOW_TAX_FREE_2' => 'Afficher le prix hors taxes de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_SPECIAL_PRICE_2' => 'Afficher les prix spéciaux ?',
    'CFGDESC_PL_SHOW_SPECIAL_PRICE_2' => 'Afficher le prix « spécial » de chaque produit ? Si défini sur <em>true</em>, le script exécutera 4 requêtes supplémentaires par produit !',
    'CFGTITLE_PL_SHOW_SPECIAL_DATE_2' => 'Afficher la date d\'expiration des prix spéciaux ?',
    'CFGDESC_PL_SHOW_SPECIAL_DATE_2' => 'Afficher la date d\'expiration du prix spécial ? Cela ne fonctionne que pour les offres spéciales (pas pour la tarification par attributs et les soldes). Exécute une requête supplémentaire par offre spéciale si cette option est activée.',
    'CFGTITLE_PL_SHOW_ADDTOCART_BUTTON_2' => 'Colonnes : Ajouter au panier',
    'CFGDESC_PL_SHOW_ADDTOCART_BUTTON_2' => 'Afficher un bouton d\'ajout au panier pour chaque produit ? Si le produit possède des options, un lien « Plus d\'infos » s\'affiche à la place.',
    'CFGTITLE_PL_ADDTOCART_TARGET_2' => 'Cible du bouton Ajouter au panier',
    'CFGDESC_PL_ADDTOCART_TARGET_2' => 'Comment réagir à un clic sur le bouton Ajouter au panier : <em>Cartpage</em> envoie tous les résultats vers la même page Web, <em>_self</em> envoie le résultat vers la page actuelle et <em>_blank</em> envoie chaque résultat vers une nouvelle page.',
    'CFGTITLE_PL_SHOW_IMAGE_2' => 'Afficher les images du produit ?',
    'CFGDESC_PL_SHOW_IMAGE_2' => 'Afficher l\'image de chaque produit ?',
    'CFGTITLE_PL_IMAGE_PRODUCT_HEIGHT_2' => 'Hauteur de l\'image',
    'CFGDESC_PL_IMAGE_PRODUCT_HEIGHT_2' => 'Si les images du produit doivent être affichées, quelle est la hauteur de chaque image ?',
    'CFGTITLE_PL_IMAGE_PRODUCT_WIDTH_2' => 'Largeur de l \'image',
    'CFGDESC_PL_IMAGE_PRODUCT_WIDTH_2' => 'Si les images du produit doivent être affichées, quelle est la largeur de chaque image ?',
    'CFGTITLE_PL_SHOW_DESCRIPTION_2' => 'Afficher les descriptions ?',
    'CFGDESC_PL_SHOW_DESCRIPTION_2' => 'Afficher la description de chaque produit ?',
    'CFGTITLE_PL_TRUNCATE_DESCRIPTION_2' => 'Tronquer les descriptions ?',
    'CFGDESC_PL_TRUNCATE_DESCRIPTION_2' => 'Si <em>Afficher les descriptions ?</em> est défini sur <b>true</b> et que ce champ a une valeur autre que 0 ou vide, les descriptions de produits seront tronquées à cette longueur – le code HTML sera supprimé.',
    'CFGTITLE_PL_SHOW_INACTIVE_2' => 'Afficher les produits et catégories inactifs ?',
    'CFGDESC_PL_SHOW_INACTIVE_2' => 'Définissez cette valeur sur <em>true</em> pour inclure les produits et catégories désactivés dans la liste.',
    'CFGTITLE_PL_SORT_PRODUCTS_BY_2' => 'Trier par : Champs',
    'CFGDESC_PL_SORT_PRODUCTS_BY_2' => 'Comment les produits sont triés dans une catégorie',
    'CFGTITLE_PL_SORT_ASC_DESC_2' => 'Trier par : Asc/Desc',
    'CFGDESC_PL_SORT_ASC_DESC_2' => 'Trier par ordre croissant ou décroissant',
    'CFGTITLE_PL_DEBUG_2' => 'Activer le débogage ?',
    'CFGDESC_PL_DEBUG_2' => 'Si défini sur <em>true</em>, les informations de débogage sont affichées',
    'CFGTITLE_PL_HEADER_LOGO_2' => 'Afficher le logo du magasin à l\'écran ?',
    'CFGDESC_PL_HEADER_LOGO_2' => 'Afficher le logo du magasin en haut de l\'écran ?',
    'CFGTITLE_PL_SHOW_PRICELIST_PAGE_HEADERS_2' => 'Afficher les en-têtes de page ?',
    'CFGDESC_PL_SHOW_PRICELIST_PAGE_HEADERS_2' => 'Si défini sur vrai, les en-têtes de page sur chaque page sont affichés (écran et impression).',
    'CFGTITLE_PL_SHOW_PRICELIST_PAGE_FOOTERS_2' => 'Afficher les pieds de page ?',
    'CFGDESC_PL_SHOW_PRICELIST_PAGE_FOOTERS_2' => 'Si défini sur vrai, les pieds de page de chaque page sont affichés (écran et impression).',
// Admin configuration profile 3
    'CFGTITLE_PL_ENABLE_3' => 'Activer le profil ?',
    'CFGDESC_PL_ENABLE_3' => 'Choisissez <em>true</em> pour permettre à ce profil d\'être utilisé sur la page <em>liste de prix</em>.',
    'CFGTITLE_PL_GROUP_NAME_3' => 'Nom de groupe',
    'CFGDESC_PL_GROUP_NAME_3' => 'Définissez ce champ avec un <b>Nom de groupe</b> (voir <em>Clients->Tarification de groupe</em>) pour activer ce profil <em>uniquement</em> pour les clients de ce groupe. Laissez le champ vide pour que le profil s\'applique à tous les clients.',
    'CFGTITLE_PL_PROFILE_NAME_3' => 'Nom du profil',
    'CFGDESC_PL_PROFILE_NAME_3' => 'Donnez un nom à ce profil.',
    'CFGTITLE_PL_INCLUDED_PRODUCTS_3' => 'Produits à inclure ?',
    'CFGDESC_PL_INCLUDED_PRODUCTS_3' => 'Choisissez les produits à inclure dans cette liste de prix :<ul><li><b>all</b> : affiche tous les produits</li><li><b>featured</b> : affiche uniquement tous les produits actuellement en vedette.</li><li><b>specials</b> : affiche tous les produits en promotion.</li><li><b>category</b> : affiche les produits associés à la catégorie identifiée dans le paramètre <em>Catégorie de départ</em> ci-dessous.</li></ul>',
    'CFGTITLE_PL_START_CATEGORY_3' => 'Catégorie de départ',
    'CFGDESC_PL_START_CATEGORY_3' => 'Si vous incluez uniquement des produits d\'une catégorie spécifique, identifiez cet <code>categories_id</code> ici.',
    'CFGTITLE_PL_USE_MASTER_CATS_ONLY_3' => 'Afficher les produits liés ?',
    'CFGDESC_PL_USE_MASTER_CATS_ONLY_3' => 'Les produits doivent-ils être répertoriés dans toutes les catégories liées (<em>false</em>) ou uniquement dans leur catégorie principale (<em>true</em>) ?',
    'CFGTITLE_PL_SHOW_BOXES_3' => 'Afficher les sélections ?',
    'CFGDESC_PL_SHOW_BOXES_3' => 'Définissez cette valeur sur <em>true</em> pour afficher les sélections de langue et de devise ainsi qu\'un menu déroulant de catégories.',
    'CFGTITLE_PL_CATEGORY_TREE_MAIN_CATS_ONLY_3' => 'Liste déroulante des catégories : Principales uniquement ?',
    'CFGDESC_PL_CATEGORY_TREE_MAIN_CATS_ONLY_3' => 'Le menu déroulant des catégories doit-il contenir <em>uniquement</em> les catégories principales ? Si ce paramètre est défini sur <em>false</em>, <b>toutes</b> les catégories sont affichées. <b>Remarque :</b> ce paramètre est ignoré si <em>Afficher les sélections</em> est défini sur <em>false</em>.',
    'CFGTITLE_PL_MAINCATS_NEW_PAGE_3' => 'Catégories principales : nouvelle page',
    'CFGDESC_PL_MAINCATS_NEW_PAGE_3' => 'Si défini sur « true », les catégories principales de la liste de prix imprimée commenceront sur une nouvelle page.',
    'CFGTITLE_PL_SHOW_ATTRIBUTES_3' => 'Inclure les attributs dans la tarification ?',
    'CFGDESC_PL_SHOW_ATTRIBUTES_3' => 'Des prix relatifs aux attributs doivent-ils être indiqués pour les produits ?',
    'CFGTITLE_PL_NOWRAP_3' => 'Pas d\'habillage',
    'CFGDESC_PL_NOWRAP_3' => 'Pour activer ou désactiver l\'habillage à l\'écran (aucun habillage est plus facile pour le débogage)',
    'CFGTITLE_PL_SHOW_MODEL_3' => 'Colonnes : Modèle',
    'CFGDESC_PL_SHOW_MODEL_3' => 'Afficher le numéro de modèle de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_MANUFACTURER_3' => 'Colonnes : Fabricant',
    'CFGDESC_PL_SHOW_MANUFACTURER_3' => 'Afficher le fabricant de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_WEIGHT_3' => 'Colonnes : Poids',
    'CFGDESC_PL_SHOW_WEIGHT_3' => 'Afficher le poids de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_SOH_3' => 'Colonnes : Stock disponible',
    'CFGDESC_PL_SHOW_SOH_3' => 'Afficher le stock disponible de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_NOTES_A_3' => 'Colonnes : Remarques (A)',
    'CFGDESC_PL_SHOW_NOTES_A_3' => 'Afficher une colonne vide pour chaque produit, permettant au client de prendre des notes ?',
    'CFGTITLE_PL_SHOW_NOTES_B_3' => 'Colonnes : Remarques (B)',
    'CFGDESC_PL_SHOW_NOTES_B_3' => 'Afficher une autre colonne vide pour chaque produit, permettant au client de prendre des notes ?',
    'CFGTITLE_PL_SHOW_PRICE_3' => 'Colonnes : Prix',
    'CFGDESC_PL_SHOW_PRICE_3' => 'Afficher le prix de chaque produit, taxes comprises ou non, en fonction des paramètres de configuration des taxes de votre boutique ?',
    'CFGTITLE_PL_SHOW_TAX_FREE_3' => 'Colonnes : Prix (HT)',
    'CFGDESC_PL_SHOW_TAX_FREE_3' => 'Afficher le prix hors taxes de chaque produit dans une colonne séparée ?',
    'CFGTITLE_PL_SHOW_SPECIAL_PRICE_3' => 'Afficher les prix spéciaux ?',
    'CFGDESC_PL_SHOW_SPECIAL_PRICE_3' => 'Afficher le prix « spécial » de chaque produit ? Si défini sur <em>true</em>, le script exécutera 4 requêtes supplémentaires par produit !',
    'CFGTITLE_PL_SHOW_SPECIAL_DATE_3' => 'Afficher la date d\'expiration des prix spéciaux ?',
    'CFGDESC_PL_SHOW_SPECIAL_DATE_3' => 'Afficher la date d\'expiration du prix spécial ? Cela ne fonctionne que pour les offres spéciales (pas pour la tarification par attributs et les soldes). Exécute une requête supplémentaire par offre spéciale si cette option est activée.',
    'CFGTITLE_PL_SHOW_ADDTOCART_BUTTON_3' => 'Colonnes : Ajouter au panier',
    'CFGDESC_PL_SHOW_ADDTOCART_BUTTON_3' => 'Afficher un bouton d\'ajout au panier pour chaque produit ? Si le produit possède des options, un lien « Plus d\'infos » s\'affiche à la place.',
    'CFGTITLE_PL_ADDTOCART_TARGET_3' => 'Cible du bouton Ajouter au panier',
    'CFGDESC_PL_ADDTOCART_TARGET_3' => 'Comment réagir à un clic sur le bouton Ajouter au panier : <em>Cartpage</em> envoie tous les résultats vers la même page Web, <em>_self</em> envoie le résultat vers la page actuelle et <em>_blank</em> envoie chaque résultat vers une nouvelle page.',
    'CFGTITLE_PL_SHOW_IMAGE_3' => 'Afficher les images du produit ?',
    'CFGDESC_PL_SHOW_IMAGE_3' => 'Afficher l\'image de chaque produit ?',
    'CFGTITLE_PL_IMAGE_PRODUCT_HEIGHT_3' => 'Hauteur de l\'image',
    'CFGDESC_PL_IMAGE_PRODUCT_HEIGHT_3' => 'Si les images du produit doivent être affichées, quelle est la hauteur de chaque image ?',
    'CFGTITLE_PL_IMAGE_PRODUCT_WIDTH_3' => 'Largeur de l \'image',
    'CFGDESC_PL_IMAGE_PRODUCT_WIDTH_3' => 'Si les images du produit doivent être affichées, quelle est la largeur de chaque image ?',
    'CFGTITLE_PL_SHOW_DESCRIPTION_3' => 'Afficher les descriptions ?',
    'CFGDESC_PL_SHOW_DESCRIPTION_3' => 'Afficher la description de chaque produit ?',
    'CFGTITLE_PL_TRUNCATE_DESCRIPTION_3' => 'Tronquer les descriptions ?',
    'CFGDESC_PL_TRUNCATE_DESCRIPTION_3' => 'Si <em>Afficher les descriptions ?</em> est défini sur <b>true</b> et que ce champ a une valeur autre que 0 ou vide, les descriptions de produits seront tronquées à cette longueur – le code HTML sera supprimé.',
    'CFGTITLE_PL_SHOW_INACTIVE_3' => 'Afficher les produits et catégories inactifs ?',
    'CFGDESC_PL_SHOW_INACTIVE_3' => 'Définissez cette valeur sur <em>true</em> pour inclure les produits et catégories désactivés dans la liste.',
    'CFGTITLE_PL_SORT_PRODUCTS_BY_3' => 'Trier par : Champs',
    'CFGDESC_PL_SORT_PRODUCTS_BY_3' => 'Comment les produits sont triés dans une catégorie',
    'CFGTITLE_PL_SORT_ASC_DESC_3' => 'Trier par : Asc/Desc',
    'CFGDESC_PL_SORT_ASC_DESC_3' => 'Trier par ordre croissant ou décroissant',
    'CFGTITLE_PL_DEBUG_3' => 'Activer le débogage ?',
    'CFGDESC_PL_DEBUG_3' => 'Si défini sur <em>true</em>, les informations de débogage sont affichées',
    'CFGTITLE_PL_HEADER_LOGO_3' => 'Afficher le logo du magasin à l\'écran ?',
    'CFGDESC_PL_HEADER_LOGO_3' => 'Afficher le logo du magasin en haut de l\'écran ?',
    'CFGTITLE_PL_SHOW_PRICELIST_PAGE_HEADERS_3' => 'Afficher les en-têtes de page ?',
    'CFGDESC_PL_SHOW_PRICELIST_PAGE_HEADERS_3' => 'Si défini sur vrai, les en-têtes de page sur chaque page sont affichés (écran et impression).',
    'CFGTITLE_PL_SHOW_PRICELIST_PAGE_FOOTERS_3' => 'Afficher les pieds de page ?',
    'CFGDESC_PL_SHOW_PRICELIST_PAGE_FOOTERS_3' => 'Si défini sur vrai, les pieds de page de chaque page sont affichés (écran et impression).',
];

return $define;
