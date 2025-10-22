<?php

$define = [
    'CFGTITLE_DOWNLOAD_ALREADY_PURCHASED_MESSAGING' => 'Téléchargement déjà acheté : messagerie',
    'CFGDESC_DOWNLOAD_ALREADY_PURCHASED_MESSAGING' => '<br>Choisissez la méthode avec laquelle communiquer l’achat antérieur du téléchargement d’un produit au client, l’une des suivantes :<ol><li><strong>Désactivé :</strong> aucune manipulation particulière ; le téléchargement peut toujours être racheté sans message.</li><li><strong>Appel à l’expiration :</strong> quel que soit le statut d’expiration d’un téléchargement de produit, l’article ne peut pas être racheté. Si le téléchargement n’a pas expiré, le client est dirigé vers la page d’informations de commande, où le lien de téléchargement actif est affiché. Sinon, un message s’affiche indiquant que le client a déjà acheté le produit et doit contacter la boutique pour obtenir la réinitialisation du téléchargement.</li><li><strong>Appliquer l’expiration :</strong> si le téléchargement n’a pas expiré, l’article ne peut pas être racheté. Le client est, à la place, dirigé vers la page d’informations de commande où le lien de téléchargement actif est affiché. Sinon, le client peut racheter le produit.</li></ol>',
    'CFGTITLE_DOWNLOAD_ALREADY_PURCHASED_EXCLUDE_PRODUCTS' => 'Télécharger les produits déjà achetés : Exclusions de produits',
    'CFGDESC_DOWNLOAD_ALREADY_PURCHASED_EXCLUDE_PRODUCTS' => '<br>Saisissez la liste séparée par des virgules des valeurs d’ID de produit à exclure du traitement de « déjà achetés ».',
    'CFGTITLE_DOWNLOAD_ALREADY_PURCHASED_EXCLUDE_CATEGORIES' => 'Télécharger Déjà acheté : Exclusions de catégorie',
    'CFGDESC_DOWNLOAD_ALREADY_PURCHASED_EXCLUDE_CATEGORIES' => '<br>Saisissez la liste séparée par des virgules des valeurs d’ID de catégorie pour lesquelles les produits associés doivent être exclus du traitement de « déjà achetés ».',
];

return $define;