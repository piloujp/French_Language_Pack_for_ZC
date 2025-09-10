<?php

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_MONTHLYSALESTAXREPORT' => 'Résumé mensuel des ventes et taxes',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_MONTHLYSALESTAXREPORT' => 'Ce rapport présente un résumé des totaux mensuels ou quotidiens :<ul><li>revenu brut (total des commandes)</li><li>sous-totaux de toutes les commandes de la période sélectionnée</li><li>sous-totaux des ventes non taxées</li><li>sous-totaux des ventes taxées</li><li>montant des taxes collectées</li><li>frais de port et de manutention</li><li>frais supplémentaires pour les petites commandes (le cas échéant)</li><li>chèques-cadeaux (ou autres éléments ajoutés au total de la commande, le cas échéant)</li></ul></li></ul><br>Les données proviennent des tables « orders » et « orders_total ».',
];

return $define;
