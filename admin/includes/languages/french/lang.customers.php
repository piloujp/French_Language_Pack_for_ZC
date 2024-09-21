<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE' => 'Clients',
    'TABLE_HEADING_FIRSTNAME' => 'Prénom',
    'TABLE_HEADING_LASTNAME' => 'Nom',
    'TABLE_HEADING_ACCOUNT_CREATED' => 'Compte<br \>créé le',
    'TABLE_HEADING_LOGIN' => 'Dernière connexion',
    'TABLE_HEADING_REGISTRATION_IP' => 'IP d\'enregistrement',
    'TABLE_HEADING_PRICING_GROUP' => 'Groupe de Prix',
    'TABLE_HEADING_AUTHORIZATION_APPROVAL' => 'Autorisé',
    'TABLE_HEADING_GV_AMOUNT' => 'Solde GV',
    'TEXT_DATE_ACCOUNT_CREATED' => 'Compte créé le :',
    'TEXT_DATE_ACCOUNT_LAST_MODIFIED' => 'Dernière modification :',
    'TEXT_INFO_DATE_LAST_LOGON' => 'Dernière connexion :',
    'TEXT_INFO_NUMBER_OF_LOGONS' => 'Nombre de connexions :',
    'TEXT_LAST_LOGIN_IP' => 'IP de la dernière connexion : ',
    'TEXT_REGISTRATION_IP' => 'IP d\'enregistrement : ',
    'TEXT_INFO_COUNTRY' => 'Pays :',
    'TEXT_INFO_NUMBER_OF_REVIEWS' => 'Nombre d\'avis :',
    'TEXT_DELETE_INTRO' => 'Êtes-vous certain(e) de vouloir supprimer ce client ?',
    'TEXT_DELETE_REVIEWS' => 'Supprimer %s avis',
    'TEXT_INFO_HEADING_DELETE_CUSTOMER' => 'Supprimer le client',
    'TEXT_INFO_NUMBER_OF_ORDERS' => 'Nombre de commandes :',
    'TEXT_INFO_LIFETIME_VALUE' => 'Valeur vie client :',
    'TEXT_INFO_LAST_ORDER' => 'Dernière commande :',
    'TEXT_INFO_ORDERS_TOTAL' => 'Total :',
    'CUSTOMERS_REFERRAL' => 'Parrainage client<br>1er bon de réduction',
    'TEXT_INFO_GV_AMOUNT' => 'Reliquat des chèques cadeaux :',
    'ENTRY_NONE' => 'Aucune',
    'TABLE_HEADING_COMPANY' => 'Société',
    'TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD' => 'Réinitialiser le mot de passe du client',
    'TEXT_PWDRESET_INTRO' => 'Pour réinitialiser le mot de passe de ce client, entrez un nouveau mot de passe et confirmez-le ci-dessous. Le nouveau mot de passe doit être conforme aux règles de mot de passe normales imposées aux clients.',
    'TEXT_CUST_NEW_PASSWORD' => 'Nouveau mot de passe :',
    'TEXT_CUST_CONFIRM_PASSWORD' => 'Confirmer le mot de passe :',
    'ERROR_PWD_TOO_SHORT' => 'Erreur : le mot de passe est plus court que le nombre de caractères configuré pour la boutique.',
    'SUCCESS_PASSWORD_UPDATED' => 'Mot de passe mis à jour.',
    'EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE' => 'Votre mot de passe a été changé par l\'administrateur de la boutique. Votre nouveau mot de passe est : ',
    'EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT' => 'Réinitialisation du mot de passe du compte',
    'EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN' => 'Vous avez réinitialisé le mot de passe d\'un client : ' . "\n" . '%1$s' . "\n\n" . 'ID administrateur : %2$s',
    'CUSTOMERS_AUTHORIZATION' => 'Statut d\'autorisation du client',
    'CUSTOMERS_AUTHORIZATION_0' => 'Approuvé',
    'CUSTOMERS_AUTHORIZATION_1' => 'En attente d\'approbation - Doit être autorisé pour naviguer',
    'CUSTOMERS_AUTHORIZATION_2' => 'En attente d\'approbation - Peut naviguer sans prix affiché',
    'CUSTOMERS_AUTHORIZATION_3' => 'En attente d\'approbation - Peut naviguer avec prix sans pouvoir acheter',
    'CUSTOMERS_AUTHORIZATION_4' => 'Banni - Non autorisé à se connecter et acheter',
    'ERROR_CUSTOMER_APPROVAL_CORRECTION1' => 'ATTENTION: Votre boutique est configurée en mode Approbation - Sans navigation. Le client a été positionné sur: Attente d\'approbation - Pas de naviguation',
    'ERROR_CUSTOMER_APPROVAL_CORRECTION2' => 'ATTENTION: Votre boutique est configurée en mode Approbation - Navigation sans prix. Le client a été positionné sur: Attente d\'approbation - Naviguation sans prix',
    'EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE' => 'Votre statut de client a été actualisé. Merci de faire votre marché chez nous. Ce sera un grand plaisir de faire des affaires avec vous.',
    'EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT' => 'Statut client mis à jour',
    'ADDRESS_BOOK_TITLE' => 'Entrées du carnet d\'adresses',
    'PRIMARY_ADDRESS' => '(adresse principale)',
    'TEXT_MAXIMUM_ENTRIES' => '<span class="coming"><strong>NOTE :</strong></span> Un maximun de %s entrées sont autorisées dans le carnet d\'adresses.',
    'TEXT_INFO_ADDRESS_BOOK_COUNT' => ' | <a href="%1$s">%2$s Entrées</a>',
    'TEXT_INFO_ADDRESS_BOOK_COUNT_SINGLE' => '',
    'EMP_BUTTON_PLACEORDER_ALT' => 'Passer une commande pour ce client',
    'EMP_BUTTON_PLACEORDER' => 'Passer la commande',
    'TEXT_CUSTOMER_GROUPS' => 'Groupes de clients',
    'TABLE_HEADING_WHOLESALE_LEVEL' => 'Niveau de gros',
    'TEXT_WHOLESALE_LEVEL' => 'Niveau de gros : ',
    'HELPTEXT_WHOLESALE_LEVEL' => 'Saisissez 0 pour les clients de « Détail » ou un niveau de tarification « En gros ». Un client peut bénéficier d\’un niveau de prix de gros ou faire partie d\’un groupe de prix réduits, mais pas les deux.',

    // -----
    // Added, since used by zen_prepare_country_zones_pull_down
    //
    'PLEASE_SELECT' => 'Veuillez sélectionner...',
    'TYPE_BELOW' => 'Entrez votre choix ci-dessous...',
];

return $define;
