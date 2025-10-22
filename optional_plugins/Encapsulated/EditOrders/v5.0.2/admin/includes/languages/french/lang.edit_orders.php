<?php
// -----
// Language constants used by the /admin/edit_orders.php processing (Edit Orders).
//
// Last modified v5.0.0
//
$define = [
// Page / Section Headings and common button names and other constants.
    'BUTTON_ADD' => 'Ajouter',
    'BUTTON_CHOOSE' => 'Choisir',
    'BUTTON_CLOSE' => 'Fermer',
    'BUTTON_COMMIT_CHANGES' => 'Valider les modifications',
    'BUTTON_RECALCULATE' => 'Recalculer',

    'HEADING_TITLE' => 'Modification de la commande',
    'HEADING_TITLE_SEARCH' => 'Numéro de commande :',
    'HEADING_TITLE_STATUS' => 'Statut :',
    'HEADING_TITLE_ADD_PRODUCT' => 'Ajouter un produit à la commande',

    'TEXT_LABEL_TAX' => 'Taxe (%) :',
    'TEXT_MODAL_CHANGES_TITLE' => 'Modifications de la commande',
    'TEXT_ORDER_TOTAL_ADDED' => '%1$s a été ajouté : %2$s',
    'TEXT_ORDER_TOTAL_REMOVED' => '%1$s a été supprimé : %2$s',
    'TEXT_ORIGINAL_ORDER' => 'Commande originale',
    'TEXT_ORIGINAL_VALUE' => 'Original : <code>%s</code>',           //- Tooltip string
    'TEXT_OSH_CHANGED_VALUES' => 'Ces valeurs ont été modifiées dans la commande :',
    'TEXT_OT_CHANGES' => 'Modifications du total de la commande',
    'TEXT_PRODUCT_CHANGES' => 'Modifications apportées au produit',
    'TEXT_UPDATED_ORDER' => 'Commande mise à jour',
    'TEXT_VALUE_CHANGED' => '%1$s est passé de %2$s à %3$s',   //- Used by the AJAX processing and for OSH record
    'TEXT_VALUE_UNKNOWN' => 'Inconnu [%s]',  //- %s is filled in with the unknown 'entity'
    'TEXT_SHIPPING_TAX_RATE_INITIALIZED' => 'Le taux de taxe des fraits d’expédition pour la commande a été initialisé à %s.',

// Table Headings
    'TABLE_HEADING_STATUS_HISTORY' => 'Commentaires et historique sur l’état des commandes',
    'TABLE_HEADING_COMMENTS' => 'Commentaires',
    'TABLE_HEADING_CUSTOMERS' => 'Clients',
    'TABLE_HEADING_ORDER_TOTAL' => 'Total de la commande',
    'TABLE_HEADING_DATE_PURCHASED' => 'Date d’achat',
    'TABLE_HEADING_STATUS' => 'Statut',
    'TABLE_HEADING_ACTION' => 'Action',
    'TABLE_HEADING_QUANTITY' => 'Qté.',
    'TABLE_HEADING_PRODUCTS' => 'Produits',
    'TABLE_HEADING_TAX' => 'Taxe',
    'TABLE_HEADING_TOTAL' => 'Total',
    'TABLE_HEADING_UNIT_PRICE' => 'Prix ​​unitaire', //- Also used for add/update product modals
    'TABLE_HEADING_UNIT_PRICE_NET' => 'Prix ​​unitaire (HT)',   //- Also used for add/update product modals
    'TABLE_HEADING_UNIT_PRICE_GROSS' => 'Prix ​​unitaire (TTC)',   //- Also used for add/update product modals
    'TABLE_HEADING_TOTAL_PRICE' => 'Prix ​​total',
    'TABLE_HEADING_CUSTOMER_NOTIFIED' => 'Client notifié',
    'TABLE_HEADING_DATE_ADDED' => 'Date d’ajout',
    'TABLE_HEADING_UPDATED_BY' => 'Mis à jour par',

// Order Address Entries
    'BUTTON_MAP_ADDRESS' => 'Adresse sur la carte',

    'ENTRY_CUSTOMER' => 'Informations client',
    'ENTRY_CUSTOMER_NAME' => 'Nom',
    'ENTRY_CUSTOMER_COMPANY' => 'Entreprise',
    'ENTRY_CUSTOMER_ADDRESS' => 'Adresse',
    'ENTRY_CUSTOMER_SUBURB' => 'Arrondissement',
    'ENTRY_CUSTOMER_CITY' => 'Ville',
    'ENTRY_CUSTOMER_STATE' => 'Département',
    'ENTRY_CUSTOMER_POSTCODE' => 'Code postal',
    'ENTRY_CUSTOMER_COUNTRY' => 'Pays',
    'ENTRY_SHIPPING_ADDRESS' => 'Adresse de livraison :',
    'ENTRY_BILLING_ADDRESS' => 'Adresse de facturation :',
    'ENTRY_TELEPHONE_NUMBER' => 'Téléphone :',       //- Shortening for modal-display; default is 'Telephone Number:'

    'TEXT_MODAL_ADDRESS_HEADER' => 'Modification de l’%s', //- %s is filled in with one the the 'xxx Address:' values, above
    'TEXT_STOREPICKUP_NO_SHIP_ADDR' => 'La commande est à récupérer en magasin, pas d’adresse de livraison.',
    'TEXT_VIRTUAL_NO_SHIP_ADDR' => 'La commande contient uniquement des produits <code>virtuels</code>, aucune adresse de livraison.',

    'PLEASE_SELECT' => 'Veuillez sélectionner',
    'TYPE_BELOW' => 'Entrez un choix ci-dessous ...',

// Order Payment Entries and Additional Infomation
    'ENTRY_CREDIT_CARD_TYPE' => 'Type de carte de crédit :',
    'ENTRY_CREDIT_CARD_OWNER' => 'Titulaire de la carte de crédit :',
    'ENTRY_CREDIT_CARD_NUMBER' => 'Numéro de Carte de Crédit :',
    'ENTRY_CREDIT_CARD_EXPIRES' => 'La carte de crédit expire le :',
    'ENTRY_CURRENCY_VALUE' => 'Valeur de la devise (%s) :',   //- %s is filled in with the order's currency-code
    'ENTRY_IS_GUEST_ORDER' => 'Commande invité ?',
    'ENTRY_PAYMENT_METHOD' => 'Mode de paiement :',
    'ENTRY_PAYMENT_MODULE' => 'Code du module de paiement :',
    'ENTRY_PURCHASE_ORDER_NUMBER' => 'Bon de commande :',
    'ENTRY_IS_WHOLESALE' => 'Commande en gros ?',
    'ENTRY_CUSTOMER_WHOLESALE' => 'Client grossiste ?',
    'ENTRY_CUSTOMER_TAX_EXEMPT' => 'Client exonéré d’impôt ?',

    'TEXT_PANEL_HEADER_ADDL_INFO' => 'Informations Complémentaires',

// Order Status Entries
    'BUTTON_ADD_COMMENT' => 'Nouveau commentaire',
    'BUTTON_ADD_COMMENT_ALT' => 'Ajouter ou réviser un commentaire pour cette commande',  //- Also used for the modal form's heading!
    'BUTTON_REMOVE' => 'supprimer',
    'BUTTON_REVIEW_COMMENT' => 'Revoir le commentaire',

    'ENTRY_STATUS' => 'Statut :',
    'ENTRY_CURRENT_STATUS' => 'Statut actuel : ',
    'ENTRY_NOTIFY_CUSTOMER' => 'Avertir le client :',
    'ENTRY_NOTIFY_COMMENTS' => 'Ajouter des commentaires :',

    'TEXT_COMMENT_ADDED' => 'Commentaire pour la commande',

// Email Entries
    'EMAIL_SEPARATOR' => '------------------------------------------------------',

    'EMAIL_TEXT_COMMENTS_UPDATE' => '<em>Les commentaires pour votre commande sont : </em>',
    'EMAIL_TEXT_DATE_ORDERED' => 'Date de commande :',
    'EMAIL_TEXT_INVOICE_URL' => 'Facture détaillée :',
    'EMAIL_TEXT_ORDER_NUMBER' => 'Numéro de commande :',
    'EMAIL_TEXT_STATUS_LABEL' => '%s' . "\n\n",
    'EMAIL_TEXT_STATUS_PLEASE_REPLY' => 'Veuillez répondre à cet e-mail si vous avez des questions.' . "\n",
    'EMAIL_TEXT_STATUS_UPDATED' => 'Votre commande a été mise à jour avec le statut suivant :' . "\n",
    'EMAIL_TEXT_SUBJECT' => 'Mise à jour de la commande',

// Success, Warning, and Error Messages
    'ERROR_ADDRESS_COUNTRY_NOT_FOUND' => 'La commande n°%u ne peut pas être modifiée. Une ou plusieurs adresses de la commande utilisent un pays inconnu de votre boutique ; les taxes et certains modules d’expédition ne fonctionneront probablement pas correctement tant que le problème n’aura pas été résolu.<br><br>Cela se produit généralement si un administrateur supprime, renomme ou désactive un pays à l’aide de l’outil <b>Emplacements / Taxes :: Pays</b>. Le problème peut être corrigé en effectuant l’une des opérations suivantes :<ul><li>Ajoutez à nouveau le pays (et le nom) à votre base de données Zen Cart.</li><li>Réactivez temporairement le pays pour permettre la modification de la commande.</li></ul>',
    'ERROR_CANT_DETERMINE_TAX_RATES' => 'La commande n°%u ne peut pas être modifiée, car ses taux de taxe ne peuvent pas être déterminés.',
    'ERROR_DISPLAY_PRICE_WITH_TAX' => 'Vous avez configuré Zen Cart pour afficher les prix ' . (DISPLAY_PRICE_WITH_TAX_ADMIN !== 'true' ? 'avec ' : 'hors ') . 'taxes. Cette page affiche actuellement les prix ' . (DISPLAY_PRICE_WITH_TAX !== 'true' ? 'avec ' : 'hors ') . 'taxes. Les commandes ne peuvent pas être modifiées tant que les deux paramètres ne sont pas identiques.',
    'ERROR_NO_PRODUCT_TAX_DESCRIPTION' => 'La commande n°%1$u ne peut pas être modifiée. Aucune description de taxe n’a pu être trouvée pour le taux de taxe <em>%2$s</em> (%3$s%%).',
    'ERROR_NO_SHIPPING_TAX_DESCRIPTION' => 'La commande n°%1$u ne peut pas être modifiée. Aucune description de taxe n’a pu être trouvée pour le taux de taxe d’expédition (%2$s%%).',
    'ERROR_ORDER_DOES_NOT_EXIST' => 'La commande n’existe pas.',
    'ERROR_PRODUCT_ATTRIBUTE_DOES_NOT_EXIST' => 'La commande n°%1$u ne peut pas être modifiée. Le nom/la valeur de l’option (%2$s [#%3$u]/%4$s [#%5$u]) ne s’applique plus au produit (%6$s [#%7$u]).',
    'ERROR_PRODUCT_DOES_NOT_EXIST' => 'La commande n°%1$u ne peut pas être modifiée. Le produit (%2$s [#%3$u]) n’existe plus.',
    'ERROR_SHIPPING_TAX_RATE_MISSING' => 'La commande n°%u ne peut pas être modifiée. Son taux de taxe d’expédition n’a pas été enregistré auparavant.',
    'ERROR_ZEN_ADD_TAX_ROUNDING' => "La fonction <code>zen_add_tax</code> du magasin doit être mise à jour pour permettre l'utilisation du module <em>Modifier les commandes</em>.",

    'SUCCESS_ORDER_UPDATED' => 'La commande n°%u a été mise à jour avec succès.',

    'WARNING_INSUFFICIENT_PRODUCT_STOCK' => 'Stock insuffisant pour <em>%1$s</em>, %2$s demandé avec %3$s disponibles.',
    'WARNING_NO_UPDATES_TO_ORDER' => 'Rien à mettre à jour ; aucune modification n’a été enregistrée sur cette commande.',
    'WARNING_ORDER_COUPON_BAD' => 'Attention : le code promo (%s) de la commande n’est plus valide. La mise à jour de la commande supprimera toutes les déductions associées à ce coupon !',
    'WARNING_ORDER_NOT_UPDATED' => 'Attention : Rien à modifier. La commande n’a pas été mise à jour.',
    'WARNING_ORDER_QTY_OVER_MAX' => 'Attention : La quantité demandée dépasse le maximum autorisé pour une commande. La quantité ajoutée a été réduite au maximum autorisé par commande.',

// Order Totals Display
    'ERROR_OT_NOT_INSTALLED' => 'Le total de la commande sélectionné (%s) n’est pas installé et ne peut pas être mis à jour.',

    'TEXT_CHOOSE_SHIPPING_MODULE' => 'Choisissez un module d’expédition :',
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'SUPPRIMER',     //- ALWAYS uppercased!
    'TEXT_COUPON_LINK_TITLE' => 'voir les conditions du coupon',
    'TEXT_LABEL_COUPON_CODE' => 'Code promo :',
    'TEXT_LABEL_METHOD' => 'Méthode :',
    'TEXT_LABEL_MODULE' => 'Module :',
    'TEXT_LABEL_TITLE' => 'Titre :',
    'TEXT_LABEL_VALUE' => 'Valeur :',
    'TEXT_LABEL_COST_INCL' => 'Coût (TTC) :',
    'TEXT_LABEL_COST_EXCL' => 'Coût (HT) :',
    'TEXT_OT_ADD_MODAL_TITLE' => 'Ajouter le total de la commande (%s)',
    'TEXT_OT_UPDATE_MODAL_TITLE' => 'Modification du total de la commande (%s)',    //- %s is filled in with the order-total's class, e.g. ot_shipping
    'TEXT_FIELD_CANNOT_BE_EMPTY' => 'Ce champ ne peut pas être vide.',

// Adding/updating a product
    'ERROR_PRODUCT_NOT_FOUND' => 'Le produit demandé (%s) n’est pas présent dans la commande.',
    'ERROR_MODEL_TOO_LONG' => 'La valeur de « modèle » ne doit pas dépasser %u caractères.',
    'ERROR_NAME_TOO_LONG' => 'La valeur de « nom » ne doit pas dépasser %u caractères.',
    'ERROR_NO_MATCHING_PRODUCT' => 'Aucun produit n’a été trouvé correspondant à votre demande ; veuillez réessayer.',
    'ERROR_PRICE_INVALID' => 'Le prix du produit et/ou les frais uniques doivent être un nombre et supérieurs ou égaux à zéro.',
    'ERROR_QTY_INSUFFICIENT' => 'La quantité de produit disponible (%s) est insuffisante.',
    'ERROR_QTY_INVALID' => 'La quantité du produit doit être un nombre et supérieure ou égale à zéro.',
    'ERROR_TAX_RATE_INVALID' => 'Le taux de taxe du produit doit être une valeur numérique comprise entre 0 et 100.',

    'TEXT_ADD_NEW_PRODUCT' => 'Ajouter un produit',        //- Used for button text
    'TEXT_ATTRIBUTES_ONE_TIME_CHARGE' => 'Frais uniques :',
    'TEXT_ATTRIBUTES_READONLY' => ' (r/o)',
    'TEXT_ATTRIBUTES_UNKNOWN_OPTION_TYPE' => 'Type d’option inconnu (%u)',

    'TEXT_FILE_UPLOAD_NOT_SUPPORTED' => 'TÉLÉCHARGEMENT DE FICHIER NON PRIS EN CHARGE',

    'TEXT_LABEL_NAME' => 'Nom :',
    'TEXT_LABEL_MODEL' => 'Modèle :',
    'TEXT_LABEL_QTY_AVAIL' => 'Qté disponible :',
    'TEXT_LABEL_QTY' => 'Qté :',

    'TEXT_PRODUCT_ADD_MODAL_TITLE' => 'Ajouter un produit à la commande',
    'TEXT_PRODUCT_ATTRIBUTES' => 'Attributs du produit',
    'TEXT_PRODUCT_BEING_ADDED' => 'Le produit est en cours d’ajout à la commande.',
    'TEXT_PRODUCT_CHOOSE_BY_CATEGORY' => 'Choisissez par catégorie',
    'TEXT_PRODUCT_CHOOSE_BY_ID' => 'Choisir par ID de produit',
    'TEXT_PRODUCT_CHOOSE_BY_SEARCH' => 'Choisissez par nom de produit/recherche de modèle',
    'TEXT_PRODUCT_CHOOSE_SUBTITLE' => 'Choisissez un produit',
    'TEXT_PRODUCT_NEW_MODAL_TITLE' => 'Nouveau produit',
    'TEXT_PRODUCT_NEW_SELECT_CHOOSE' => 'Sélectionnez un produit dans la liste ci-dessous, puis cliquez sur le bouton « Choisir ».',
    'TEXT_PRODUCT_UPDATE_MODAL_TITLE' => 'Mise à jour d’un produit',

    'TEXT_SELECT_PRODUCT' => 'Sélectionnez le produit :',

    //- These three constants define the message to be recorded for products' changes. All 3
    //  use the same sprintf values:
    //
    // %1$s (qty), %2$s (name), %3$s (model), %4$s (final price), %5$s (tax rate)
    //
    'TEXT_STATUS_PRODUCT_ADDED' => 'Ajouté : %1$s x %2$s [%3$s] à %4$s (taux d’imposition %5$s%%)',
    'TEXT_STATUS_PRODUCT_CHANGED' => 'Certains détails du produit ont été modifiés de : %1$s x %2$s [%3$s] @ %4$s (taux de taxe %5$s%%)',
    'TEXT_STATUS_PRODUCT_REMOVED' => 'Supprimé : %1$s x %2$s [%3$s] à %4$s (taux d’imposition %5$s%%)',

// Navigation Display
    'BUTTON_TO_LIST' => 'Liste de commande',
    'DETAILS' => 'Détails',
    'IMAGE_ORDER_DETAILS' => 'Afficher les détails de la commande',
    'SELECT_ORDER_LIST' => 'Passer à la commande :',

// Required for various added zen_cart functions
    'PULL_DOWN_DEFAULT' => 'Veuillez choisir votre pays',

    'TEXT_UNKNOWN_TAX_RATE_MANUAL' => 'Taxe de vente (%s%%)',
    'TEXT_UNKNOWN_TAX_RATE' => 'Taxe de vente',

// Other elements
    'PAYMENT_CALC_METHOD' => 'Choisissez la méthode de tarification du produit :',
        'PAYMENT_CALC_MANUAL' => 'Activer l’édition',
        'PAYMENT_CALC_AUTOSPECIALS' => 'Modification interdite',
    'PRODUCT_PRICES_CALC_AUTOSPECIALS' => ' <b>Remarque :</b> les prix des produits sont calculés <em>automatiquement</em> et ne peuvent pas être modifiés.',
    'PRODUCT_PRICES_CALC_MANUAL' => ' <b>Remarque :</b> les prix des produits peuvent être modifiés.',

    'EO_MESSAGE_ADDRESS_UPDATED' => 'L’adresse %1$s de la commande a été mise à jour à partir de : ',   //-%1$s: The type of address (see below) that was updated
        'EO_CUSTOMER' => 'client',
        'EO_BILLING' => 'facturation',
        'EO_DELIVERY' => 'livraison',
        'EO_MESSAGE_ORDER_UPDATED' => 'La commande a été mise à jour via « Modifier les commandes ». ',
    'EO_MESSAGE_PRICING_AUTO' => 'Le prix a été calculé automatiquement, sans prix spéciaux.',
    'EO_MESSAGE_PRICING_AUTOSPECIALS' => 'Le prix a été calculé automatiquement, en utilisant des prix spéciaux.',
    'EO_MESSAGE_PRICING_MANUAL' => 'Les prix ont été fournis manuellement.',

    'EO_MESSAGE_PRODUCT_ADDED' => '%1$s x "%2$s" a été ajouté à la commande',   //-%1$s: The product quantity, %2$s: The product name
    'EO_MESSAGE_PRODUCT_ATTRIBS_ADDED' => ', avec options (%s)',

    'TEXT_PANEL_HEADER_UPDATE_INFO' => 'Informations sur la mise à jour de la commande',
];
return $define;
