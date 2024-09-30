<?php
$define = [
    'MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_WPP' => 'Paiement PayPal Pro',
    'MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_NONUSA' => 'Paiement PayPal Pro sur site Web',
    'MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_PRO20' => 'Paiements PayPal Pro sur site Web Édition (FR)',
    'MODULE_PAYMENT_PAYPALDP_TEXT_DESCRIPTION' => 'Carte de crédit',
    'MODULE_PAYMENT_PAYPALDP_TEXT_TITLE' => 'Carte de crédit',
    'MODULE_PAYMENT_PAYPALDP_DP_TEXT_TYPE' => 'Carte de crédit (WPP)',
    'MODULE_PAYMENT_PAYPALDP_PF_TEXT_TYPE' => 'Carte de crédit (PF)',
    'MODULE_PAYMENT_PAYPALDP_ERROR_HEADING' => 'Nous sommes désolés, mais nous n\'avons pas pu traiter votre carte de crédit.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR' => 'Les informations de carte de crédit que vous avez entré contiennent une erreur. Veuillez vérifier puis réessayer.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME' => 'Prénom du propriétaire de la carte: ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME' => 'Nom du propriétaire de la carte: ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER' => 'Propriétaire de la carte: ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE' => 'Type de carte: ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER' => 'Numéro de carte: ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES' => 'Date d\'expiration de la carte: ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE' => 'Date d\'émission de la carte: ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER' => 'Date d\'émission Maestro : ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER' => 'Numéro CVV: ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION' => '(3 derniers chiffres au dos de votre carte)',
    'MODULE_PAYMENT_PAYPALDP_TEXT_TRANSACTION_FOR' => 'Transaction pour',
    'MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED' => 'Votre carte de crédit a été refusée. Veuillez essayer une autre carte ou contactez votre banque pour plus d\'informations.',
    'MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED' => 'Nous n\'avons pas pu valider votre commande. Veuillez sélectionner un autre mode de paiement, ou contactez nous pour trouver une solution.',
    'MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE' => 'Nous n\'avons pas pu traiter votre commande. Veuillez sélectionner un autre mode de paiement, ou contactez nous pour trouver une solution.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR' => 'Une erreur est survenue en contactant l\'organisme de paiement. Veuillez réessayer, sélectionner un autre mode de paiement, ou contactez nous pour trouver une solution.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE' => 'Cher propriétaire de boutique,'."\n".'Une erreur est survenue en essayant d\'initialiser une transaction de paiement-validation. Par courtoisie, uniquement le "numéro" d\'erreur a été affiché à votre client. Vous trouverez le détail de cette erreur ci-dessous.'."\n\n",
    'MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT' => 'ALERTE: erreur de paiement direct PayPal',
    'MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR' => 'Les informations d\'adresse que vous avez entré ne semblent pas valides ou ne correspondent pas. Veuillez choisir ou ajouter une adresse différente puis réessayer.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR' => 'PayPal n\'a pas pu solder cette transaction correctement. Veuillez choisir une autre option de paiement ou changer les options de solde dans votre compte PayPal avant de procéder au paiement.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_ERROR' => 'Une erreur est survenue en essayant de traiter votre carte de crédit. Veuillez réessayer, sélectionner un autre mode de paiement, ou contactez nous pour trouver une solution.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD' => 'Nous nous excusons pour la gêne occasionnée, mais nous n\'acceptons pas le type de carte de crédit que vous avez saisi. Veuillez utiliser une autre carte de crédit ou vérifier que les informations que vous avez entré sont correctes, ou contactez nous pour trouver une solution.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN' => 'Il y a eu un problème à la validation de votre compte. Veuillez réessayer.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER' => '* Le nom du propriétaire de la carte doit comprendre au moins '.CC_OWNER_MIN_LENGTH.' caractères.\n',
    'MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER' => '* Le numéro de carte de crédit doit comprendre au moins '.CC_NUMBER_MIN_LENGTH.' caractères.\n',
    'MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV' => '* Le numéro CVV à 3 ou 4 chiffres doit être relevé au dos de la carte de crédit.\n',
    'MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT' => 'ATTENTION: Échec de la vérification d\'adresse. ',
    'MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT' => 'ATTENTION: Échec de la vérification du code CVV. ',
    'MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT' => ' Commande en attente de validation par le propriétaire de la boutique.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR' => 'L\'état assigné à votre compte est invalide. Veuillez vous rendre dans les paramètres de votre compte et le changer.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR' => 'Nous nous excusons pour la gêne occasionnée. Le paiement n\'a pas pu être initialisé car le compte PayPal configuré par le propriétaire de la boutique n\'est pas un compte Paiement PayPal Pro ou les services du portail PayPal n\'ont pas été achetés. Ou vous avez essayé de payer avec une carte AmEx dont le marchand n\'a pas autorisé le support. Veuillez choisir un autre mode de paiement pour votre commande ou peut-être une autre carte de crédit.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR' => 'Nous nous excusons pour la gêne occasionnée. Le paiement n\'a pas pu être initialisé car le compte PayPal configuré par le propriétaire de la boutique n\'est pas un compte Paiement PayPal Pro US ou les services du portail PayPal n\'ont pas été achetés (ou n\'ont pas été activés en acceptant les conditions de facturation sur le site Web PayPal). Veuillez choisir un autre mode de paiement pour votre commande.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR' => 'Nous nous excusons pour la gêne occasionnée. Le paiement n\'a pas pu être initialisé car le compte PayPal configuré par le propriétaire de la boutique n\'est pas un compte Paiement PayPal Pro 2.0 (UK) ou les services du portail PayPal n\'ont pas été achetés ou activés correctement. Veuillez choisir un autre mode de paiement pour votre commande.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR' => 'Nous nous excusons pour la gêne occasionnée. Les paramètres d\'identification du compte PayPal ne sont pas encore définis, ou les informations de sécurité de l\'API sont incorrectes. Nous ne pouvons pas terminer votre transaction. Veuillez avertir le propriétaire de la boutique afin qu\'il corrige ce problème.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR' => 'Nous sommes désolé -- Le compte PayPal configuré par le propriétaire de la boutique est situé dans un pays qui n\'est pas pris en charge par Paiement PayPal Pro pour le moment. Veuillez choisir un autre mode de paiement pour finaliser votre commande.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR' => 'Nous sommes désolé -- La carte de crédit que vous utilisez n\'est pas compatible avec la devise que vous avez choisie pour l\'encaissement. Veuillez modifier votre choix de devise ou choisir un autre mode de paiement pour finaliser votre commande.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED' => '<span class="alert">&nbsp;(NOTE: le module n\'est pas encore configuré)</span>',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CARD_TYPE_NOT_SUPPORTED' => 'Vous avez essayé de payer votre achat en utilisant une carte de crédit qui n\'est pas acceptée par ce marchand. Nous nous excusons pour la gêne occasionnée et nous vous invitons à réessayer avec un type de carte différent, ou contacter le propriétaire de la boutique pour d\'autres choix de modes de paiement.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_TRY_OTHER_PAYMENT_METHOD' => 'PayPal a refusé la source de financement que vous avez sélectionnée. Veuillez essayer un autre type de paiement dans votre compte PayPal, ou essayez un autre mode de paiement. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR' => 'Il y a eu un problème en récupérant les détails de la transaction. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR' => 'Il y a eu un problème en recherchant les transactions correspondant aux critères que vous avez indiqué. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR' => 'Il y a eu un problème en annulant la transaction. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR' => 'Il y a eu un problème en remboursant le montant de transaction spécifié. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR' => 'Il y a eu un problème à l\'autorisation de la transaction. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR' => 'Il y a eu un problème pour prélever la transaction. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR' => 'Votre demande de remboursement a été rejetée par PayPal.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT' => 'Vous avez demandé un remboursement partiel mais n\'avez pas indiqué de montant.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR' => 'Vous avez demandé un remboursement complet mais n\'avez pas confirmé votre intention en cochant la case de confirmation.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT' => 'Vous avez demandé une autorisation mais vous n\'avez pas indiqué de montant.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT' => 'Vous avez demandé un prélèvement mais n\'avez pas indiqué de montant.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR' => 'Vous avez demandé un prélèvement de fonds mais n\'avez pas confirmé votre intention en cochant la case de confirmation.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED' => 'Remboursement PayPal initié pour %s. ID Transaction: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED' => 'Autorisation PayPal initiée pour %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED' => 'Prélèvement PayPal initié pour %s. ID du reçu: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED' => 'Demande d\'annulation PayPal initiée. ID Transaction: %s. Rafraîchissez la page pour voir les détails de la confirmation mis à jour dans la rubrique Historique des états de commande/Commentaires.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR' => 'Il y a eu une erreur dans la tentative de transaction. Veuillez lire le guide de référence API ou les journaux de transaction pour des informations détaillées.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR' => 'Nous nous excusons de la gêne occasionnée; cependant, pour le moment nous ne pouvons pas utiliser ce mode de paiement pour traiter les commandes provenant du lieu géographique que vous avez sélectionné comme votre adresse de compte. Veuillez continuer en utilisant l\'encaissement normal et un autre mode de paiement pour finaliser votre commande.',
    'CENTINEL_AUTHENTICATION_ERROR' => 'Échec de l\'authentification : votre institution financière a indiqué qu\'elle n\'a pas pu authentifier cette transaction. Pour vous protéger contre toute utilisation non autorisée, cette carte ne peut pas être utilisée pour finaliser votre achat. Vous pouvez finaliser l\'achat en sélectionnant un autre mode de paiement.',
    'CENTINEL_PROCESSING_ERROR' => 'Un problème est survenu lors de l\'obtention de l\'autorisation pour votre transaction. Veuillez saisir à nouveau vos informations de paiement et/ou choisir un autre mode de paiement.',
    'CENTINEL_ERROR_CODE_8000' => '8000',
    'CENTINEL_ERROR_CODE_8000_DESC' => 'Protocole non reconnu, doit être http:// ou https://',
    'CENTINEL_ERROR_CODE_8010' => '8010',
    'CENTINEL_ERROR_CODE_8010_DESC' => 'Impossible de communiquer avec le serveur MAPS',
    'CENTINEL_ERROR_CODE_8020' => '8020',
    'CENTINEL_ERROR_CODE_8020_DESC' => 'Erreur lors de l\'analyse de la réponse XML',
    'CENTINEL_ERROR_CODE_8030' => '8030',
    'CENTINEL_ERROR_CODE_8030_DESC' => 'Délai de communication rencontré',
    'CENTINEL_ERROR_CODE_1001' => '1001',
    'CENTINEL_ERROR_CODE_1001_DESC' => "Problème de configuration de compte avec Cardinal Centinel. Veuillez contacter immédiatement votre représentant Cardinal à Implement@cardinalcommerce.com. Vos transactions ne seront pas protégées par la responsabilité de rétrofacturation jusqu'à ce que ce problème soit résolu.\n\n" . 'Il y a 3 étapes pour configurer correctement votre service Cardinal 3D-Secure : ' . "\n1-Connectez-vous à l'URL d'administration du commerçant Cardinal fournie dans votre package de bienvenue (PAS l'URL de test) et acceptez le contrat de licence.\2-Définissez un mot de passe de transaction.\n3-Copiez votre identifiant de marchand Cardinal et votre mot de passe de transaction Cardinal dans votre module PayPal ZC.",
    'CENTINEL_ERROR_CODE_4243' => '4243',
    'CENTINEL_ERROR_CODE_4243_DESC' => 'Problème de configuration de compte avec Cardinal Centinel. Veuillez contacter immédiatement votre représentant Cardinal à l\'adresse Implement@cardinalcommerce.com et informez-le que vous obtenez le numéro d\'erreur 4243 lorsque vous tentez d\'utiliser 3D Secure avec votre site Zen Cart et votre compte PayPal et que vous devez activer le module processeur dans votre compte. Vos transactions ne seront pas protégées par la responsabilité de rétrofacturation jusqu\'à ce que ce problème soit résolu.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK' => 'Confirmer',
    'MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR' => 'Vous avez demandé à annuler une transaction mais n\'avez pas confirmé votre intention en cochant la case de confirmation.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK' => 'Confirmer',
    'MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR' => 'Vous avez demandé une autorisation mais n\'avez pas confirmé votre intention en cochant la case de confirmation.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Prénom : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Nom : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Société : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Adresse 1 : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Adresse 2 : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Ville : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Région / Département : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Code postal : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Pays : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'E-mail de l\'acheteur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'Identifiant Ebay : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'Identifiant de l\'acheteur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Statut de l\'acheteur : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Statut de l\'adresse : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Type de paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Statut du paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Raison de la mise en attente : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Facture : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Date de paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Devise : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Montant brut : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Commission de paiement : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Taux de change : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Articles du panier : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Type Transaction : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'ID Transaction : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'ID Transaction parente : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE' => '<strong>Remboursement de la commande</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL' => 'Si vous voulez rembourser cette commande entièrement, cliquez ici : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL' => 'Effectuer un remboursement total',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL' => 'Effectuer un remboursement partiel',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR' => '<br />... ou entrez le montant du remboursement partiel ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT' => 'Entrez le ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT' => 'montant du remboursement ici et cliquez sur Remboursement Partiel',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX' => '*Un remboursement total ne doit pas être effectué après un remboursement partiel.<br />*Plusieurs remboursements partiels sont autorisés à hauteur du solde non remboursé restant.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS' => '<strong>Note à afficher au client :</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Remboursé par le propriétaire de la boutique.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK' => 'Confirmer : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE' => '<strong>Autorisations de commande</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT' => 'Si vous voulez autoriser une partie de cette commande, entrez le montant ici : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL' => 'Donner l\'autorisation',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE' => '<strong>Autorisations de prélèvement</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL' => 'Si vous voulez prélever tout ou une partie du montant autorisé pour cette commande, entrez le montant à prélever et choisissez s\'il s\'agit du prélevement final pour cette commande. Cochez la case de confirmation avant de soumettre votre demande de prélevement.<br />',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL' => 'Faire un prélèvement',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT' => 'Montant à prélever : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT' => 'Est-ce le prélèvement final ?',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS' => '<strong>Note à afficher au client :</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE' => 'Merci pour votre commande.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK' => 'Confirmer : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE' => '<strong>Annuler autorisations de commande</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID' => 'Si vous voulez annuler une autorisation, entrez l\'ID de l\'autorisation ici, et confirmez : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS' => '<strong>Note à afficher au client : </strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE' => 'Merci de votre intérêt pour notre boutique en ligne.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL' => 'Faire une annulation',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE' => 'État Transaction : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE' => 'Code Autorisation : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR' => 'AVS Adresse correspondante : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP' => 'AVS ZIP correspondant : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH' => 'CVV2 correspondant : ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE' => 'Jours pour accepter : ',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Frais uniques en rapport ',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Surtaxes',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG' => 'Frais de manutention et autres charges applicables',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Remises',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Rabais appliqués, incluant les bons de réduction, chèques-cadeaux, etc',
    'MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT' => 'État du contrôle de paiement frauduleux : ',
    'MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO' => 'Ceci est une notification automatique pour vous informer que PayPal a marqué le paiement d\'une nouvelle commande comme &quot;Paiement devant être contrôlé&quot; par leur équipe anti-fraude. Habituellement, le contrôle est effectué dans les 36 heures. Il vous est FORTEMENT RECOMMANDÉ de NE PAS EXPÉDIER la commande tant que le contrôle n\'est pas terminé. Vous pouvez voir le dernier état du contrôle de la commande en vous connectant à votre compte PayPal et en listant les transactions récentes.',
    'MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS' => 'Tous les articles dans votre panier (voir les détails dans la boutique et sur votre reçu de la boutique).',
// bof constant configuration titles and descriptions for order total module paypaldp
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_STATUS' => 'Activer ce module de paiement',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_STATUS' => 'Voulez-vous activer ce module de paiement ? Utilisez le paramètre « <strong>Retired</strong> » si vous envisagez de supprimer ce module de paiement mais que vous avez encore des actions administratives à effectuer sur les commandes passées avec ce module.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_SORT_ORDER' => 'Ordre d\'affichage.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_ZONE' => 'Zone de paiement',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_ZONE' => 'Si une zone est sélectionnée, activez uniquement ce mode de paiement pour cette zone.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_ORDER_STATUS_ID' => 'Définir le statut de la commande',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_ORDER_STATUS_ID' => 'Définissez le statut des commandes dont le paiement a été effectué sur cette valeur.<br><strong>Recommandé : « En cours »</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_ORDER_PENDING_STATUS_ID' => 'Définir le statut des commandes impayées',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_ORDER_PENDING_STATUS_ID' => 'Définissez le statut des commandes impayées sur cette valeur.<br><strong>Recommandé : « En attente »</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_REFUNDED_STATUS_ID' => 'Définir le statut des commandes remboursées',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_REFUNDED_STATUS_ID' => 'Définissez le statut des commandes remboursées sur cette valeur.<br><strong>Recommandé : « En attente »</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_TRANSACTION_MODE' => 'Action de paiement',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_TRANSACTION_MODE' => 'Comment souhaitez-vous obtenir le paiement ?<br><strong>Défaut : vente finale</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_CURRENCY' => 'Devise de transaction',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_CURRENCY' => 'Dans quelle devise la commande doit-elle être envoyée à PayPal ? <br>REMARQUE : si une devise non prise en charge est envoyée à PayPal, elle sera automatiquement convertie en USD (ou GBP si vous avez un compte en Angleterre).<br><strong>Par défaut : devise sélectionnée</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_MERCHANT_COUNTRY' => 'Pays du marchand',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_MERCHANT_COUNTRY' => 'Dans quel pays votre compte PayPal est-il enregistré ? <br><u>Choix :</u><br><font color=green>Vous devrez fournir des <strong>paramètres API</strong> dans le module Express Checkout.</font><br><strong>Les commerçants des États-Unis et du Canada</strong> ont besoin des informations d\'identification de l\'API PayPal et d\'un compte PayPal Payments Pro.<br><strong>Les commerçants britanniques</strong> doivent fournir des <strong>paramètres PAYFLOW</strong> (et avoir un compte Payflow)<br><strong>Les commerçants australiens</strong> choisissent le Canada<br><em>(Ce paramètre concerne en réalité la spécification interne de l\'API PayPal, et pas tellement le pays : États-Unis=1.5, Royaume-Uni=2.0, Canada/Australie=3.0)</em>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_EC_RETURN_FMF_DETAILS' => 'Filtres de gestion de la fraude - FMF',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_EC_RETURN_FMF_DETAILS' => 'Si vous avez activé la prise en charge FMF dans votre compte PayPal et que vous souhaitez l\'utiliser dans vos transactions, définissez cette option sur Oui. Sinon, laissez-la sur Non.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_SERVER' => 'En direct ou en Sandbox',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_SERVER' => '<strong>Live : </strong> Utilisé pour traiter les transactions en direct<br><strong>Sandbox : </strong>Pour les développeurs et les tests',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_DEBUGGING' => 'Mode débogage',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_DEBUGGING' => 'Souhaitez-vous activer le mode débogage ? Un journal complet et détaillé des transactions ayant échoué sera envoyé par courrier électronique au propriétaire du magasin.',
// eof constant configuration titles and descriptions for order total module paypaldp
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_DESCRIPTION'] = '<strong>PayPal Payments Pro</strong>%s<br>' . '<a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Gérez votre compte PayPal.</a>' . '<br><br><font color="green">Configuration Instructions :</font><br><span class="alert">1. </span><a href="https://www.zen-cart.com/partners/paypal-pro" rel="noopener" target="_blank">Créez votre compte PayPal - cliquez ici.</a><br>' .
        (isset($define['MODULE_PAYMENT_PAYPALDP_STATUS']) ? '' : '... et cliquez sur "installer" ci-dessus pour activer PayPal Payments Pro.<br><a href="https://www.zen-cart.com/getpaypal" rel="noopener" target="_blank">Pour une aide détaillée supplémentaire, consultez cet article de FAQ</a><br>') .
        (!isset($define['MODULE_PAYMENT_PAYPALWPP_APISIGNATURE']) || $define['MODULE_PAYMENT_PAYPALWPP_APISIGNATURE'] === '' ? '<span class="alert">2. </span><strong>Informations d\'identification API</strong> à partir de l\'option Informations d\'identification API dans la zone Paramètres de votre profil PayPal. Ce module utilise l\'option <strong>Signature API</strong> : vous devrez saisir le nom d\'utilisateur, le mot de passe et la signature dans les champs ci-dessous.' : '<span class="alert">2. </span>Assurez-vous d\'avoir saisi les données de sécurité appropriées pour le nom d\'utilisateur/le mot de passe, etc., ci-dessous.') .
        '<font color="green"><hr><strong>Requis:</strong></font><br><hr>*<strong>Express Checkout</strong> doit être installé et activé pour pouvoir utiliser PayPal Payments Pro, conformément aux conditions d\'utilisation de PayPal.<br>*Nécessite également CURL sur SSL pour les communications sortantes. CURL doit être activé pour les ports 80 et 443.<hr>';
}

return $define;
