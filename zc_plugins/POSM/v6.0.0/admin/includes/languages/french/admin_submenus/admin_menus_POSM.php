<?php

if (array_key_exists('plugin_control', $admin_submenus)) {
    $admin_submenus['plugin_control'] += [
        'POSM' => 'Ce plugin permet à votre site d\'attribuer des niveaux de stock et des numéros de modèle à vos produits en fonction de combinaisons produit-attributs (également appelées « variantes de produit » ou « stock par attributs »).',
    ];
} else {
    $admin_submenus['plugin_control'] = [
        'POSM' => 'Ce plugin permet à votre site d\'attribuer des niveaux de stock et des numéros de modèle à vos produits en fonction de combinaisons produit-attributs (également appelées « variantes de produit » ou « stock par attributs »).',
    ];
}
if (array_key_exists('products_options_stock_names', $admin_submenus)) {
    $admin_submenus['products_options_stock_names'] += [
        1 => 'En rupture de stock'
    ];
} else {
    $admin_submenus['products_options_stock_names'] = [
        1 => 'En rupture de stock'
    ];
}
