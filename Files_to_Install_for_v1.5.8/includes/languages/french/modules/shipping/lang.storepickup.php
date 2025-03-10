<?php
$define = [
    'MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE' => 'Retrait en Point de Vente',
    'MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION' => 'Retrait sur place par le client',
    'MODULE_SHIPPING_STOREPICKUP_TEXT_WAY' => 'Sur place',
    'MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS' => "",
];

// MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS permet de définir plusieurs emplacements/methodes par langue. Il n'est utilisé que si l'acheteur a sélectionné une langue autre que celle par défaut.
// Le contenu de la définition MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS doit être le même que celui des multiples emplacements dans les paramères du module d'expédition dans votre administration, juste avec les noms modifiés.
// Les formats typiques sont?:
// "Emplacement un, 5.00; Emplacement deux, 3.50; Emplacement trois, 0.00"
// "Emplacement un, Emplacement deux, Emplacement trois"
// ou laissez-le vide pour utiliser simplement le même texte que celui défini dans l'administration, quelle que soit la langue
// CONSEIL : ce champ doit rester vide pour la langue par défaut, sinon le champ Paramètres de l\'administration n'est jamais utilisé.

return $define;
