<?php
//rmh referral begin
$define = [
    'ENTRY_SOURCE' => 'Comment avez-vous entendu parler de nous :',
    'ENTRY_SOURCE_ERROR' => 'Veuillez sélectionner comment vous avez entendu parler de nous pour la première fois.',
    'ENTRY_SOURCE_OTHER' => '(si « Autre » veuillez préciser) :',
    'ENTRY_SOURCE_OTHER_ERROR' => 'Veuillez indiquer comment vous avez entendu parler de nous pour la première fois.',
    'PULL_DOWN_SOURCES' => 'Veuillez sélectionner une source',
    'PULL_DOWN_OTHER' => 'Autre - (veuillez préciser)',
    'ENTRY_SOURCE_TEXT' => '',
    'ENTRY_SOURCE_OTHER_TEXT'  => '',
];
if (defined('REFERRAL_REQUIRED') && REFERRAL_REQUIRED === 'true') {
    $define['ENTRY_SOURCE_TEXT'] = '*';
    $define['ENTRY_SOURCE_OTHER_TEXT'] = '*';
}
return $define;
//rmh referral end
