<?php

if (array_key_exists('plugin_control', $admin_submenus)) {
    $admin_submenus['plugin_control'] += [
        'DisplayLogs' => 'Affiche et gère les fichiers journaux de Zen Cart.',
    ];
} else {
    $admin_submenus['plugin_control'] = [
        'DisplayLogs' => 'Affiche et gère les fichiers journaux de Zen Cart.',
    ];
}