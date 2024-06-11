<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE' => 'Authorize.net (SIM)',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE' => 'Carte de Crédit',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE' => 'Type : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER' => 'Propriétaire de la carte de crédit : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER' => 'Numéro de la carte de crédit : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES' => 'Date d\'expiration la carte : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV' => 'Numéro CVV : ',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK' => 'Qu\'est-ce que c\'est ?',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER' => '* Le nom du propriétaire de la carte de crédit doit comporter au moins  '.CC_OWNER_MIN_LENGTH.' caractères.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER' => '* Le numéro de carte doit comporter au moins '.CC_NUMBER_MIN_LENGTH.' caractères.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV' => '* Les 3 or 4 chiffres du numéro CVV doivent être recopiés à partir du dos de la carte bancaire.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE' => 'Une erreur est survenue lors du traitement de votre carte de crédit. Merci de bien vouloir recommencer.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE' => 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou contacter votre banque pour plus d\'informations.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR' => 'Erreur de carte de crédit !',
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Connexion marchand Authorize.net</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br><br>Informations sur les tests : <br><b>Numéros de carte de crédit à approbation automatique : </b><br>Visa#: 4007000000027<br>MasterCard#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Note:</b> Ces numéros de carte bancaire renverront un refus en mode live, et une approbation en mode test.  N\'importe quelle date future peut être utilisée pour la date d\'expiration et n\'importe quel numéro à 3 ou 4 chiffres (AMEX) peut être utilisé pour le code CVV.<br><br><b>Numéro de carte de crédit à refus automatique : </b><br><br>Card #: 4222222222222<br><br>Ce numéro de carte peut être utilisé pour recevoir des avis de refus à des fins de test.' : '') . '<br><br><strong>PARAMÈTRES</strong><br>Vos paramètres d\'URL de « réponse », de « reçu » et de « relais » dans votre profil de marchand Authorize.net peuvent être laissés VIDE, ou si nécessaire, vous pouvez définir « l\'URL de relais » pour qu\'elle pointe vers https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>Si vous rencontrez des problèmes, consultez <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">l\'article FAQ sur la configuration de la carte SIM.</a> pour obtenir des instructions de configuration détaillées.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Cliquez ici pour créer un compte</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Cliquez pour vous connecter à la zone marchand Authorize.net</a><br><br><strong>Requis :</strong><br><hr>*<strong>Compte Authorize.net</strong> (voir le lien ci-dessus pour vous inscrire)<br>*<strong>Nom d\'utilisateur Authorize.net et clé de transaction</strong> disponibles depuis votre espace marchand<br><br>Consultez <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">l\'article FAQ sur la configuration de la carte SIM</a> pour obtenir des instructions de configuration détaillées.';
}
return $define;
