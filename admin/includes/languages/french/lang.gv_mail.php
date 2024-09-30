<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Envoi de ' . '%%TEXT_GV_NAME%%' . ' aux clients',
    'TEXT_FROM' => 'De :',
    'TEXT_TO' => 'E-mail à :',
    'TEXT_TO_CUSTOMERS' => 'Aux listes de clients :',
    'TEXT_TO_EMAIL' => 'ou à une adresse e-mail :',
    'TEXT_TO_EMAIL_NAME' => 'Nom (facultatif) :',
    'TEXT_TO_EMAIL_INFO' => '<span class="smallText">Choisissez une liste dans la liste déroulante ci-dessus ou utilisez les champs suivants pour envoyer un seul e-mail.</span>',
    'TEXT_SUBJECT' => 'Sujet :',
    'TEXT_AMOUNT' => 'Valeur du ' . '%%TEXT_GV_NAME%%' . ' : ',
    'ERROR_GV_AMOUNT' => 'Veuillez indiquer un montant sous forme de nombre sans symbole, par ex. : 25,00.',
    'TEXT_AMOUNT_INFO' => '%%ERROR_GV_AMOUNT%%',
    'TEXT_HTML_MESSAGE' => 'Message HTML : ',
    'TEXT_MESSAGE' => 'Message au format Text-Only : ',
    'TEXT_MESSAGE_INFO' => '<p>Inclut éventuellement un message spécifique, inséré avant le text standard du ' . '%%TEXT_GV_NAME%%' . '.</p>',
    'NOTICE_EMAIL_SENT_TO' => 'NOTE : %1s E-mail(s) envoyé à %2s',
    'ERROR_NO_CUSTOMER_SELECTED' => 'Erreur : aucun client sélectionné.',
    'ERROR_NO_AMOUNT_ENTERED' => 'Erreur : valeur de certificat invalide.',
    'ERROR_NO_SUBJECT' => 'Erreur : aucun sujet Email indiqué.',
    'TEXT_GV_ANNOUNCE' => 'Nous sommes heureux de vous offrir un ' . '%%TEXT_GV_NAME%%' . ' de %s.',
    'TEXT_GV_TO_REDEEM_TEXT' => 'Avec le lien suivant, vous pouvez utiliser le %%TEXT_GV_NAME%%' . "\n\n " . '%1$s%2$s' . "\n\n" . 'ou visitez' . STORE_NAME . " à " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'et entrez le code %2$s sur la page de paiement.',
    'TEXT_GV_TO_REDEEM_HTML' => '<a href="%1$s%2$s"> Cliquez ici pour utiliser le %%TEXT_GV_NAME%%</a> ou visitez <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> et saisissez le code <strong>%2$s</strong> sur la page de paiement.',
];

return $define;
