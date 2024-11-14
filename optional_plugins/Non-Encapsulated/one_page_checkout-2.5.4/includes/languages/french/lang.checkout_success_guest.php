<?php
// -----
// Part of the One-Page Checkout plugin, provided under GPL 2.0 license by lat9 (cindy@vinosdefrutastropicales.com).
// Copyright (C) 2018-2023, Vinos de Frutas Tropicales.  All rights reserved.
//
// Last updated for OPC v2.4.6
//
$define = [
    'TEXT_SEE_ORDERS_GUEST' => 'Vous pouvez consulter l\'état de cette commande en accédant à la page <a href="' . zen_href_link(FILENAME_ORDER_STATUS, '', 'SSL') . '">État de la commande</a> et en fournissant ce numéro de commande et votre adresse e-mail.',

    'TEXT_GUEST_ADD_PWD_TO_CREATE_ACCT' => '<em>(facultatif)</em> Si vous souhaitez créer un compte en utilisant les informations que vous avez fournies dans cette commande, créez un mot de passe avec lequel accéder à ce compte.',

    'ERROR_GUEST_ACCOUNT_CREATION_FAILED' => 'Nous n\'avons pas pu créer votre compte permanent.',
];
return $define;
