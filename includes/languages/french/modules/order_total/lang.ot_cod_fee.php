<?php
$define = [
    'MODULE_ORDER_TOTAL_COD_TITLE' => 'Frais de Contre-Remboursement',
    'MODULE_ORDER_TOTAL_COD_DESCRIPTION' => 'Frais de Contre-Remboursement',
    'TEXT_INFO_COD_FEES' => '<strong>NOTE:</strong> Des frais de Contre-Remboursement peuvent être appliqués.',
// bof constant configuration titles and descriptions for order total module ot_cod_fee
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_STATUS' => 'Proposer le paiement à la livraison (contre remboursement)',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_STATUS' => 'Voulez-vous que ce module s\'affiche ?',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_SORT_ORDER' => 'Ordre d\'affichage.',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_FLAT' => 'Frais de contre remboursement pour le module « FLAT »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_FLAT' => 'FLAT : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_FREE' => 'Frais de contre remboursement pour le module « Gratuit par défaut »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_FREE' => 'Gratuit par défaut : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_FREESHIPPER' => 'Frais de contre remboursement pour le module de livraison gratuite « freeshipper »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_FREESHIPPER' => 'freeshipper : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_FREEOPTIONS' => 'Frais de contre remboursement pour le module « Gratuit avec options »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_FREEOPTIONS' => 'Gratuit+Options : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_PERWEIGHTUNIT' => 'Frais de contre remboursement pour le module « Par unité de poids »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_PERWEIGHTUNIT' => 'Par unité de poids : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_ITEM' => 'Frais de contre remboursement pour le module « Par article »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_ITEM' => 'Par article : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_TABLE' => 'Frais de contre remboursement pour le module « Tableau tarifaire »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_TABLE' => 'Tableau tarifaire : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_UPS' => 'Frais de contre remboursement pour le module « UPS »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_UPS' => 'UPS : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_USPS' => 'Frais de contre remboursement pour le module « USPS »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_USPS' => 'USPS : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_ZONES' => 'Frais de contre remboursement pour le module « ZONES »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_ZONES' => 'ZONES : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_AP' => 'Frais de contre remboursement pour le module « Austrian Post »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_AP' => 'Austrian Post : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_DP' => 'Frais de contre remboursement pour le module « German Post »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_DP' => 'German Post : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_SERVICEPAKKE' => 'Frais de contre remboursement pour le module « Servicepakke »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_SERVICEPAKKE' => 'Servicepakke : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_FEE_FEDEX' => 'Frais de contre remboursement pour le module « FedEx »',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_FEE_FEDEX' => 'FedEx : &lt;Code pays&gt;:&lt;Prix contre remboursement&gt;, .... 00 comme code pays s\'applique à tous les pays. Si le code pays est 00, il doit s\'agir de la dernière instruction. Si aucun 00:9.99 n\'apparaît, les frais de port contre remboursement dans les pays étrangers ne sont pas calculés (non disponible)',
    'CFGTITLE_MODULE_ORDER_TOTAL_COD_TAX_CLASS' => 'Classe de la taxe',
    'CFGDESC_MODULE_ORDER_TOTAL_COD_TAX_CLASS' => 'Utilisez la classe de taxe suivante sur les frais d’expédition.',
// eof constant configuration titles and descriptions for order total module ot_cod_fee
];

return $define;
