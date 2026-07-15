<?php

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_ALSOPURCHASEDTURBO' => 'Également acheté (turbo)',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_ALSOPURCHASEDTURBO' => 'Remplace le mécanisme natif « Les clients ayant acheté ce produit ont également acheté... » par une table de paires de produits précalculée, éliminant ainsi la coûteuse jointure sur la table `orders_products` lors de l’affichage de chaque page produit. Les recommandations sont classées selon une affinité d’achat réelle et maintenues à jour grâce à un observateur du processus de commande. Aucune modification des fichiers du cœur du système ou des modèles (templates) n’est requise ; l’affichage existant des recommandations est préservé.',
// Admin configuration
    'CFGTITLE_APT_ENABLED' => 'Activer « Également acheté (turbo) » ?',
    'CFGDESC_APT_ENABLED' => 'Lorsque cette option est activée (<b>true</b>), les pages produits récupèrent les recommandations depuis la table de paires précalculée, et les nouvelles commandes la mettent à jour lors du passage en caisse. Lorsqu’elle est désactivée (<b>false</b>), la requête standard relative aux produits « également achetés » est utilisée, exactement comme si ce plugin n’était pas installé.<br><br>Le nombre d’éléments affichés et la disposition en colonnes utilisent les paramètres par défaut (<code>MIN_DISPLAY_ALSO_PURCHASED</code>, <code>MAX_DISPLAY_ALSO_PURCHASED</code>, colonnes) définis dans Configuration > Informations produit.',
    'CFGTITLE_APT_RANKING' => 'Classement des recommandations',
    'CFGDESC_APT_RANKING' => '<b>Affinity</b> : produits les plus souvent achetés conjointement avec celui-ci, en commençant par les plus fortement associés (recommandé).<br><b>Recency</b> : produits achetés conjointement le plus récemment en premier (se rapproche le plus du comportement des stocks).<br><b>Random</b> : sélection aléatoire de produits achetés conjointement.',
    'CFGTITLE_APT_FALLBACK_STOCK' => 'Revenir à la requête standard lorsqu’un produit ne dispose pas de données de paire ?',
    'CFGDESC_APT_FALLBACK_STOCK' => 'Lorsque ce paramètre est défini sur <b>true</b> et que la table des paires ne contient aucune ligne pour le produit consulté (par exemple, avant la fin de l’initialisation des données), la requête relative aux articles souvent achetés conjointement est exécutée pour ce produit, afin que l’affichage de la boutique ne se dégrade pas. Réglez ce paramètre sur <b>false</b> pour les très grandes boutiques une fois l’initialisation terminée, afin qu.un produit sans paire n’engendre aucun coût de performances.',
    'CFGTITLE_APT_DEBUG_LOG' => 'Activer le journal de débogage',
    'CFGDESC_APT_DEBUG_LOG' => 'Écrit les informations de diagnostic dans <code>logs/also_purchased_turbo_debug.log</code>. Chaque affichage de page produit consigne une ligne au format JSON (ID du produit, source de données utilisée, mode de classement, nombre de lignes renvoyées, temps d’exécution de la requête) ; chaque enregistrement de commande consigne l’activité liée au couple commande/produit. À activer UNIQUEMENT lors d’une phase de dépannage, car le fichier journal grossit à chaque consultation de page produit. Le fichier journal peut être supprimé sans risque à tout moment.',
    'CFGTITLE_APT_SEED_PROGRESS' => 'Progression de l’initialisation (gérée automatiquement)',
    'CFGDESC_APT_SEED_PROGRESS' => 'Suivi interne du processus d’initialisation des données. Géré par « Outils > Également acheté (turbo) » — ne pas modifier manuellement. Vide = initialisation pas encore effectuée ; un nombre = prochain ID de commande à traiter ; <code>done</code> = initialisation terminée.',
// Configuration_group
    'CFG_GRP_TITLE_ALSO_PURCHASED_TURBO' => 'Également acheté (turbo)',
    'CFG_GRP_DESC_ALSO_PURCHASED_TURBO' => 'Paramètres du moteur de recommandation « Également acheté (turbo) ».',
];

return $define;
