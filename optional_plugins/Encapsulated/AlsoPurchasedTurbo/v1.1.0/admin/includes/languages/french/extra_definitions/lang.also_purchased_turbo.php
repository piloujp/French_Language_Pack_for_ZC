<?php
/**
 * Module: AlsoPurchasedTurbo
 *
 * @requires    Zen Cart 2.2.2 or later, PHP 8.0+ recommended
 * @author      Marcopolo
 * @copyright   2026
 * @license     GNU General Public License (GPL) - https://www.zen-cart.com/license/2_0.txt
 * @version     1.1.0
 * @updated     07-22-2026
 * @github      https://github.com/CcMarc/AlsoPurchasedTurbo
 */
$define = [
    'BOX_TOOLS_ALSO_PURCHASED_TURBO' => 'Également acheté (turbo)',
    'BOX_CONFIGURATION_ALSO_PURCHASED_TURBO' => 'Également acheté (turbo)',

    'APT_HEADING_TITLE' => 'Également acheté (turbo)',
    'APT_HEADING_SUBTITLE' => 'Recommandations précalculées de type « Également acheté »',

    'APT_PANEL_STATUS' => 'État du moteur',
    'APT_PANEL_SHIMS' => 'Intégration de modèle',
    'APT_PANEL_DISPLAY_SETTINGS' => 'Paramètres d’affichage (paramètres Zen Cart partagés)',
    'APT_PANEL_PLUGIN_SETTINGS' => 'Paramètres du plugin',
    'APT_PANEL_MAINTENANCE' => 'Entretien',

    'APT_TEXT_STATUS' => 'Statut',
    'APT_TEXT_ENABLED' => 'Activé',
    'APT_TEXT_DISABLED' => 'Désactivé',
    'APT_TEXT_PAIR_ROWS' => 'Nombre de lignes de paires',
    'APT_TEXT_PRODUCTS_COVERED' => 'Produits avec recommandations',
    'APT_TEXT_SEED_STATE' => 'Semence historique',
    'APT_TEXT_SEED_DONE' => 'Complété',
    'APT_TEXT_SEED_NOT_STARTED_SHORT' => 'Pas commencé',
    'APT_TEXT_SEED_NOT_STARTED' => 'Les pages produits utilisent le mécanisme de base par défaut.',
    'APT_TEXT_SEED_IN_PROGRESS_SHORT' => 'En cours',
    'APT_TEXT_SEED_IN_PROGRESS' => 'ID de la prochaine commande à traiter : %s (sur un maximum de %s).',
    'APT_TEXT_LAST_PRUNE' => 'Dernière optimisation',
    'APT_TEXT_LAST_PRUNE_NEVER' => 'Jamais éxecuté',
    'APT_TEXT_LAST_PRUNE_DETAIL' => '%1$s &mdash; %2$s &rarr; %3$s lignes (%4$s supprimées, limite de %5$s par produit)',

    'APT_TEXT_SHIMS_EXPLAIN' => 'Selon le modèle actif, voici comment le moteur de données « Également acheté » est intégré. Les mentions « OK » et « INTÉGRÉ » indiquent toutes deux que ce plugin fournit les données.',
    'APT_TEXT_SHIM_OK' => 'OK',
    'APT_TEXT_SHIM_MISSING_SHORT' => 'MANQUANT',
    'APT_TEXT_SHIM_MISSING' => 'Ce modèle utilise un comportement standard. Utilisez l’option « Réparer les couches d’adaptation du modèle » ci-dessous.',
    'APT_TEXT_SHIM_FOREIGN_SHORT' => 'PERSONNALISÉ',
    'APT_TEXT_SHIM_FOREIGN' => 'Un module personnalisé autre qu’« Également acheté (turbo) » est présent — « Également acheté (turbo) » n’est PAS actif pour ce modèle.',
    'APT_TEXT_SHIM_INTEGRATED_SHORT' => 'INTÉGRÉ',
    'APT_TEXT_SHIM_INTEGRATED' => 'Le modèle fournit sa propre présentation en lisant la table de paires de ce plugin.',

    'APT_TEXT_DISPLAY_SETTINGS_EXPLAIN' => 'Il s’agit des paramètres standard de Zen Cart pour la fonctionnalité « Également acheté » (groupes de configuration « Valeurs minimales », « Valeurs maximales » et « Informations produit »). Ils s’appliquent aussi bien au module classique qu’à ce plugin ; toute modification effectuée ici met à jour les mêmes valeurs.',
    'APT_TEXT_MIN_DISPLAY' => 'Nombre minimal de produits requis pour afficher le cadre',
    'APT_TEXT_MAX_DISPLAY' => 'Nombre maximal de produits à afficher',
    'APT_TEXT_COLUMNS' => 'Colonnes par ligne (0 = cadre désactivé)',
    'APT_BUTTON_SAVE_DISPLAY' => 'Sauvegarder',
    'APT_TEXT_DISPLAY_SETTINGS_SAVED' => 'Paramètres d’affichage enregistrés.',

    'APT_TEXT_SETTING_ENABLED' => 'Moteur activé (APT_ENABLED)',
    'APT_TEXT_SETTING_RANKING' => 'Classement (APT_RANKING)',
    'APT_TEXT_SETTING_FALLBACK' => 'Mécanisme de repli pour les requêtes de base (APT_FALLBACK_STOCK)',
    'APT_TEXT_SETTING_DEBUG' => 'Journal de débogage (APT_DEBUG_LOG)',
    'APT_TEXT_SETTING_MAX_PAIRS' => 'Nombre maximal de paires par produit (APT_MAX_PAIRS_PER_PRODUCT)',

    'APT_BUTTON_PRUNE' => 'Élaguer la table des paires (conserver les meilleures paires)',
    'APT_HELP_PRUNE' => 'Réduit chaque produit à ses %s paires les plus fortes (le classement suit APT_RANKING). La boutique n’en affichant qu’une petite partie, cette opération peut considérablement réduire la taille de la table sans impact visuel. S’exécute par lots et se poursuit automatiquement ; peut être lancé sans risque à tout moment. S’exécute automatiquement une fois l’initialisation des données terminée.',
    'APT_TEXT_PRUNE_DISABLED' => 'La suppression des données obsolètes (élagage) est désactivée (le nombre maximal de paires stockées par produit est de 0). Définissez une limite dans « Configuration > Également acheté (turbo) ».',
    'APT_TEXT_PRUNE_CHUNK_DONE' => 'Élagage… traitement via l’ID de produit %1$s (%2$s lignes supprimées à ce jour). Poursuite automatique…',
    'APT_TEXT_PRUNE_COMPLETE' => 'Élagage terminé : %s lignes de paires ont été supprimées ; chaque produit contient désormais un maximum de %s paires.',
    'APT_TEXT_SEED_PRUNE_CHAIN' => 'L’élagage des paires démarre automatiquement pour réduire la table fraîchement ensemencée…',
    'APT_BUTTON_EDIT_PLUGIN_SETTINGS' => 'Modifier dans la configuration » Également acheté (turbo)',

    'APT_BUTTON_SEED' => 'Reprendre à partir de l’historique des commandes',
    'APT_HELP_SEED' => 'Génère (ou reprend la génération de) la table des paires à partir de vos commandes existantes, par lots successifs traités automatiquement. L’opération peut être lancée à tout moment sans risque ; les commandes déjà comptabilisées ne sont pas comptées deux fois, sauf si vous relancez la génération complète.',
    'APT_BUTTON_REBUILD' => 'Tronquer et reconstruire à partir de zéro',
    'APT_HELP_REBUILD' => 'Vide la table des paires et la repeuple à partir de l’historique complet des commandes. À utiliser après l’importation ou la suppression massive de commandes, ou en cas de suspicion de décalage dû à des outils écrivant des commandes via du SQL brut.',
    'APT_BUTTON_PURGE' => 'Effacer les paires pour les produits supprimés',
    'APT_HELP_PURGE' => 'Supprime les lignes faisant référence à des produits ne figurant plus dans le catalogue. Les produits supprimés ne s’affichent jamais de toute façon (la requête de la boutique interroge la table des produits actifs) ; cette opération permet simplement de récupérer l’espace occupé par ces lignes.',
    'APT_BUTTON_REPAIR_SHIMS' => 'Réparer les couches d’adaptation du modèle',
    'APT_HELP_REPAIR_SHIMS' => 'Recrée une cale manquante pour tout modèle actif (par exemple, après un changement de modèle). Ne remplace jamais un module personnalisé ; ceux-ci disposent d’un bouton explicite « Sauvegarder et prendre le contrôle » spécifique à chaque modèle dans le panneau d’intégration des modèles.',

    'APT_TEXT_REBUILD_CONFIRM_JS' => 'Tronquer la table des paires et la reconstruire de zéro ?',
    'APT_TEXT_SEED_GUARD' => 'La table des paires contient déjà %s lignes, mais aucun pointeur de progression d’initialisation n’existe (généralement après une réinstallation). Lancer l’initialisation maintenant entraînerait un double comptage des données existantes ; l’opération n’a donc pas été démarrée. Si la table est complète, aucune action n’est requise (le statut a été défini sur « Complet »). Pour reconstruire à partir de zéro, utilisez l’option « Tronquer et reconstruire ».',
    'APT_TEXT_SEED_CHUNK_DONE' => 'Commandes traitées de %s à %s. Poursuite automatique&hellip;',
    'APT_TEXT_SEED_COMPLETE' => 'Initialisation terminée. %s rangées de paires couvrent désormais %s produits.',
    'APT_TEXT_REBUILD_RESET' => 'Table des paires tronquée ; reconstruction lancée depuis le début de l’historique des commandes.',
    'APT_TEXT_PURGED' => 'Suppression de %s lignes de paires faisant référence à des produits supprimés.',
    'APT_TEXT_SHIMS_REPAIRED' => 'Réparation des connection terminée. Examinez le panneau d’intégration du modèle.',

    'APT_BUTTON_TAKEOVER' => 'Sauvegarder et prendre le relais',
    'APT_TEXT_TAKEOVER_CONFIRM_JS' => 'Sauvegarder le module personnalisé du modèle %s (restauré lors de la désinstallation) et installer à la place la couche d’adaptation pour « Également acheté (turbo) » ?',
    'APT_TEXT_TAKEOVER_OK' => 'Modèle « %s » : module personnalisé sauvegardé sous le nom also_purchased_products.pre-APT.php.bak et couche d’adaptation (shim) pour « Également acheté (turbo) » installée.',
    'APT_TEXT_TAKEOVER_FAILED' => 'Modèle « %s » : impossible de sauvegarder le module personnalisé.',
    'APT_TEXT_TAKEOVER_BACKUP_EXISTS' => 'Modèle "%s" : une précédente sauvegarde .pre-APT.php.bak existe déjà. Résolvez manuellement avant de prendre le relais.',
    'APT_TEXT_SHIM_WRITE_FAILED' => 'La sauvegarde a réussi, mais l’écriture de la couche d’adaptation (shim) vers %s a échoué ; la sauvegarde a été conservée. Vérifiez les permissions et réessayez.',
    'APT_TEXT_DIR_NOT_WRITABLE' => 'Le répertoire %s n’est pas accessible en écriture pour l’utilisateur du serveur web.',
    'APT_TEXT_PERMS_UNCLEAR' => 'raison indéterminée — vérifiez le propriétaire/les permissions de %s',
];

return $define;
