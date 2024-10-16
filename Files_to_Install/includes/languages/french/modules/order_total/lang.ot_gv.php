<?php
$define = [
    'MODULE_ORDER_TOTAL_GV_TITLE' => TEXT_GV_NAMES,
    'MODULE_ORDER_TOTAL_GV_HEADER' => TEXT_GV_NAMES.'/Bons de Réduction',
    'MODULE_ORDER_TOTAL_GV_DESCRIPTION' => TEXT_GV_NAMES,
    'MODULE_ORDER_TOTAL_GV_USER_PROMPT' => 'Appliquer le montant: ',
    'MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,
    'TEXT_INVALID_REDEEM_AMOUNT' => 'Le montant que vous avez essayé d\'appliquer et le reliquat disponible de vos chèques cadeaux ne correspondent pas. Veuillez rectifier et réessayer.',
    'MODULE_ORDER_TOTAL_GV_USER_BALANCE' => 'Solde disponible: ',
    'MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS' => '<p>Pour utiliser le reliquat disponible de vos chèques cadeaux dans votre compte, tapez le montant que vous souhaitez utiliser dans le champ \'Appliquer montant\. Vous devrez choisir un moyen de paiement, cliquez alors sur le bouton Continuer pour appliquer le reliquat à votre panier.</p><p>Si vous utilisez un <em>nouveau</em> chèque cadeau, vous devez taper le code dans le champ à côté du code de réduction. Le montant de la réduction sera ajouté à votre compte quand vous cliquerez sur le bouton "Continuer".</p>',
    'MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR' => ' Définir Inclure taxes = true, va seulement être utile si recalculer = None',
// bof constant configuration titles and descriptions for order total module ot_gv
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_STATUS' => 'Ce module est installé',
//    'CFGDESC_MODULE_ORDER_TOTAL_GV_STATUS' => 'Voulez-vous que ce module s\'affiche ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_SORT_ORDER' => 'Ordre d\'affichage.',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_QUEUE' => 'Mettre les achats en file d\'attente',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_QUEUE' => 'Voulez-vous mettre en file d\'attente les achats de Chèques Cadeaux ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_SHOW_QUEUE_IN_ADMIN' => 'Afficher la file d\'attente dans l\'en-tête d\'administration ?',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_SHOW_QUEUE_IN_ADMIN' => 'Afficher le bouton File d\'attente sur toutes les pages d\'administration ?<br>(Se masquera automatiquement s\'il n\'y a rien dans la file d\'attente et s\'affichera automatiquement sur l\'écran « Commandes », quel que soit ce paramètre)',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_INC_SHIPPING' => 'Inclure les frais de port',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_INC_SHIPPING' => 'Inclure les frais de port dans le calcul',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_INC_TAX' => 'Inclure la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_INC_TAX' => 'Inclure la taxe dans le calcul.',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_CALC_TAX' => 'Recalculer la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_CALC_TAX' => 'Méthode de recalcule de la taxe.',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_TAX_CLASS' => 'Classe de la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_TAX_CLASS' => 'Utilisez la classe de taxe suivante quand la méthode de recalcule « Credit Note » est utilisée.',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_CREDIT_TAX' => 'Inclure la taxe au crédit',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_CREDIT_TAX' => 'Ajoutez la taxe au chèque-cadeau acheté lors de la créditation du compte',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_ORDER_STATUS_ID' => 'Définir le statut de la commande',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_ORDER_STATUS_ID' => 'Définir le statut des commandes effectuées où le chèque-cadeau prend intégralement en charge le paiement',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_SPECIAL' => 'Autoriser les offres spéciales sur les chèques-cadeaux',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_SPECIAL' => 'Souhaitez-vous autoriser les promotions sur les chèques-cadeaux ?',
// eof constant configuration titles and descriptions for order total module ot_gv
];

return $define;
