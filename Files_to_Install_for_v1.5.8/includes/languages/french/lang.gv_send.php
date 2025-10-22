<?php
$define = [
    'HEADING_TITLE' => 'Envoyer ' . TEXT_GV_NAME,
    'HEADING_TITLE_CONFIRM_SEND' => 'Confirmation de l’envoi de ' . TEXT_GV_NAME,
    'HEADING_TITLE_COMPLETED' => TEXT_GV_NAME . ' envoyé',
    'NAVBAR_TITLE' => 'Envoyer ' . TEXT_GV_NAME,
    'EMAIL_SUBJECT' => 'Message de ' . STORE_NAME,
    'HEADING_TEXT' => 'Veuillez entrer le nom, adresse e-mail et montant du ' . TEXT_GV_NAME . ' que vous souhaitez envoyer. Pour de plus amples informations, veuillez consulter notre <a href="' . zen_href_link(FILENAME_GV_FAQ) . '">' . GV_FAQ . '.</a>',
    'ENTRY_MESSAGE' => 'Votre Message: ',
    'ENTRY_AMOUNT' => 'Montant à envoyer: ',
    'ERROR_ENTRY_TO_NAME_CHECK' => 'Vous n’avez pas précisé le nom du destinataire. Veuillez remplir le champ correspondant ci-dessous. ',
    'ERROR_ENTRY_AMOUNT_CHECK' => 'Le montant du ' . TEXT_GV_NAME . ' semble incorrect. Veuillez réessayer.',
    'ERROR_ENTRY_EMAIL_ADDRESS_CHECK' => 'L’adresse e-mail semble incorrecte. Veuillez réessayer.',
    'MAIN_MESSAGE' => 'Vous envoyez un ' . TEXT_GV_NAME . ' d’une valeur de %1$s à %2$s dont l’adresse e-mail est %3$s. Si ces détails sont incorrects, vous pouvez modifier votre message en cliquant sur le bouton <strong>edit</strong>.<br><br>Le message que vous envoyez est le suivant:<br><br>',
    'SECONDARY_MESSAGE' => 'Cher(Chère) %1$s,<br><br>' . 'Un ' . TEXT_GV_NAME . ' d’une valeur de %2$s vous a été envoyé par %3$s',
    'PERSONAL_MESSAGE' => '%s dit:',
    'TEXT_SUCCESS' => 'Félicitations, votre ' . TEXT_GV_NAME . ' a été envoyé avec succès',
    'TEXT_SEND_ANOTHER' => 'Voulez-vous envoyer un autre ' . TEXT_GV_NAME . '?',
    'EMAIL_GV_TEXT_SUBJECT' => 'Un cadeau de %s',
    'EMAIL_SEPARATOR' => '----------------------------------------------------------------------------------------',
    'EMAIL_GV_TEXT_HEADER' => 'Félicitations, Vous avez reçu un ' . TEXT_GV_NAME . ' d’une valeur de %s',
    'EMAIL_GV_FROM' => 'Ce ' . TEXT_GV_NAME . ' vous a été adressé par %s',
    'EMAIL_GV_MESSAGE' => 'avec le message suivant: ',
    'EMAIL_GV_SEND_TO' => 'Bonjour, %s',
    'EMAIL_GV_REDEEM' => 'Pour encaisser ce ' . TEXT_GV_NAME . ', veuillez cliquer sur le lien ci-dessous. Pensez également à noter par écrit, ou imprimer la référence du ' . TEXT_GV_REDEEM . ': %s afin d’éviter toute erreur possible.',
    'EMAIL_GV_LINK' => 'Pour vous rendre sur la page d’encaissement, veuillez cliquer sur le lien suivant',
    'EMAIL_GV_FIXED_FOOTER' => 'Si vous éprouvez des difficultés pour encaisser le ' . TEXT_GV_NAME . ' via le lien automatique ci-dessus, ' . "\n" .
        'nous vous informons que vous pouvez aussi entrer le ' . TEXT_GV_REDEEM . ' du ' . TEXT_GV_NAME . ' lors du processus d’encaissement sur notre boutique.',
    'EMAIL_GV_SHOP_FOOTER' => '',
];

return $define;
