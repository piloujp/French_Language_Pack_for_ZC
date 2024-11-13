<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jul 20 Modified in v1.5.7 $
 */

  define('MODULE_ORDER_TOTAL_GV_TITLE', TEXT_GV_NAMES);
  define('MODULE_ORDER_TOTAL_GV_HEADER', TEXT_GV_NAMES . '/Bons de réduction');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', TEXT_GV_NAMES);
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Appliquer le montant : ');
  define('MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE', TEXT_GV_REDEEM);
  define('TEXT_INVALID_REDEEM_AMOUNT', 'Il semble que le montant que vous avez essayé d\'appliquer et le solde de votre chèque-cadeau ne correspondent pas. Veuillez réessayer.');
  define('MODULE_ORDER_TOTAL_GV_USER_BALANCE', 'Solde disponible : ');
  
//-bof-one_page_checkout-lat9  *** 1 of 1 ***
if (defined('CHECKOUT_ONE_ENABLED') && CHECKOUT_ONE_ENABLED == 'true') {
  define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Pour utiliser les fonds du chèque-cadeau déjà présents sur votre compte, saisissez le montant que vous souhaitez appliquer dans la case « Appliquer le montant ». Vous devrez choisir un mode de paiement, puis cliquer sur le bouton Soumettre en bas de la page pour appliquer les fonds à votre commande.</p><p>Si vous utilisez un <em>nouveau</em> chèque-cadeau, vous devez saisir le numéro dans la case à côté de « Code de réduction ». Le montant utilisé sera ajouté à votre compte lorsque vous cliquerez sur le bouton à droite.</p>');
} else {
  define('MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS', '<p>Pour utiliser les fonds du chèque-cadeau déjà présents sur votre compte, saisissez le montant que vous souhaitez appliquer dans la case « Appliquer le montant ». Vous devrez choisir un mode de paiement, puis cliquer sur le bouton Continuer pour appliquer les fonds à votre panier.</p><p>Si vous utilisez un <em>nouveau</em> chèque-cadeau, vous devez saisir le numéro dans la case située à côté de Code d\'échange. Le montant utilisé sera ajouté à votre compte lorsque vous cliquerez sur le bouton Continuer.</p>');
}
//-eof-one_page_checkout-lat9  *** 1 of 1 ***
  define('MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR', ' Paramètre Inclure la taxe = true, ne devrait se produire que lorsque recalculer = None');
