<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Groupes de Prix',
    'TABLE_HEADING_GROUP_NAME' => 'Nom du Groupe',
    'TABLE_HEADING_GROUP_AMOUNT' => '% de Réduction',
    'TEXT_HEADING_NEW_PRICING_GROUP' => 'Nouveau groupe de prix',
    'TEXT_HEADING_EDIT_PRICING_GROUP' => 'Éditer le groupe de prix',
    'TEXT_HEADING_DELETE_PRICING_GROUP' => 'Supprimer le groupe de prix',
    'TEXT_NEW_INTRO' => 'Veuillez entrer les informations pour ce nouveau groupe',
    'TEXT_DELETE_INTRO' => 'Êtes-vous certain(e) de vouloir supprimer ce groupe ?',
    'TEXT_DELETE_PRICING_GROUP' => 'Supprimer le groupe de prix',
    'TEXT_DELETE_WARNING_GROUP_MEMBERS' => '<b>ATTENTION :</b> Il y a %s clients encore liés à cette catégorie !',
    'TEXT_GROUP_PRICING_NAME' => 'Nom du groupe : ',
    'TEXT_GROUP_PRICING_AMOUNT' => 'Pourcentage de réduction : ',
    'TEXT_CUSTOMERS' => 'Clients dans le groupe  :',
    'ERROR_GROUP_PRICING_CUSTOMERS_EXIST' => 'ERREUR : Des clients existent dans ce groupe. Veuillez confirmer que vous souhaitez enlever tous les membres du groupe et les supprimer.',
    'ERROR_MODULE_NOT_CONFIGURED' => 'NOTE : Vous avez défini des groupes de prix, mais vous n\'avez pas activé le module total-commande de groupes de prix.<br>Veuillez aller dans Admin-&gt;Modules-&gt;Order Total-&gt;Membership Discount (ot_group_pricing) et installez/configurez le module.',
];

return $define;
