<?php
$define = [
    'MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE' => 'Retrait en Point de Vente',
    'MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION' => 'Retrait sur place par le client',
    'MODULE_SHIPPING_STOREPICKUP_TEXT_WAY' => 'Sur place',
    'MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS' => "",
];

// MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS permet de definir plusieurs emplacements/methodes par langue. Il n'est utilise que si l'acheteur a selectionne une langue autre que celle par defaut du magasin.
// Le contenu de la definition MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS doit etre le meme que celui des multiples emplacements dans les parametres du module d'expedition dans votre administrateur, juste avec les noms modifies.
// Les formats typiques sont?:
// "Emplacement un, 5.00; Emplacement deux, 3.50; Emplacement trois, 0.00"
// "Emplacement un, Emplacement deux, Emplacement trois"
// ou laissez-le vide pour utiliser simplement le meme texte que celui defini dans l'administrateur, quelle que soit la langue
// CONSEIL?:?Ce champ doit rester vide pour la langue par defaut, sinon le champ Parametres administrateur n'est jamais utilise.

return $define;
