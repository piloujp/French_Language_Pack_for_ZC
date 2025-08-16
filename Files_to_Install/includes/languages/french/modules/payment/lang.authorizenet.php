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
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER' => '* Le nom du propriétaire de la carte de crédit doit comporter au moins  ' . CC_OWNER_MIN_LENGTH . ' caractères.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER' => '* Le numéro de carte doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV' => '* Les 3 or 4 chiffres du numéro CVV doivent être recopiés à partir du dos de la carte bancaire.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE' => 'Une erreur est survenue lors du traitement de votre carte de crédit. Merci de bien vouloir recommencer.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE' => 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou contacter votre banque pour plus d\'informations.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR' => 'Erreur de carte de crédit !',
// bof constant configuration titles and descriptions for payment module authorizenet
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_STATUS' => 'Activer le module « Authorize.net »',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_STATUS' => 'Souhaitez-vous accepter les paiements Authorize.net ?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_LOGIN' => 'ID de connexion',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_LOGIN' => 'L\'ID de connexion API utilisé pour votre compte Authorize.net.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_TXNKEY' => 'Clé de transaction',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_TXNKEY' => 'Clé de transaction utilisée pour envoyer des données de transaction.<br>Voir <a href="https://support.authorize.net/s/article/How-do-I-obtain-my-API-Login-ID-and-Transaction-Key" rel="noopener" target="_blank">Comment obtenir mon identifiant de connexion API et ma clé de transaction</a>',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_SECURITYKEY' => 'Clé de sécurité',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_SECURITYKEY' => 'Clé de sécurité utilisée pour valider les transactions (128 caractères).<br>Voir <a href="https://support.authorize.net/s/article/What-is-a-Signature-Key" rel="noopener" target="_blank">Qu\'est-ce qu\'une clé de signature</a> pour obtenir des instructions.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_TESTMODE' => 'Mode de transaction',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_TESTMODE' => 'Mode de transaction utilisé pour le traitement des commandes.<br><strong>Production</strong>=Traitement en direct avec des informations d\'identification de compte réelles<br><strong>Test</strong>=Simulations avec des informations d\'identification de compte réelles<br><strong>Sandbox</strong>=Utilisez une clé de transaction sandbox spéciale pour effectuer des tests spéciaux des réponses de transaction réussies/échouées (obtenez les informations d\'identification sandbox via <a href="https://developer.authorize.net/hello_world/sandbox/">developer.authorize.net</a>)',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_CURRENCY' => 'Devise prise en charge',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_CURRENCY' => 'Quelle devise votre compte Authnet Gateway est-il configuré pour accepter ?<br>(Les achats dans toute autre devise seront pré-convertis dans cette devise avant l\'envoi en utilisant les taux de change définis dans l\'administration de votre boutique.)',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_METHOD' => 'Méthode de transaction',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_METHOD' => 'Méthode de transaction utilisée pour le traitement des commandes.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AUTHORIZATION_TYPE' => 'Type d\'autorisation',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AUTHORIZATION_TYPE' => 'Souhaitez-vous que les transactions par carte de crédit soient autorisées uniquement ou chargées immédiatement ?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_USE_CVV' => 'Demande de numéro CVV',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_USE_CVV' => 'Voulez-vous demander au client le numéro CVV de la carte ?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_EMAIL_CUSTOMER' => 'Notifications aux clients',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_EMAIL_CUSTOMER' => 'Authorize.Net doit-il envoyer un reçu par courrier électronique au client ?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_ZONE' => 'Zone de paiement',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_ZONE' => 'Si une zone est sélectionnée, activez uniquement ce mode de paiement pour cette zone.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_ORDER_STATUS_ID' => 'Définir le statut de la commande',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_ORDER_STATUS_ID' => 'Définissez le statut des commandes dont le paiement a été effectué sur cette valeur :',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_SORT_ORDER' => 'Ordre d\'affichage.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_GATEWAY_MODE' => 'Mode de la passerelle',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_GATEWAY_MODE' => 'Où les informations de carte de crédit des clients doivent-elles être collectées ?<br><b>onsite</b> = Sur le site de la boutique (nécessite SSL)<br><b>offsite</b> = Sur le site d\'authorize.net',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_STORE_DATA' => 'Activer le stockage dans la base de données',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_STORE_DATA' => 'Voulez-vous enregistrer les données de communication de la passerelle dans la base de données ?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_DEBUGGING' => 'Mode débogage',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_DEBUGGING' => 'Activer la journalisation de débogage ? Un journal détaillé des transactions échouées peut être envoyé par courrier électronique au propriétaire du magasin.',
// eof constant configuration titles and descriptions for payment module authorizenet
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Connexion marchand Authorize.net</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br><br>Informations sur les tests : <br><b>Numéros de carte de crédit à approbation automatique : </b><br>Visa#: 4007000000027<br>MasterCard#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Note:</b> Ces numéros de carte bancaire renverront un refus en mode live, et une approbation en mode test.  N\'importe quelle date future peut être utilisée pour la date d\'expiration et n\'importe quel numéro à 3 ou 4 chiffres (AMEX) peut être utilisé pour le code CVV.<br><br><b>Numéro de carte de crédit à refus automatique : </b><br><br>Card #: 4222222222222<br><br>Ce numéro de carte peut être utilisé pour recevoir des avis de refus à des fins de test.' : '') . '<br><br><strong>PARAMÈTRES</strong><br>Vos paramètres d\'URL de « réponse », de « reçu » et de « relais » dans votre profil de marchand Authorize.net peuvent être laissés VIDE, ou si nécessaire, vous pouvez définir « l\'URL de relais » pour qu\'elle pointe vers https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>Si vous rencontrez des problèmes, consultez <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">l\'article FAQ sur la configuration de la carte SIM.</a> pour obtenir des instructions de configuration détaillées.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Cliquez ici pour créer un compte</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Cliquez pour vous connecter à la zone marchand Authorize.net</a><br><br><strong>Requis :</strong><br><hr>*<strong>Compte Authorize.net</strong> (voir le lien ci-dessus pour vous inscrire)<br>*<strong>Nom d\'utilisateur Authorize.net et clé de transaction</strong> disponibles depuis votre espace marchand<br><br>Consultez <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">l\'article FAQ sur la configuration de la carte SIM</a> pour obtenir des instructions de configuration détaillées.';
}
return $define;
