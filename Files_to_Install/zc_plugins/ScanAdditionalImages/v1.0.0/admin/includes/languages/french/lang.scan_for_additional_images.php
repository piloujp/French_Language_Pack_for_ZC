<?php

$define = [
    'HEADING_TITLE' => 'Rechercher des images de produits supplémentaires à charger dans la base de données',
    'TEXT_MAIN' => 'La façon dont Zen Cart gère les images de produits « supplémentaires » consiste à attribuer une image « principale » au produit, puis à attribuer séparément des images supplémentaires à afficher à côté.<br>
Vous avez deux façons d’attribuer des images supplémentaires à un produit :<br>
1) Directement depuis votre page d\'administration, un produit à la fois, ou vous pouvez y importer (et supprimer) des images supplémentaires, sans vous soucier du nom de fichier ni de l\attribution des noms de fichiers d\'images suivant un modèle prédéfini. Pour cela, le paramètre <strong>Admin->Configuration->Images->Modèle de correspondance des noms de fichiers des images supplémentaires</strong> doit être défini sur <strong>Database</strong>.<br>
2) Par FTP, en nommant tous les noms de fichiers d\'image supplémentaires selon une <a href="https://docs.zen-cart.com/user/images/image_filename_conventions/" target="_blank">convention de dénomination</a> prescrite et en laissant ces modèles choisir automatiquement les images supplémentaires à afficher pour ce produit dans votre boutique.<br><br>
Cet outil est conçu pour passer de la méthode 2 à la méthode 1 en analysant votre répertoire d\'images et vos sous-répertoires pour les images que vous avez déjà téléchargées, en les insérant dans la base de données et en les attribuant aux produits correspondants.<br>
Il utilise le nom de l\'image principale du produit (par exemple, mon-image-produit-principal.jpg) comme référence et attribue à ce produit les autres images trouvées avec des <a href="https://docs.zen-cart.com/user/images/image_filename_conventions/" target="_blank">noms correspondants avec suffixes</a> (par exemple, mon-image-produit-principal_touttexte.jpg) comme images supplémentaires.<br>
Des entrées de base de données sont créées, permettant ainsi la gestion complète des images du produit via la page d\'édition du produit.<br>Aucune image n\'est modifiée ni téléchargée.',
    'TEXT_TIP_1' => 'Conseil : Vous pouvez exécuter cet outil plusieurs fois. Il ignorera les doublons d\'attribution d\'images de produits. Vous pouvez donc le réexécuter en toute sécurité si vous ajoutez d\'autres images ultérieurement, par exemple après une mise à jour d\'un fournisseur. Cependant, n\'oubliez pas que l\'outil ne prend en compte que les images dont les noms de fichier respectent les conventions (voir les liens ci-dessus).',
    'TEXT_STEP_1' => 'Étape 1 : Sauvegardez vos données',
    'TEXT_STEP_1_DETAIL' => 'Avant de continuer, assurez-vous d\'avoir une sauvegarde complète de votre base de données et de vos images. Cet outil n\'est pas destructif, mais il est judicieux de sauvegarder l\'intégralité de vos données.',
    'TEXT_STEP_2' => 'Étape 2 : Démarrer l\'analyse',
    'TEXT_STEP_2_DETAIL' => 'Cliquez sur le bouton « Démarrer l\'analyse » ci-dessous pour lancer le processus d\'analyse.',
    'TEXT_STEP_3' => 'Étape 3 : Achèvement',
    'TEXT_STEP_3_DETAIL' => 'Vous verrez une notification dans le journal des messages une fois le processus terminé. Vérifiez ensuite que les images de vos produits et catégories s\'affichent correctement dans votre boutique.<br><br>
N\'oubliez pas que pour utiliser ces images suivies par la base de données, votre paramètre <strong>Admin->Configuration->Images->Modèle de correspondance de nom de fichier d\'images supplémentaires</strong> doit être défini sur <strong>Database</strong>. Par conséquent, si c\'est la première fois que vous exécutez cet outil, assurez-vous de modifier ce paramètre, sinon vous ne pourrez pas gérer les images supplémentaires dans les pages d\'édition des produits.',
    'BUTTON_START_SCANNING' => 'Démarrer l\'analyse',
    'TEXT_SETTINGS' => 'Paramètres',
    'TEXT_TOGGLE_SECTION' => '(Changer de section)',
    'TEXT_START_AT' => 'Commencer à (par défaut 0)',
    'TEXT_BATCH_SIZE' => 'Taille du lot (par défaut 10, max 50)',
    'TEXT_SETTINGS_HELP' => 'Ajustez uniquement si nécessaire. Les valeurs sont lues une fois lorsque vous appuyez sur <strong>Démarrer l\'analyse</strong>. Des lots plus petits sont plus efficaces et évitent les dépassements de délai.',
    'TEXT_PROGRESS' => 'Progrès',
    'TEXT_TOTAL_PRODUCTS_WITH_IMAGES' => 'Total des produits avec images',
    'TEXT_CUMULATIVE_PROCESSED' => 'Traités (cumulatif)',
    'TEXT_CUMULATIVE_INSERTED' => 'Images supplémentaires insérées (cumulatif)',
    'TEXT_PRODUCTS_REMAINING' => 'Produits restant à scanner',
    'TEXT_THIS_BATCH_FOUND' => 'Ce lot - Enregistrements trouvés',
    'TEXT_THIS_BATCH_INSERTED' => 'Ce lot - Images insérées',
    'TEXT_MESSAGE_LOG' => 'Journal des messages',
    'TEXT_RUNNING' => 'En cours d\\\'exécution...',
    'TEXT_IDLE' => 'Inactif',

    'TEXT_STARTED_WITH' => 'Commencé avec start_at=',
    'TEXT_WITH_BATCH_SIZE' => 'taille　du　lot　=　',
    'ERROR_EMPTY_RESPONSE' => 'Réponse vide/invalide (2xx). Abandon.',
    'TEXT_ERROR' => 'ERREUR :　',
    'TEXT_SERVER_ENDED' => 'Le serveur a demandé l\\\'arrêt.',
    'TEXT_MISSING_RESPONSE' => 'Absence de réponse. Abandon.',
    'TEXT_WARNING' => 'AVERTISSEMENT : ',

    'TEXT_STATUS_FOUND' => 'Lot terminé. Trouvés : ',
    'TEXT_STATUS_PRODUCTS' => 'Produits inspectés : ',
    'TEXT_STATUS_IMAGES' => 'Images insérées : ',
    'TEXT_STATUS_REMAINING' => 'Restants : ',

    'TEXT_COMPLETED' => 'Tous les travaux ont été terminés (restant = 0).',
    'TEXT_NETWORK_ERROR' => 'Erreur réseau, dépassement de délai ou requête abandonnée. (Erreur HTTP). Essayez des lots plus petits.',
    'TEXT_HTTP_ERROR' => 'Erreur HTTP ',
    'TEXT_CANCELLED' => 'Annulé par l\\\'utilisateur.',
];

return $define;
