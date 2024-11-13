<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 10 Modified in v1.5.7 $
 */

  define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Bon de réduction');
  define('MODULE_ORDER_TOTAL_COUPON_HEADER', TEXT_GV_NAMES . '/Bon de réduction');
  define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Bon de réduction');
  define('MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE', TEXT_GV_REDEEM);

//-bof-one_page_checkout-lat9  *** 1 of 1 ***
if (defined ('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED === 'true') {
  define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Veuillez saisir votre code promo dans la case ci-dessous. Votre coupon sera appliqué au total et reflété sur l\'affichage de votre commande après avoir cliqué sur le bouton à droite ou avoir soumis votre commande. Attention : vous ne pouvez utiliser qu\'un seul coupon par commande.</p>');
} else {
  define('MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS', '<p>Veuillez saisir votre code promo dans la case ci-dessous. Votre coupon sera appliqué au total et reflété dans votre panier après avoir cliqué sur Continuer. Attention : vous ne pouvez utiliser qu\'un seul coupon par commande.</p>');
}
//-eof-one_page_checkout-lat9  *** 1 of 1 ***

  define('MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE', 'Votre code de remboursement actuel :');
  define('TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER', 'REMOVE');
  define('MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS', '<p>Pour supprimer un coupon de réduction de cette commande, remplacez le code coupon par : ' . TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER . '</p>');
  define('TEXT_REMOVE_REDEEM_COUPON', 'Coupon de réduction supprimé sur demande !');
  define('MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR', ' Paramètre Inclure la taxe = true, ne devrait se produire que lorsque recalculer = None');
