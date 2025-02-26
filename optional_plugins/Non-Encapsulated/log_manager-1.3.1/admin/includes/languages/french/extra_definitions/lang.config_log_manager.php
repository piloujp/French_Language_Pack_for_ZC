<?php

$define = [
    'CFGTITLE_LOG_MANAGER_KEEP_DAYS' => 'Gestionnaire de journaux : jours à conserver',
    'CFGDESC_LOG_MANAGER_KEEP_DAYS' => 'Saisissez le nombre maximal de <em>jours</em> pendant lesquels conserver tout fichier portant l\'extension <code>.log</code> dans le répertoire <b>logs</b> de votre boutique.<br><br>Si la valeur que vous saisissez est différente de zéro, tous les fichiers créés avant cette date relative seront <b>définitivement supprimés</b> du système de fichiers de votre boutique.<br>',
    'CFGTITLE_LOG_MANAGER_KEEP_THESE' => 'Gestionnaire de journaux : journaux à conserver',
    'CFGDESC_LOG_MANAGER_KEEP_THESE' => 'Saisissez une liste séparée par des virgules de préfixes de noms pour tous les fichiers journaux que vous souhaitez conserver, quel que soit leur âge.<br><br>Les valeurs que vous saisissez sont <em>sensibles à la casse</em>, c\'est-à-dire que <em>zcInstall</em> est différent de <em>zcinstall</em>. Le paramètre par défaut (<code>zcInstall</code>) entraîne la conservation de tout fichier correspondant à <code>/logs/zcInstall*.log</code>, quelle que soit sa date de création.<br>',
];

return $define;