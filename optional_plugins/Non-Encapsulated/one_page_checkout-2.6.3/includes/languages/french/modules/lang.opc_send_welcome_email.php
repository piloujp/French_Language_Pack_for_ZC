<?php
/**
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 2025 Sep 24 New in v2.2.0 $
 *
 * @since ZC v2.2.0
 */
$define = [
    'EMAIL_SUBJECT' => 'Bienvenue chez ' . STORE_NAME,
    'EMAIL_GREET_MR' => 'Cher M. %s,' . "\n\n",
    'EMAIL_GREET_MS' => 'Chère Madame %s,' . "\n\n",
    'EMAIL_GREET_NONE' => 'Cher %s,' . "\n\n",
    'EMAIL_WELCOME' => 'Nous tenons à vous souhaiter la bienvenue chez <strong>' . STORE_NAME . '</strong>.',
    'EMAIL_SEPARATOR' => '--------------------',
    'EMAIL_COUPON_INCENTIVE_HEADER' => 'Félicitations ! Pour rendre votre prochaine visite sur notre boutique en ligne encore plus avantageuse, vous trouverez ci-dessous les détails d’un bon de réduction créé spécialement pour vous !' . "\n\n",
    'EMAIL_COUPON_REDEEM' => 'Pour utiliser le bon de réduction, saisissez le code « ' . TEXT_GV_REDEEM . ' » lors de la validation de votre commande : <strong>%s</strong>' . "\n\n",
    'EMAIL_GV_INCENTIVE_HEADER' => 'Rien que pour votre visite d’aujourd’hui, nous vous avons envoyé un ' . TEXT_GV_NAME . ' d’une valeur de %s !' . "\n",
    'EMAIL_GV_REDEEM' => 'Le ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' est : %s' . "\n\n" . 'Vous pouvez saisir le « ' . TEXT_GV_REDEEM . ' » lors du paiement, après avoir effectué vos choix dans la boutique.　',
    'EMAIL_GV_LINK' => ' Ou bien, vous pouvez l’utiliser dès maintenant en suivant ce lien : ' . "\n",
    'EMAIL_GV_LINK_OTHER' => 'Une fois que vous avez ajouté le ' . TEXT_GV_NAME . ' à votre compte, vous pouvez l’utiliser pour vous-même ou l’envoyer à un ami !' . "\n\n",
    'EMAIL_TEXT' => 'Vous disposez désormais d’un compte auprès de ' . STORE_NAME . ' vous permettant de :' . "\n\n<ul>" . '<li><strong>Historique des commandes</strong> - Consultez les détails de vos commandes.</li>' . "\n\n" . '<li><strong>Panier permanent</strong> - Les produits ajoutés à votre panier y restent jusqu’à ce qu’ils soient retirés ou achetés.</li>' . "\n\n" . '<li><strong>Carnet d’adresses</strong> - Enregistrez des adresses supplémentaires (par exemple, pour envoyer un cadeau).</li>' . "\n\n" . '<li><strong>Avis sur les produits</strong> - Partagez votre opinion sur nos produits avec d’autres clients.</li>' . "\n\n</ul>",
    'EMAIL_CONTACT' => 'Pour obtenir de l’aide concernant l’un de nos services en ligne, veuillez envoyer un e-mail au propriétaire de la boutique : <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS . "</a>\n\n",
    'EMAIL_GV_CLOSURE' => "\n" . 'Cordialement,' . "\n\n" . STORE_OWNER . "\nPropriétaire du magasin\n\n" . '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG . "</a>\n\n",
    'EMAIL_DISCLAIMER_NEW_CUSTOMER' => 'Cette adresse e-mail nous a été communiquée par vous ou par l’un de nos clients. Si vous n’avez pas créé de compte ou si vous pensez avoir reçu cet e-mail par erreur, veuillez envoyer un e-mail à %s.',
];
return $define;
