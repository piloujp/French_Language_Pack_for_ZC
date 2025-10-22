<?php
/**
 * Language definitions for the paypalr (PayPal Restful Api) payment module.
 *
 * Last updated: v1.2.0
 */
$define = [
    'MODULE_PAYMENT_PAYPALR_TEXT_TITLE' => 'Paiement PayPal',
        'MODULE_PAYMENT_PAYPALR_SUBTITLE' => '(Utilisez soit votre <b>portefeuille PayPal</b>, soit une <b>carte de crédit</b>)',
    'MODULE_PAYMENT_PAYPALR_TEXT_TITLE_ADMIN' => 'Paiement PayPal (RESTful)',
    'MODULE_PAYMENT_PAYPALR_TEXT_DESCRIPTION' => '<strong>PayPal</strong>',
    'MODULE_PAYMENT_PAYPALR_TEXT_TYPE' => 'Paiement PayPal',

    // -----
    // Configuration-related errors displayed during the payment module's admin configuration.
    //
    'MODULE_PAYMENT_PAYPALR_ERROR_NO_CURL' => 'CURL non installé, impossible à utiliser.',
    'MODULE_PAYMENT_PAYPALR_ERROR_CREDS_NEEDED' => 'Le module de paiement <var>paypalr</var> ne peut pas être activé tant que vous n’avez pas fourni des informations d’identification valides pour votre site <b>%s</b>.',
    'MODULE_PAYMENT_PAYPALR_ERROR_INVALID_CREDS' => 'Les informations d’identification <b>%s</b> pour le module de paiement <var>paypalr</var> ne sont pas valides.',
    'MODULE_PAYMENT_PAYPALR_AUTO_DISABLED' => ' Le module de paiement a été automatiquement désactivé.',

    // -----
    // Storefront messages.
    //
    'MODULE_PAYMENT_PALPALR_PAYING_WITH_PAYPAL' => 'Payer via le portefeuille PayPal',     //- Used by the confirmation method, when paying via PayPal Checkout (paypal)
    'MODULE_PAYMENT_PAYPALR_TEXT_NOTIFICATION_MISSING' => 'Nous ne sommes pas en mesure de traiter votre paiement %s pour le moment. Veuillez nous contacter pour obtenir de l’aide.',  //- %s filled in with MODULE_PAYMENT_PAYPALR_TEXT_TITLE
    'MODULE_PAYMENT_PAYPALR_TEXT_GENERAL_ERROR' => 'Nous ne sommes pas en mesure de traiter votre paiement %s pour le moment. Veuillez nous contacter pour obtenir de l’aide.',      //- %s filled in with MODULE_PAYMENT_PAYPALR_TEXT_TITLE
    'MODULE_PAYMENT_PAYPALR_TEXT_STATUS_MISMATCH' => 'Nous n’avons pas pu traiter votre demande de paiement.',
    'MODULE_PAYMENT_PAYPALR_TEXT_PLEASE_NOTE' => 'Veuillez noter :',
    'MODULE_PAYMENT_PAYPALR_UNSUPPORTED_BILLING_COUNTRY' => 'Le pays de votre adresse de facturation n’est pas pris en charge par PayPal ; les paiements par carte de crédit ne peuvent pas être effectués.',
    'MODULE_PAYMENT_PAYPALR_UNSUPPORTED_SHIPPING_COUNTRY' => 'Le pays de votre adresse de livraison n’est pas pris en charge par PayPal ; ce mode de paiement ne peut pas être utilisé.',

    // -----
    // Storefront text used to compose an 'after_process' customer-visible note in the
    // order's status-history.  Added for v1.0.5.
    //
    'MODULE_PAYMENT_PAYPALR_TRANSACTION_ID' => 'ID de transaction : ',  //- Should end with a space
    'MODULE_PAYMENT_PAYPALR_TRANSACTION_TYPE' => 'Type de paiement : PayPal Checkout (%s)',  //- %s filled in with either 'paypal' or 'card'
    'MODULE_PAYMENT_PAYPALR_TRANSACTION_PAYMENT_STATUS' => 'Statut du paiement : ',  //- Should end with a space
    'MODULE_PAYMENT_PAYPALR_TRANSACTION_AMOUNT' => 'Montant : ',  //- Should end with a space
    // Added for v1.2.0:
    'MODULE_PAYMENT_PAYPALR_BUYER_EMAIL' => 'E-mail de l’acheteur : ',  //- Should end with a space
    'MODULE_PAYMENT_PAYPALR_FUNDING_SOURCE' => 'Source de financement : ',  //- Should end with a space

    // -----
    // Used by the payment module's javascript_validation method.
    //
    'MODULE_PAYMENT_PAYPALR_TEXT_JS_CC_OWNER' => '* Le nom du titulaire de la carte doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n',
    'MODULE_PAYMENT_PAYPALR_TEXT_JS_CC_NUMBER' => '* Le numéro de carte de crédit doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n',
    'MODULE_PAYMENT_PAYPALR_TEXT_JS_CC_CVV' => '* Le numéro CVV à 3 ou 4 chiffres doit être copié du dos de la carte de crédit (ou du recto pour American Express).\n',

    // -----
    // Constants used when processing credit-cards
    //
    'MODULE_PAYMENT_PAYPALR_CC_OWNER' => 'Nom du titulaire de la carte :',
    'MODULE_PAYMENT_PAYPALR_CC_TYPE' => 'Type de carte de crédit :',
    'MODULE_PAYMENT_PAYPALR_CC_NUMBER' => 'Numéro de Carte de Crédit :',
    'MODULE_PAYMENT_PAYPALR_CC_EXPIRES' => 'Date d’expiration de la carte de crédit :',
    'MODULE_PAYMENT_PAYPALR_CC_CVV' => 'Numéro CVV :',

    'MODULE_PAYMENT_PAYPALR_TEXT_CVV_LENGTH' => 'Le <em>numéro CVV</em> de votre carte %1$s se terminant par <var>%2$s</var> doit comporter %3$u chiffres.',  //- %1$s is the card type, , %2$s is the last-r, %3$u is the CVV length
    'MODULE_PAYMENT_PAYPALR_TEXT_BAD_CARD' => 'Nous nous excusons pour la gêne occasionnée, mais le type de carte de crédit que vous avez saisi n’est pas celui que nous acceptons. Veuillez utiliser une autre carte de crédit.',

    'MODULE_PAYMENT_PAYPALR_TEXT_CC_ERROR' => 'Une erreur s’est produite lorsque nous avons essayé de traiter votre carte de crédit.',
    'MODULE_PAYMENT_PAYPALR_TEXT_CARD_DECLINED' => 'La carte se terminant par <var>%s</var> a été refusée.',     //- %s is the last-4 of the card-number.
    'MODULE_PAYMENT_PAYPALR_TEXT_DECLINED_REASON_UNKNOWN' => 'Si vous continuez à recevoir ce message, veuillez nous contacter et fournir le code de motif « %s ».', //- %s is ['processor_response']['response_code']

    'MODULE_PAYMENT_PAYPALR_TEXT_TRY_AGAIN' => 'Veuillez réessayer, sélectionnez un autre mode de paiement ou contactez-nous pour obtenir de l’aide.',

    'MODULE_PAYMENT_PAYPALR_CARD_PROCESSING' => 'En payant avec votre carte, vous reconnaissez que vos données seront traitées par PayPal sous réserve des conditions générales disponibles sur PayPal.com.',  //- %s is filled in with a link
    'MODULE_PAYMENT_PAYPALR_PAYPAL_PRIVACY_STMT' => 'Politique de confidentialité de PayPal',
    'MODULE_PAYMENT_PAYPALR_PAYPAL_PRIVACY_LINK' => 'https://www.paypal.com/fr/legalhub/privacy-full',

    // -----
    // Store owner/admin alert-email messages.
    //
    'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT' => 'ALERTE : Paiement PayPal (%s)',    //- %s is an additional error descriptor, see below
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_CONFIGURATION' => 'Configuration',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_ORDER_ATTN' => 'La commande nécessite de l’attention',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_UNKNOWN_DENIAL' => 'Raison de refus inconnue',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_LOST_STOLEN_CARD' => 'Carte perdue/volée/frauduleuse',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_TOTAL_MISMATCH' => 'Calcul incohérent',
        'MODULE_PAYMENT_PAYPALR_ALERT_SUBJECT_CONFIRMATION_ERROR' => 'Confirmer le choix de paiement', 

    'MODULE_PAYMENT_PAYPALR_ALERT_ORDER_CREATION' => 'Le statut de la commande #%1$u a été forcé à « En attente » en raison d’un statut de réponse PayPal de « %2$s ».',
    'MODULE_PAYMENT_PAYPALR_ALERT_MISSING_OBSERVER' => 'L’observateur du module de paiement (auto.paypalrestful.php) n’a pas été chargé ; le module de paiement a été désactivé.',
    'MODULE_PAYMENT_PAYPALR_ALERT_MISSING_NOTIFICATIONS' => 'Les notifications requises dans la classe order_total.php n’ont pas été appliquées ; le module de paiement ne peut pas passer de commandes.',
    'MODULE_PAYMENT_PAYPALR_ALERT_ORDER_CREATE' => 'Une erreur a été renvoyée par PayPal lors de la tentative de lancement d’une commande. Par courtoisie, seul le code d’erreur « code » a été affiché à votre client. Les détails de l’erreur sont indiqués ci-dessous.' . "\n\n",
    'MODULE_PAYMENT_PAYPALR_ALERT_TOTAL_MISMATCH' => 'Une différence a été constatée entre la valeur globale d’une commande et ses détails. La commande est soumise à PayPal sans articles et la répartition des coûts est incluse :',
    'MODULE_PAYMENT_PAYPALR_ALERT_CONFIRMATION_ERROR' => 'Un retour non traitable a été reçu de PayPal lors de la tentative de confirmation du choix de paiement d’un client à partir de son portefeuille PayPal.',
    'MODULE_PAYMENT_PAYPALR_ALERT_EXTERNAL_TXNS' => 'Vérifiez le statut de la commande n° %u. Les transactions PayPal ont été ajoutées en dehors du traitement du module de paiement.',

    // -----
    // Alert messages for unknown "DECLINED" reasons and lost/stolen/fraudulent cards.
    // -----

    // -----
    // %1$s: ['processor_response']['response_code']
    // %2$s: $_SESSION['customer_first_name']
    // %3$s: $_SESSION['customer_last_name']
    // $4%u: $_SESSION['customer_id']
    //
    'MODULE_PAYMENT_PAYPALR_ALERT_UNKNOWN_DENIAL' =>
        'PayPal a renvoyé un code de réponse inconnu (%1$s) pour un paiement par carte de crédit refusé.' . "\n\n" .
        'Le paiement a été tenté par %2$s %3$s (identifiant client %4$u). Les détails de la carte sont les suivants :' . "\n\n",

    // -----
    // %1$s: One of the two language constants that follow.
    // %2$s: $_SESSION['customers_ip_address']
    // %3$s: $_SESSION['customer_first_name']
    // %4$s: $_SESSION['customer_last_name']
    // $5%u: $_SESSION['customer_id']
    //
    'MODULE_PAYMENT_PAYPALR_ALERT_LOST_STOLEN_CARD' =>
        'Un paiement par carte de crédit a été tenté avec une carte %1$s depuis l’adresse IP %2$s.' . "\n\n" .
        'Le paiement a été tenté par %3$s %4$s (identifiant client %5$u). Les détails de la carte sont les suivants :' . "\n\n",
    'MODULE_PAYMENT_PAYPALR_CARD_LOST' => 'perdue ou volée',
    'MODULE_PAYMENT_PAYPALR_CARD_FRAUDULENT' => 'frauduleuse',

    // -----
    // For these messages, %1$s is the card-type and %2$s is the last-4 of the card-number.
    //
    'MODULE_PAYMENT_PAYPALR_TEXT_CC_EXPIRED' => 'La carte %1$s se terminant par <var>%2$s</var> a expiré.',
    'MODULE_PAYMENT_PAYPALR_TEXT_INSUFFICIENT_FUNDS' => 'La carte %1$s se terminant par <var>%2$s</var> n’a pas suffisamment de fonds.',
    'MODULE_PAYMENT_PAYPALR_TEXT_CVV_FAILED' => 'Le « numéro CVV » que vous avez saisi pour la carte %1$s se terminant par <var>%2$s</var> n’est pas correct.',

    // -----
    // $1$s ... MODULE_PAYMENT_PAYPALR_TEXT_TITLE
    // $2%s ... The error-code returned by PayPal.
    //
    'MODULE_PAYMENT_PAYPALR_TEXT_CREATE_ORDER_ISSUE' => 'Nous ne sommes pas en mesure de traiter votre paiement %1$s pour le moment. Veuillez nous contacter pour obtenir de l’aide en nous fournissant ce code : <b>%2$s</b>.',

    // -----
    // Buttons on checkout_payment page; see https://www.paypal.com/bm/webapps/mpp/logo-center for additional information.
    //
    'MODULE_PAYMENT_PAYPALR_BUTTON_ALTTEXT' => 'Cliquez ici pour payer avec votre portefeuille PayPal',
    'MODULE_PAYMENT_PAYPALR_BUTTON_COLOR' => 'YELLOW',   //- One of WHITE, YELLOW, GREY or BLUE; defaults to YELLOW.
        'MODULE_PAYMENT_PAYPALR_BUTTON_IMG_YELLOW' => 'https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/44_Yellow_PayPal_Pill_Button.png',
        'MODULE_PAYMENT_PAYPALR_BUTTON_IMG_GREY' => 'https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/44_Grey_PayPal_Pill_Button.png',
        'MODULE_PAYMENT_PAYPALR_BUTTON_IMG_BLUE' => 'https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/44_Blue_PayPal_Pill_Button.png',
        'MODULE_PAYMENT_PAYPALR_BUTTON_IMG_WHITE' => 'https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-150px.png',

    'MODULE_PAYMENT_PAYPALR_CHOOSE_PAYPAL' => 'Portefeuille PayPal :',
    'MODULE_PAYMENT_PALPALR_CHOOSE_CARD' => 'Carte de crédit :',
    'MODULE_PAYMENT_PAYPALR_LOGO_SVG' => "data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAxcHgiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAxMDEgMzIiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaW5ZTWluIG1lZXQiIHhtbG5zPSJodHRwOiYjeDJGOyYjeDJGO3d3dy53My5vcmcmI3gyRjsyMDAwJiN4MkY7c3ZnIj48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDEyLjIzNyAyLjggTCA0LjQzNyAyLjggQyAzLjkzNyAyLjggMy40MzcgMy4yIDMuMzM3IDMuNyBMIDAuMjM3IDIzLjcgQyAwLjEzNyAyNC4xIDAuNDM3IDI0LjQgMC44MzcgMjQuNCBMIDQuNTM3IDI0LjQgQyA1LjAzNyAyNC40IDUuNTM3IDI0IDUuNjM3IDIzLjUgTCA2LjQzNyAxOC4xIEMgNi41MzcgMTcuNiA2LjkzNyAxNy4yIDcuNTM3IDE3LjIgTCAxMC4wMzcgMTcuMiBDIDE1LjEzNyAxNy4yIDE4LjEzNyAxNC43IDE4LjkzNyA5LjggQyAxOS4yMzcgNy43IDE4LjkzNyA2IDE3LjkzNyA0LjggQyAxNi44MzcgMy41IDE0LjgzNyAyLjggMTIuMjM3IDIuOCBaIE0gMTMuMTM3IDEwLjEgQyAxMi43MzcgMTIuOSAxMC41MzcgMTIuOSA4LjUzNyAxMi45IEwgNy4zMzcgMTIuOSBMIDguMTM3IDcuNyBDIDguMTM3IDcuNCA4LjQzNyA3LjIgOC43MzcgNy4yIEwgOS4yMzcgNy4yIEMgMTAuNjM3IDcuMiAxMS45MzcgNy4yIDEyLjYzNyA4IEMgMTMuMTM3IDguNCAxMy4zMzcgOS4xIDEzLjEzNyAxMC4xIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDM1LjQzNyAxMCBMIDMxLjczNyAxMCBDIDMxLjQzNyAxMCAzMS4xMzcgMTAuMiAzMS4xMzcgMTAuNSBMIDMwLjkzNyAxMS41IEwgMzAuNjM3IDExLjEgQyAyOS44MzcgOS45IDI4LjAzNyA5LjUgMjYuMjM3IDkuNSBDIDIyLjEzNyA5LjUgMTguNjM3IDEyLjYgMTcuOTM3IDE3IEMgMTcuNTM3IDE5LjIgMTguMDM3IDIxLjMgMTkuMzM3IDIyLjcgQyAyMC40MzcgMjQgMjIuMTM3IDI0LjYgMjQuMDM3IDI0LjYgQyAyNy4zMzcgMjQuNiAyOS4yMzcgMjIuNSAyOS4yMzcgMjIuNSBMIDI5LjAzNyAyMy41IEMgMjguOTM3IDIzLjkgMjkuMjM3IDI0LjMgMjkuNjM3IDI0LjMgTCAzMy4wMzcgMjQuMyBDIDMzLjUzNyAyNC4zIDM0LjAzNyAyMy45IDM0LjEzNyAyMy40IEwgMzYuMTM3IDEwLjYgQyAzNi4yMzcgMTAuNCAzNS44MzcgMTAgMzUuNDM3IDEwIFogTSAzMC4zMzcgMTcuMiBDIDI5LjkzNyAxOS4zIDI4LjMzNyAyMC44IDI2LjEzNyAyMC44IEMgMjUuMDM3IDIwLjggMjQuMjM3IDIwLjUgMjMuNjM3IDE5LjggQyAyMy4wMzcgMTkuMSAyMi44MzcgMTguMiAyMy4wMzcgMTcuMiBDIDIzLjMzNyAxNS4xIDI1LjEzNyAxMy42IDI3LjIzNyAxMy42IEMgMjguMzM3IDEzLjYgMjkuMTM3IDE0IDI5LjczNyAxNC42IEMgMzAuMjM3IDE1LjMgMzAuNDM3IDE2LjIgMzAuMzM3IDE3LjIgWiI+PC9wYXRoPjxwYXRoIGZpbGw9IiMwMDMwODciIGQ9Ik0gNTUuMzM3IDEwIEwgNTEuNjM3IDEwIEMgNTEuMjM3IDEwIDUwLjkzNyAxMC4yIDUwLjczNyAxMC41IEwgNDUuNTM3IDE4LjEgTCA0My4zMzcgMTAuOCBDIDQzLjIzNyAxMC4zIDQyLjczNyAxMCA0Mi4zMzcgMTAgTCAzOC42MzcgMTAgQyAzOC4yMzcgMTAgMzcuODM3IDEwLjQgMzguMDM3IDEwLjkgTCA0Mi4xMzcgMjMgTCAzOC4yMzcgMjguNCBDIDM3LjkzNyAyOC44IDM4LjIzNyAyOS40IDM4LjczNyAyOS40IEwgNDIuNDM3IDI5LjQgQyA0Mi44MzcgMjkuNCA0My4xMzcgMjkuMiA0My4zMzcgMjguOSBMIDU1LjgzNyAxMC45IEMgNTYuMTM3IDEwLjYgNTUuODM3IDEwIDU1LjMzNyAxMCBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA2Ny43MzcgMi44IEwgNTkuOTM3IDIuOCBDIDU5LjQzNyAyLjggNTguOTM3IDMuMiA1OC44MzcgMy43IEwgNTUuNzM3IDIzLjYgQyA1NS42MzcgMjQgNTUuOTM3IDI0LjMgNTYuMzM3IDI0LjMgTCA2MC4zMzcgMjQuMyBDIDYwLjczNyAyNC4zIDYxLjAzNyAyNCA2MS4wMzcgMjMuNyBMIDYxLjkzNyAxOCBDIDYyLjAzNyAxNy41IDYyLjQzNyAxNy4xIDYzLjAzNyAxNy4xIEwgNjUuNTM3IDE3LjEgQyA3MC42MzcgMTcuMSA3My42MzcgMTQuNiA3NC40MzcgOS43IEMgNzQuNzM3IDcuNiA3NC40MzcgNS45IDczLjQzNyA0LjcgQyA3Mi4yMzcgMy41IDcwLjMzNyAyLjggNjcuNzM3IDIuOCBaIE0gNjguNjM3IDEwLjEgQyA2OC4yMzcgMTIuOSA2Ni4wMzcgMTIuOSA2NC4wMzcgMTIuOSBMIDYyLjgzNyAxMi45IEwgNjMuNjM3IDcuNyBDIDYzLjYzNyA3LjQgNjMuOTM3IDcuMiA2NC4yMzcgNy4yIEwgNjQuNzM3IDcuMiBDIDY2LjEzNyA3LjIgNjcuNDM3IDcuMiA2OC4xMzcgOCBDIDY4LjYzNyA4LjQgNjguNzM3IDkuMSA2OC42MzcgMTAuMSBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA5MC45MzcgMTAgTCA4Ny4yMzcgMTAgQyA4Ni45MzcgMTAgODYuNjM3IDEwLjIgODYuNjM3IDEwLjUgTCA4Ni40MzcgMTEuNSBMIDg2LjEzNyAxMS4xIEMgODUuMzM3IDkuOSA4My41MzcgOS41IDgxLjczNyA5LjUgQyA3Ny42MzcgOS41IDc0LjEzNyAxMi42IDczLjQzNyAxNyBDIDczLjAzNyAxOS4yIDczLjUzNyAyMS4zIDc0LjgzNyAyMi43IEMgNzUuOTM3IDI0IDc3LjYzNyAyNC42IDc5LjUzNyAyNC42IEMgODIuODM3IDI0LjYgODQuNzM3IDIyLjUgODQuNzM3IDIyLjUgTCA4NC41MzcgMjMuNSBDIDg0LjQzNyAyMy45IDg0LjczNyAyNC4zIDg1LjEzNyAyNC4zIEwgODguNTM3IDI0LjMgQyA4OS4wMzcgMjQuMyA4OS41MzcgMjMuOSA4OS42MzcgMjMuNCBMIDkxLjYzNyAxMC42IEMgOTEuNjM3IDEwLjQgOTEuMzM3IDEwIDkwLjkzNyAxMCBaIE0gODUuNzM3IDE3LjIgQyA4NS4zMzcgMTkuMyA4My43MzcgMjAuOCA4MS41MzcgMjAuOCBDIDgwLjQzNyAyMC44IDc5LjYzNyAyMC41IDc5LjAzNyAxOS44IEMgNzguNDM3IDE5LjEgNzguMjM3IDE4LjIgNzguNDM3IDE3LjIgQyA3OC43MzcgMTUuMSA4MC41MzcgMTMuNiA4Mi42MzcgMTMuNiBDIDgzLjczNyAxMy42IDg0LjUzNyAxNCA4NS4xMzcgMTQuNiBDIDg1LjczNyAxNS4zIDg1LjkzNyAxNi4yIDg1LjczNyAxNy4yIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDA5Y2RlIiBkPSJNIDk1LjMzNyAzLjMgTCA5Mi4xMzcgMjMuNiBDIDkyLjAzNyAyNCA5Mi4zMzcgMjQuMyA5Mi43MzcgMjQuMyBMIDk1LjkzNyAyNC4zIEMgOTYuNDM3IDI0LjMgOTYuOTM3IDIzLjkgOTcuMDM3IDIzLjQgTCAxMDAuMjM3IDMuNSBDIDEwMC4zMzcgMy4xIDEwMC4wMzcgMi44IDk5LjYzNyAyLjggTCA5Ni4wMzcgMi44IEMgOTUuNjM3IDIuOCA5NS40MzcgMyA5NS4zMzcgMy4zIFoiPjwvcGF0aD48L3N2Zz4",

    // -----
    // Admin messages, from an order's display, viewing the PayPal transaction history.
    //
    'MODULE_PAYMENT_PAYPALR_TEXT_GETDETAILS_ERROR' => 'Un problème est survenu lors de la récupération des détails de la transaction PayPal.',
    'MODULE_PAYMENT_PAYPALR_NO_RECORDS' => 'Aucun enregistrement « %1$s » n’a été trouvé dans la base de données pour la commande #%2$u.',
    'MODULE_PAYMENT_PAYPALR_EXTERNAL_ADDITION' => 'Des transactions PayPal ont été ajoutées en dehors du traitement du module de paiement. Vérifiez que le statut de la commande est correct !',

    // -----
    // Used during the admin's display of the payment transactions on an
    // order's detailed view.
    //
    'MODULE_PAYMENT_PAYPALR_NO_RECORDS_FOUND' => 'Aucune transaction PayPal n’est enregistrée dans la base de données pour cette commande.',

    'MODULE_PAYMENT_PAYPALR_TXN_TABLE_CAPTION' => 'Transactions PayPal',
    'MODULE_PAYMENT_PAYPALR_PAYMENTS_TABLE_CAPTION' => 'Paiements réglés',
    'MODULE_PAYMENT_PAYPALR_PAYMENTS_TABLE_NOTE' => 'Remarque : Les frais de remboursement sont annulés par PayPal !',
    'MODULE_PAYMENT_PAYPALR_PAYMENTS_NONE' => 'Aucun paiement n’est actuellement réglé.',
    'MODULE_PAYMENT_PAYPALR_PAYMENTS_TOTAL' => 'Totaux réglés :',
    'MODULE_PAYMENT_PAYPALR_NAME_EMAIL_ID' => 'Nom du payeur / E-mail / ID du payeur',
    'MODULE_PAYMENT_PAYPALR_PAYER_ID' => 'ID du payeur :',
    'MODULE_PAYMENT_PAYPALR_PAYER_STATUS' => 'Statut du payeur :',
    'MODULE_PAYMENT_PAYPALR_PAYMENT_TYPE' => 'Type de paiement :',
    'MODULE_PAYMENT_PAYPALR_PAYMENT_STATUS' => 'Statut du paiement :',
    'MODULE_PAYMENT_PAYPALR_PENDING_REASON' => 'Cause de la mise en attente :',
    'MODULE_PAYMENT_PAYPALR_INVOICE' => 'Facture :',
    'MODULE_PAYMENT_PAYPALR_PAYMENT_DATE' => 'Date de paiement :',
    'MODULE_PAYMENT_PAYPALR_GROSS_AMOUNT' => 'Montant brut :',
    'MODULE_PAYMENT_PAYPALR_PAYMENT_FEE' => 'Frais de paiement :',
    'MODULE_PAYMENT_PAYPALR_SETTLE_AMOUNT' => 'Montant réglé :',
    'MODULE_PAYMENT_PAYPALR_EXCHANGE_RATE' => 'Taux de change　:',

    'MODULE_PAYMENT_PAYPALR_TXN_TYPE' => 'Type de transaction :',
    'MODULE_PAYMENT_PAYPALR_TXN_ID' => 'ID de transaction :',
    'MODULE_PAYMENT_PAYPALR_TXN_PARENT_TXN_ID' => 'ID de transaction parent / ID de transaction :',
    'MODULE_PAYMENT_PAYPALR_ACTION' => 'Action',
        'MODULE_PAYMENT_PAYPALR_ACTION_DETAILS' => 'Détails',
        'MODULE_PAYMENT_PAYPALR_ACTION_REAUTH' => 'Réautoriser',
        'MODULE_PAYMENT_PAYPALR_ACTION_VOID' => 'Annuler',
        'MODULE_PAYMENT_PAYPALR_ACTION_CAPTURE' => 'Capturer',
        'MODULE_PAYMENT_PAYPALR_ACTION_REFUND' => 'Rembourser',
    'MODULE_PAYMENT_PAYPALR_TXN_STATUS' => 'Statut de la transaction',

    'MODULE_PAYMENT_PAYPALR_CONFIRM' => 'Confirmer',
    'MODULE_PAYMENT_PAYPALR_DAYSTOSETTLE' => 'Jours pour régler :',
    'MODULE_PAYMENT_PAYPALR_AMOUNT' => 'Montant:',
    'MODULE_PAYMENT_PAYPALR_CUSTOMER_NOTE' => 'Note client :',
    'MODULE_PAYMENT_PAYPALR_DATE_CREATED' => 'Date de création :',
    'MODULE_PAYMENT_PAYPALR_AMOUNT_RANGE' => 'Entrez un montant compris entre %1$s 1,00 et %1$s %2$s.',
    'MODULE_PAYMENT_PAYPALR_NOTES' => 'Remarques :',

    // -----
    // Constants used in the "Details" modal.
    //
    'MODULE_PAYMENT_PAYPALR_DETAILS_TITLE' => 'Détails de la transaction PayPal (%s)',    //- %s is one of the following two strings
        'MODULE_PAYMENT_PAYPALR_DETAILS_TYPE_PAYPAL' => 'Portefeuille PayPal',
        'MODULE_PAYMENT_PAYPALR_DETAILS_TYPE_CARD' => 'Carte de crédit',
    'MODULE_PAYMENT_PAYPALR_BUYER_INFO' => 'Informations de l’acheteur',
    'MODULE_PAYMENT_PAYPALR_PAYER_NAME' => 'Nom du payeur :',
    'MODULE_PAYMENT_PAYPALR_BUSINESS_NAME' => 'Nom de l’entreprise :',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_NAME' => 'Nom du destinataire :',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_STREET' => 'rue :',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_CITY' => 'Ville　:',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_STATE' => 'Département :',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_ZIP' => 'Code postal :',
    'MODULE_PAYMENT_PAYPALR_ADDRESS_COUNTRY' => 'Pays　:',
    'MODULE_PAYMENT_PAYPALR_SELLER_INFO' => 'Informations sur le vendeur',
    'MODULE_PAYMENT_PAYPALR_CART_ITEMS' => 'Articles du panier :',
    'MODULE_PAYMENT_PAYPALR_MERCHANT_NAME' => 'Nom du vendeur :',
    'MODULE_PAYMENT_PAYPALR_MERCHANT_EMAIL' => 'E-mail du vendeur :',
    'MODULE_PAYMENT_PAYPALR_MERCHANT_ID' => 'ID du commerçant :',
    'MODULE_PAYMENT_PAYPALR_SELLER_PROTECTION' => 'Protection du vendeur :',
    'MODULE_PAYMENT_PAYPALR_PROCESSOR_RESPONSE' => 'Réponse du processeur :',
        'MODULE_PAYMENT_PAYPALR_AVS_CODE' => 'Code AVS (%s)',
        'MODULE_PAYMENT_PAYPALR_RESPONSE_CODE' => 'Code de réponse (%s)',
        'MODULE_PAYMENT_PAYPALR_CVV_CODE' => 'Code CVV (%s)',
    'MODULE_PAYMENT_PAYPALR_AUTH_RESULT' => 'Résultat de l’authentification :',
        'MODULE_PAYMENT_PAYPALR_LIABILITY' => 'Transfert de responsabilité (%s)',
        'MODULE_PAYMENT_PAYPALR_AUTH_STATUS' => 'État d’authentification (%s)',
        'MODULE_PAYMENT_PAYPALR_ENROLL_STATUS' => 'Statut d’inscription (%s)',
    'MODULE_PAYMENT_PAYPALR_AMOUNT_MISMATCH' => 'Incohérence du montant de la commande : %s',    //- %s is the base order-calculation amount/currency-code
    'MODULE_PAYMENT_PAYPALR_CALCULATED_AMOUNT' => 'Montant calculé :',
    'MODULE_PAYMENT_PAYPALR_INVOICE_NUMBER' => 'Facture #　:',

    // -----
    // Constants used in the "Refunds" modal.
    //
    'MODULE_PAYMENT_PAYPALR_REFUND_TITLE' => 'Rembourser un paiement',
    'MODULE_PAYMENT_PAYPALR_REFUND_INSTRUCTIONS' => 'Vous pouvez rembourser tout ou partie d’un paiement capturé.',
        'MODULE_PAYMENT_PAYPALR_REFUND_NOTE1' => 'Un remboursement <em>complet</em> rembourse le solde non remboursé restant du paiement capturé.',
        'MODULE_PAYMENT_PAYPALR_REFUND_NOTE2' => 'Un remboursement <em>partiel</em> rembourse une partie du paiement capturé.',
        'MODULE_PAYMENT_PAYPALR_REFUND_NOTE3' => 'Vous pouvez émettre plusieurs remboursements <em>partiels</em>, jusqu’au solde restant non remboursé.',
    'MODULE_PAYMENT_PAYPALR_REFUND_CAPTURE_ID' => 'Capturer l’ID de la transaction :',
    'MODULE_PAYMENT_PAYPALR_REMAINING_TO_REFUND' => 'Reste à rembourser :',
    'MODULE_PAYMENT_PAYPALR_REFUND_AMOUNT' => 'Montant à rembourser :',
    'MODULE_PAYMENT_PAYPALR_REFUND_FULL' => 'Remboursement intégral ?',
    'MODULE_PAYMENT_PAYPALR_REFUND_DEFAULT_MESSAGE' => 'Remboursé par l’administrateur du magasin.',

    'MODULE_PAYMENT_PAYPALR_REFUND_PARAM_ERROR' => 'Des paramètres non valides ont été fournis (CP %u) lors de la tentative de remboursement d’un paiement pour cette commande ; veuillez réessayer.',
    'MODULE_PAYMENT_PAYPALR_REFUND_ERROR' => 'Il y a eu un problème lors du remboursement de la transaction.',

    'MODULE_PAYMENT_PAYPALR_REFUND_COMPLETE' => 'Un remboursement d’un montant de %s a été effectué.',

    // -----
    // Constants used in the "Re-Authorize" modal.
    //
    'MODULE_PAYMENT_PAYPALR_REAUTH_TITLE' => 'Réautoriser une commande',
    'MODULE_PAYMENT_PAYPALR_REAUTH_INSTRUCTIONS' => 'Pour vous assurer que les fonds sont toujours disponibles, vous pouvez réautoriser un paiement après l’expiration de sa période d’honneur initiale de trois jours.',
        'MODULE_PAYMENT_PAYPALR_REAUTH_NOTE1' => 'Au cours de la période d’autorisation de 29 jours, vous pouvez émettre plusieurs réautorisations après l’expiration de la période d’honneur de 3 jours pour l’autorisation précédemment émise.',
        'MODULE_PAYMENT_PAYPALR_REAUTH_NOTE2' => 'Si 30 jours se sont écoulés depuis la date de l’autorisation initiale, vous devez créer un paiement autorisé au lieu de réautoriser l’original.',
        'MODULE_PAYMENT_PAYPALR_REAUTH_NOTE3' => 'Un paiement réautorisé dispose lui-même d’un nouveau délai d’honneur de trois jours.',
        'MODULE_PAYMENT_PAYPALR_REAUTH_NOTE4' => 'Vous pouvez réautoriser un paiement autorisé <em>une fois</em> jusqu’à 115 %% du montant autorisé d’origine (%s), sans dépasser une augmentation de 75 USD.',

    'MODULE_PAYMENT_PAYPALR_REAUTH_ORIGINAL' => 'Montant initial :',
    'MODULE_PAYMENT_PAYPALR_REAUTH_NEW_AMOUNT' => 'Montant autorisé :',
    'MODULE_PAYMENT_PAYPALR_REAUTH_DAYS_FROM_LAST' => 'Jours depuis la dernière autorisation :',
    'MODULE_PAYMENT_PAYPALR_REAUTH_NOT_POSSIBLE' => 'La commande ne peut pas être réautorisée car une période d’honneur est active.',

    'MODULE_PAYMENT_PAYPALR_REAUTH_PARAM_ERROR' => 'Des paramètres non valides ont été fournis (CP %u) lors de la tentative de réautorisation de cette commande ; veuillez réessayer.',
    'MODULE_PAYMENT_PAYPALR_REAUTH_ERROR' => 'Il y a eu un problème lors de l’autorisation de la transaction.',
    'MODULE_PAYMENT_PAYPALR_REAUTH_TOO_SOON' => 'Une réautorisation n’est autorisée qu’une seule fois du jour 4 au jour 29 depuis la date de l’autorisation initiale.',

    'MODULE_PAYMENT_PAYPALR_REAUTH_COMPLETE' => 'Une réautorisation d’un montant de %s a été effectuée.',

    // -----
    // Constants used in the "Capture" modal.
    //
    'MODULE_PAYMENT_PAYPALR_CAPTURE_TITLE' => 'Capturer une autorisation',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_INSTRUCTIONS' => 'Pour capturer tout ou partie des fonds restants pour cette commande, saisissez le « Montant » ci-dessous, indiquez s’il s’agit de la capture <b>finale</b> de la commande et cliquez sur le bouton « Capturer ».',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_FINAL_TEXT' => 'Capture finale ?',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_REMAINING' => 'Capturer les fonds restants ?',
    'MODULE_PAYMENT_PAYPALR_CAPTURED_SO_FAR' => 'Précédemment capturé :',
    'MODULE_PAYMENT_PAYPALR_REMAINING_TO_CAPTURE' => 'Reste à capturer :',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_DEFAULT_MESSAGE' => 'Merci pour votre commande.',

    'MODULE_PAYMENT_PAYPALR_CAPTURE_PARAM_ERROR' => 'Des paramètres non valides ont été fournis (CP %u) lors de la tentative de capture de fonds pour cette commande ; veuillez réessayer.',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_ERROR' => 'Un problème est survenu lors de la capture de la transaction.',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_AMOUNT' => 'Le montant capturé doit être supérieur à zéro, sauf si vous capturez les fonds restants.',

    'MODULE_PAYMENT_PAYPALR_CAPTURE_NO_REMAINING' => 'Tous les fonds autorisés pour cette commande ont été capturés avec succès.',
    'MODULE_PAYMENT_PAYPALR_CAPTURE_COMPLETE' => 'Le paiement de la commande n°%u a été capturé.',
    'MODULE_PAYMENT_PAYPALR_PARTIAL_CAPTURE' => 'Partiellement capturé.',
    'MODULE_PAYMENT_PAYPALR_FINAL_CAPTURE' => 'Capture finale.',

    // -----
    // Constants used in the "Void" modal.
    //
    'MODULE_PAYMENT_PAYPALR_VOID_TITLE' => 'Annuler une autorisation',
    'MODULE_PAYMENT_PAYPALR_VOID_INSTRUCTIONS' => 'Pour annuler cette transaction, saisissez/copiez l’« ID d’autorisation » dans le champ de saisie ci-dessous et cliquez sur le bouton « Annuler ».',
    'MODULE_PAYMENT_PAYPALR_VOID_AUTH_ID' => 'ID d’autorisation :',
    'MODULE_PAYMENT_PAYPALR_VOID_DEFAULT_MESSAGE' => 'Transaction annulée.',

    'MODULE_PAYMENT_PAYPALR_VOID_PARAM_ERROR' => 'Des paramètres non valides ont été fournis lors de la tentative d’annulation d’une autorisation pour cette commande ; veuillez réessayer.',
    'MODULE_PAYMENT_PAYPALR_VOID_BAD_AUTH_ID' => 'Seule l’autorisation principale d’une commande peut être annulée ; veuillez réessayer.',
    'MODULE_PAYMENT_PAYPALR_VOID_ERROR' => 'Un problème est survenu lors de l’annulation de la transaction.',
    'MODULE_PAYMENT_PAYPALR_VOID_MEMO' => 'Transaction annulée par %1$s.',
    'MODULE_PAYMENT_PAYPALR_VOID_INVALID_TXN_ID' => 'L’ID de transaction que vous avez saisi (%1$s) n’a pas été trouvé ; veuillez réessayer.',
    'MODULE_PAYMENT_PAYPALR_VOID_COMPLETE' => 'L’autorisation de paiement pour la commande n°%u a été annulée.',

// bof constant configuration titles and descriptions for payment module paypalr
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_VERSION' => 'Version du module',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_VERSION' => 'Version du module actuellement installée.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_STATUS' => 'Activer ce module de paiement ?',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_STATUS' => 'Voulez-vous activer ce module de paiement ? Utilisez le paramètre <b>Retiré</b> si vous envisagez de supprimer ce module de paiement, mais que vous devez encore effectuer des actions administratives sur les commandes passées avec ce module.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_SERVER' => 'Environnement',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_SERVER' => '<b>Live : </b> Utilisé pour traiter les transactions en direct<br><b>Sandbox : </b> Pour les développeurs et les tests',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_CLIENTID_L' => 'ID client (live)',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_CLIENTID_L' => 'L’ID client de vos paramètres de signature API PayPal sous *Accès API* pour votre site <b>live</b>. Obligatoire si vous utilisez l’environnement <b>live</b>.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_SECRET_L' => 'Secret du client (live)',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_SECRET_L' => 'Le <em>secret client</em> de vos paramètres de signature API PayPal sous *Accès API* pour votre site <b>live</b>. Obligatoire si vous utilisez l’environnement <b>live</b>.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_CLIENTID_S' => 'ID client (sandbox)',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_CLIENTID_S' => 'L’<em>ID client</em> de vos paramètres de signature API PayPal sous *Accès API* pour votre site <b>sandbox</b>. Obligatoire si vous utilisez l’environnement <b>sandbox</b>.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_SECRET_S' => 'Secret du client (sandbox)',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_SECRET_S' => 'Le <em>secret client</em> de vos paramètres de signature API PayPal sous *Accès API* pour votre site <b>sandbox</b>. Obligatoire si vous utilisez l’environnement <b>sandbox</b>.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_SORT_ORDER' => 'Ordre d’affichage. Le plus bas est affiché en premier.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_ZONE' => 'Zone de paiement',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_ZONE' => 'Si une zone est sélectionnée, activez uniquement ce mode de paiement pour cette zone.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_ORDER_STATUS_ID' => 'Statut de la commande terminée',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_ORDER_STATUS_ID' => 'Définissez le statut des commandes dont le paiement a été correctement <em>capturé</em> sur ce statut.<br>Recommandé : <b>En cours[2]</b><br>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_ORDER_PENDING_STATUS_ID' => 'Définir le statut des commandes impayées',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_ORDER_PENDING_STATUS_ID' => 'Définissez le statut des commandes dont le paiement a été <em>autorisé</em> avec succès sur ce statut.<br>Recommandé : <b>En attente[1]</b><br>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_REFUNDED_STATUS_ID' => 'Définir le statut des commandes remboursées',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_REFUNDED_STATUS_ID' => 'Définissez le statut des commandes <em><b>entièrement</b>remboursées</em> sur ce statut.<br>Recommandé : <b>En attente[1]</b><br>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_VOIDED_STATUS_ID' => 'Définir le statut des commandes annulées',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_VOIDED_STATUS_ID' => 'Définissez le statut des commandes <em>annulées</em> sur ce statut.<br>Recommandé : <b>En attente[1]</b><br>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_HELD_STATUS_ID' => 'Définir le statut des commandes en attente',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_HELD_STATUS_ID' => 'Définissez le statut des commandes en attente de révision sur ce statut.<br>Recommandé : <b>En attente[1]</b><br>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_BRANDNAME' => 'Nom du magasin (marque) sur PayPal',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_BRANDNAME' => 'Le nom de votre boutique tel qu’il doit apparaître sur la page de connexion PayPal. Si ce champ est vide, le nom de votre boutique en ligne sera utilisé.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_TRANSACTION_MODE' => 'Action de paiement',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_TRANSACTION_MODE' => 'Comment souhaitez-vous obtenir le paiement ?<br><strong>Défaut : Vente finale</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_CURRENCY' => 'Devise de transaction',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_CURRENCY' => 'Dans quelle devise la commande doit-elle être envoyée à PayPal ? <br>REMARQUE : Si une devise non prise en charge est envoyée à PayPal, elle sera automatiquement convertie dans la <em>devise de rechange</em>.<br><strong>Par défaut : Devise sélectionnée</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_CURRENCY_FALLBACK' => 'Devise de rechange',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_CURRENCY_FALLBACK' => 'Si la <b>devise de transaction</b> est définie sur <em>devise sélectionnée</em>, quelle devise doit être utilisée comme solution de secours lorsque la devise sélectionnée par le client n’est pas prise en charge par PayPal ?<br><b>Valeur par défaut : USD</b>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_SCA_ALWAYS' => 'Déclencher 3D Secure à <b>chaque</b> transaction ?',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_SCA_ALWAYS' => 'Choisissez <var>true</var> pour déclencher 3D Secure pour <b>chaque</b> transaction, quelles que soient les exigences SCA.<br><br><b>Valeur par défaut</b> : <var>false</var>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_ACCEPT_CARDS' => 'Accepter les cartes de crédit ?',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_ACCEPT_CARDS' => 'Le module de paiement doit-il accepter les paiements par carte de crédit ?Si vous exécutez des transactions <var>en direct</var>, votre boutique <b>doit</b> être configurée pour utiliser le protocole <var>https</var> pour que les paiements par carte soient acceptés !<br><br>Si votre boutique utilise le paiement en une page, vous pouvez limiter les paiements par carte de crédit aux titulaires de compte.<br><b>Par défaut : false</b>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_HANDLING_OT' => 'Listez les <var>frais de traitement</var> dans les totaux de commandes',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_HANDLING_OT' => 'Identifiez, à l’aide d’une liste séparée par des virgules (les espaces sont acceptables), tous les modules de total de commande, <em>autres que</em> <code>ot_loworderfee</code>, qui ajoutent un élément <em>frais de traitement</em> à une commande. Laissez le paramètre comme une chaîne vide s’il n’y en a pas (valeur par défaut).',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_INSURANCE_OT' => 'Répertorier les <var>assurances</var> dans les totaux des commandes',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_INSURANCE_OT' => 'Identifiez, à l’aide d’une liste séparée par des virgules (les espaces sont acceptables), tous les modules de total de commande qui ajoutent un élément <em>assurance</em> à une commande. Laissez le paramètre comme une chaîne vide s’il n’y en a pas (valeur par défaut).',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_DISCOUNT_OT' => 'Listez les <var>remises</var> dans les totaux de commandes',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_DISCOUNT_OT' => 'Identifiez, à l’aide d’une liste séparée par des virgules (les espaces sont acceptables), tous les modules de total de commande (autres que ot_coupon, ot_gv et ot_group_pricing) qui ajoutent un élément de remise à une commande. Laissez le paramètre comme une chaîne vide s’il n’y en a pas (valeur par défaut).',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_DEBUGGING' => 'Mode débogage',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_DEBUGGING' => 'Souhaitez-vous activer le mode débogage ? Un journal complet et détaillé des transactions ayant échoué sera envoyé par courrier électronique au propriétaire du magasin.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALR_SOFT_DESCRIPTOR' => 'Identifiant du magasin (sous-marque) chez PayPal',
    'CFGDESC_MODULE_PAYMENT_PAYPALR_SOFT_DESCRIPTOR' => 'Sur les relevés de carte de crédit de vos clients, le nom de votre entreprise apparaîtra sous la forme <code>PAYPAL*(votrenom)*(nom-de-votre-sous-marque)</code> (22 lettres maximum pour (votrenom)*(nom-de-votre-sous-marque)). Vous pouvez ajouter le nom de la sous-marque ici pour différencier les achats effectués dans cette boutique de vos autres ventes PayPal.',
// eof constant configuration titles and descriptions for payment module paypalr
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPALR_TEXT_ADMIN_DESCRIPTION'] =
        '<b>Paiement PayPal (RESTful)</b>, v%s<br><br>' .   //- %s is filled in with the current module version
        '<a href="https://www.paypal.com/login" rel="noopener noreferrer" target="_blank">Gérez votre compte PayPal <b>professionnel</b></a><br><br>' .
        '<b>Instructions de configuration :</b><br>' .
        '<ol>
            <li><a href="https://github.com/lat9/paypalr/wiki/Creating-PayPal-Credentials" rel="noopener noreferrer" target="_blank">Créez vos identifiants PayPal (en anglais).</a></li>
            <li><a href="https://github.com/lat9/paypalr/wiki/Configuring-the-Payment-Module" rel="noopener noreferrer" target="_blank">Configurez les paramètres supplémentaires du module.</a></li>
         </ol>' .
        '<p>Consultez les <a href="https://github.com/lat9/paypalr/wiki" rel="noopener noreferrer" target="_blank">articles</a> du module de paiement sur GitHub pour plus d’informations.</p>';
}

return $define;
