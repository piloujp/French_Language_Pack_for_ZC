<?php
$define = [
    'CFG_GRP_TITLE_VAT4EU_PLUGIN' => 'Plugin TVA pour les pays de l\'UE (VAT4EU)',
    'CFGTITLE_VAT4EU_MODULE_VERSION' => 'Version du plugin et date de sortie',
    'CFGDESC_VAT4EU_MODULE_VERSION' => 'La version actuelle et la date de sortie de « TVA pour les pays de l\'UE (VAT4EU) ».',
    'CFGTITLE_VAT4EU_EU_COUNTRIES' => 'Liste des pays de l\'Union européenne',
    'CFGDESC_VAT4EU_EU_COUNTRIES' => 'Cette liste, séparée par des virgules, identifie les pays qui font partie de l\'UE par leurs codes ISO à 2 caractères ; les espaces sont autorisés. Vous n\'aurez normalement pas besoin de modifier cette liste ; elle est fournie au fur et à mesure que les pays membres entrent et sortent de l\'UE.<br><br><b>Par défaut</b> : AT, BE, BG, CY, CZ, DE, DK, EE, GR, ES, FI, FR, HR, HU, IE, IT, LT, LU, LV, MT, NL, PL, PT, RO, SE, SI, SK',
    'CFGTITLE_VAT4EU_ENABLED' => 'Activer le traitement en boutique ?',
    'CFGDESC_VAT4EU_ENABLED' => 'Le traitement <em>VAT4EU</em> est activé lorsque ce paramètre est « true » et que vous avez également défini <em>Configuration :: Détails du client :: Société</em> sur <b>true</b>.',
    'CFGTITLE_VAT4EU_REQUIRED' => 'Numéro de TVA requis ?',
    'CFGDESC_VAT4EU_REQUIRED' => 'Le <em>numéro de TVA</em> doit-il être un champ <b>obligatoire</b> ?',
    'CFGTITLE_VAT4EU_MIN_LENGTH' => 'Longueur minimale du numéro de TVA',
    'CFGDESC_VAT4EU_MIN_LENGTH' => 'Identifiez la longueur minimale d\'un numéro de TVA saisi, utilisé comme pré-vérification pour toute valeur d\'entrée. Définissez la valeur sur <em>0</em> pour désactiver cette vérification.',
    'CFGTITLE_VAT4EU_IN_COUNTRY_REFUND' => 'Activer le remboursement de la TVA pour les achats dans le pays ?',
    'CFGDESC_VAT4EU_IN_COUNTRY_REFUND' => 'Les achats effectués par des adresses dans le pays du magasin devraient-ils bénéficier d\'un <em>remboursement de TVA</em> ?',
    'CFGTITLE_VAT4EU_VALIDATION' => 'Validation du <em>numéro de TVA</em>',
    'CFGDESC_VAT4EU_VALIDATION' => 'Un numéro de TVA doit être validé avant d\'accorder au client un remboursement de TVA. Choisissez la méthode de validation à utiliser pour votre boutique parmi l\'une des suivantes :<br><br><b>Customer</b> ... Valide le numéro de TVA à chaque mise à jour par le client<br><b>Admin</b> ... Valide uniquement le numéro de TVA par action administrative.<br>',
    'CFGTITLE_VAT4EU_UNVERIFIED' => 'Numéro de TVA : indicateur « Non validé »',
    'CFGDESC_VAT4EU_UNVERIFIED' => 'Identifiez l\'indicateur que vous souhaitez donner à vos clients qui ont saisi un <em>numéro de TVA</em> alors que ce numéro n\'est pas encore validé.<br><br>Par défaut : <b>*</b>',
    'CFGTITLE_VAT4EU_DEBUG' => 'Activer le débogage ?',
    'CFGDESC_VAT4EU_DEBUG' => 'Le mode de débogage du plugin doit-il être activé ? Lorsqu\'il est activé, chaque demande et réponse de validation de TVA est enregistrée dans /logs/VatValidate.log.',
];

return $define;