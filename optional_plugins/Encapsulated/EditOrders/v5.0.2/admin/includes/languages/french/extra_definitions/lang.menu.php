<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2025 Jan 18 Modified in v2.1.0 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_EDITORDERS' => 'Editeur de commandes',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_EDITORDERS' => 'Editeur de commandes (EO<sup>5</sup>) est un module d’administration Zen Cart qui permet aux administrateurs de modifier la commande d’un client. Pour plus d’informations, consultez le <a href="https://github.com/lat9/edit_orders/wiki" target="_blank" rel="noopener noreferrer">Wiki</a> de l’<em>Editeur de commandes</em>.',
// Admin configuration
    'CFGTITLE_EO_ADDRESSES_DISPLAY_ORDER' => 'Adresses, ordre d’affichage',
    'CFGDESC_EO_ADDRESSES_DISPLAY_ORDER' => 'Dans quel ordre, de gauche à droite, <em>Editeur de commandes</em> doit-il afficher les adresses d’une commande ? Choisissez <b>CSB</b> pour afficher le <em>Client</em>, la <em>livraison</em> puis la <em>Facturation</em> ; choisissez <b>CBS</b> pour afficher le <em>Client</em>, la <em>Facturation</em> puis la <em>Livraison</em>.',
    'CFGTITLE_EO_SHIPPING_DROPDOWN_STRIP_TAGS' => 'Supprimer les étiquettes du nom de module d’expédition ?',
    'CFGDESC_EO_SHIPPING_DROPDOWN_STRIP_TAGS' => 'Lorsque cette option est activée, les balises HTML et PHP présentes dans le titre d’un module d’expédition sont supprimées du texte affiché dans le menu déroulant d’expédition.<br><br>Si des balises partielles ou brisées sont présentes dans le titre, cela peut entraîner la suppression d’une quantité de texte plus importante que prévu. Si cela se produit, vous devrez mettre à jour le ou les modules d’expédition concernés ou désactiver cette option.',
    'CFGTITLE_EO_PRODUCT_PRICE_CALC_METHOD' => 'Calcul du prix du produit &mdash; Méthode',
    'CFGDESC_EO_PRODUCT_PRICE_CALC_METHOD' => 'Choisissez la <em>méthode</em> que &quot;EO&quot; utilise pour calculer les prix des produits lorsqu’une commande est mise à jour, l’une des suivantes :<ol><li><b>AutoSpecials</b> : le prix de chaque produit est recalculé comme si vous passiez la commande sur la vitrine. Si vos produits ont des attributs, cela permet de modifier les attributs d’un produit pour mettre à jour automatiquement le prix du produit associé.</li><li><b>Manuel</b> : le prix de chaque produit est basé sur le <b><i>prix saisi par l’administrateur</i></b> pour le produit.</li><li><b>Choisir</b> : la méthode de calcul du prix du produit varie en fonction de chaque commande, via la &quot;coche&quot; d’une case à cocher. La méthode par défaut utilisée est définie par le paramètre <em>Calcul du prix du produit &mdash; Par défaut</em>.</li></ol>',
    'CFGTITLE_EO_PRODUCT_PRICE_CALC_DEFAULT' => 'Calcul du prix du produit &mdash; Par défaut',
    'CFGDESC_EO_PRODUCT_PRICE_CALC_DEFAULT' => 'Si la méthode de calcul du prix du produit est <b>Choisir</b>, quelle méthode doit être utilisée comme méthode <em>par défaut</em> ?',
    'CFGTITLE_EO_STATUS_HISTORY_DISPLAY_ORDER' => 'Ordre d’affichage de l’historique des statuts',
    'CFGDESC_EO_STATUS_HISTORY_DISPLAY_ORDER' => 'Choisissez la manière dont <em>Editeur de commandes</em> affiche les enregistrements de l’historique des statuts d’une commande, soit tels qu’enregistrés (<b>Asc</b>), soit les plus récents en premier (<b>Desc</b>).',
    'CFGTITLE_EO_CUSTOMER_NOTIFICATION_DEFAULT' => 'Mise à jour du statut : notification client par défaut',
    'CFGDESC_EO_CUSTOMER_NOTIFICATION_DEFAULT' => 'Choisissez la valeur par défaut utilisée pour les boutons radio qui identifient si le client reçoit une notification lorsqu’un commentaire est ajouté à la commande.',
    'CFGTITLE_EO_SHOW_EDIT_ORDER_ICON' => 'Afficher l’icône Modifier la commande sur la liste des commandes ?',
    'CFGDESC_EO_SHOW_EDIT_ORDER_ICON' => 'L’icône d’édition doit-elle être affichée pour chaque commande dans la liste des commandes ? Par défaut : <b>Oui</b>',
    'CFGTITLE_EO_SHOW_EDIT_ORDER_BUTTON' => 'Emplacement du bouton « Modifier » dans la boîte latérale',
    'CFGDESC_EO_SHOW_EDIT_ORDER_BUTTON' => 'À quelle(s) position(s) le bouton <em>Modifier</em> doit-il être affiché sur l’affichage latéral de la commande actuellement sélectionnée, par rapport aux informations de la commande ? Par défaut : <b>Les deux</b>',
    'CFGTITLE_EO_DEBUG_ACTION_LEVEL' => 'Niveau d’action de débogage',
    'CFGDESC_EO_DEBUG_ACTION_LEVEL' => 'Lorsque cette option est activée et lorsque des actions sont effectuées par l’éditeur de commandes, des informations de débogage supplémentaires sont stockées dans un fichier journal.<br><br>L’activation du débogage entraînera la création d’un grand nombre de fichiers journaux et peut nuire aux performances du serveur. N’activez cette option qu’en cas d’absolue nécessité !',
];

return $define;
