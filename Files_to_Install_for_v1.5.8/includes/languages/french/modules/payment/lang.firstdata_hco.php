<?php
$define = [
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ADMIN_TITLE' => 'Pages de paiement hébergées par First Data',
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_CATALOG_TITLE' => 'Carte de crédit',
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DECLINED_MESSAGE' => 'La transaction n’a pas pu être effectuée. Veuillez essayer une autre carte ou contacter votre banque pour plus d’informations.  ',
    'MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_ERROR_MESSAGE' => 'Une erreur s’est produite lors du traitement de la transaction. Veuillez réessayer.  ',
];

if (IS_ADMIN_FLAG === true) {
    if (defined('MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS') && MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_STATUS == 'True') {
        $define['MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://' . (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE == 'Sandbox' ? 'demo.' : '') . 'globalgatewaye4.firstdata.com">Connexion marchand First Data GGe4</a>' .
            (MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TESTMODE != 'Production' ? '<br><br>For TEST CARDS refer to <a href="https://support.payeezy.com/hc/en-us/articles/204504235-Using-test-credit-card-numbers" rel="noreferrer noopener" target="_blank">Utilisation des cartes de crédit de test</a>' : '') .
            '<br><br><strong>SETTINGS</strong><br>Votre paramètre « URL du lien de réception » dans la configuration de votre page de paiement First Data doit pointer vers <u>' . zen_catalog_href_link('checkout_process') . '</u><br>' .
            'Ensuite, obtenez l’ID de page de paiement, la clé de transaction et la clé de réponse auprès de First Data et saisissez-les ici. Vous pouvez les trouver en vous connectant à votre compte First Data, en choisissant Pages de paiement, en cliquant sur l’ID de page souhaité et en accédant à la section Sécurité.';
    } else {
        $define['MODULE_PAYMENT_FIRSTDATA_PAYMENTPAGES_TEXT_DESCRIPTION'] = 'Les pages de paiement hébergées sont disponibles pour tous les marchands First Data, Global Gateway e4 et Linkpont.<br><br>
             Votre représentant de compte First Data peut vous aider à apporter les modifications nécessaires pour activer Hosted Checkout (HCO) dans votre compte.<br><br>
             <a rel="noreferrer noopener" target="_blank" href="https://www.zen-cart.com/partners/firstdatahosted/">Cliquez ici pour vous inscrire à un compte de paiement hébergé First Data</a><br><br>
             <a rel="noreferrer noopener" target="_blank" href="https://globalgatewaye4.firstdata.com/">Cliquez pour vous connecter à la zone marchande First Data GGe4</a>';
    }
}

return $define;
