<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2024 May 27 Modified in v2.1.0-alpha1 $
*/

$define = [
    'HEADING_TITLE_MODULES_PAYMENT' => 'Modules de Paiements',
    'HEADING_TITLE_MODULES_SHIPPING' => 'Modules de Livraisons',
    'HEADING_TITLE_MODULES_ORDER_TOTAL' => 'Modules de « Total de Commande »',
    'TABLE_HEADING_ORDERS_STATUS' => 'Statut des commandes',
    'TEXT_MODULE_DIRECTORY' => 'Répertoire du module:',
    'ERROR_MODULE_FILE_NOT_FOUND' => 'ERREUR : module non chargé à cause de fichiers de langue manquants : ',
    'TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED' => 'ALERTE : vos paramètres Admin ont été changés dans votre boutique en ligne.« ' . STORE_NAME . ' »',
    'TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED' => 'Ceci est un mail automatique envoyé par votre boutique « ' . STORE_NAME . ' » pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs : ' . "\n\n" . 'NOTE : les paramètres Admin ont été MODIFIÉS pour le module [%1$s], par l\'administrateur %2$%s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est judiceux que vous vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED' => 'Ceci est un mail automatique envoyé par votre boutique « ' . STORE_NAME . ' » pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs : ' . "\n\n" . 'NOTE : les paramètres Admin ont été modifiés. Le module [%1$s] a été INSTALLÉ par l\'administrateur %2$s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est judiceux que vous vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED' => 'Ceci est un mail automatique envoyé par votre boutique « ' . STORE_NAME . ' » pour vous alerter qu\'un changement vient d\'être effectué dans vos paramètres administratifs : ' . "\n\n" . 'NOTE : les paramètres Admin ont été modifiés. Le module [%1$s] a été ENLEVÉ par l\'administrateur %2$s.' . "\n\n" . 'Si vous n\'êtes pas à l\'origine de ces modifications, il est judiceux que vous vérifiez immédiatemment les paramètres.' . "\n\n" . 'Si vous êtes déjà au courant de ces changements, vous pouvez ignorer cet e-mail automatique.',
    'TEXT_DELETE_INTRO' => 'Êtes-vous sûr(e) de vouloir enlever ce module ?',
    'TEXT_WARNING_SSL_EDIT' => 'ALERTE : <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Pour des raisons de sécurité, la modification de ce module est désactivée jusqu\'à ce que votre Admin soit configurée pour SSL</a>.',
    'TEXT_WARNING_SSL_INSTALL' => 'ALERTE : <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Pour des raisons de sécurité, l\'installation de ce module est désactivée jusqu\'à ce que votre Admin soit configurée pour SSL</a>.',
    'TEXT_POSITIVE_INT' => '%s doit être un entier supérieur ou égal à 0',
    'TEXT_POSITIVE_FLOAT' => '%s doit être une décimale supérieure ou égale à 0',
    'TEXT_ERROR_MODULE_ALREADY_INSTALLED' => 'Le module %s est déjà installé !',
];

return $define;
