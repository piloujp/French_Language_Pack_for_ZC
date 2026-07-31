<?php
/*
 * This file is part of the "Onetime Discount" order total module for Zen Cart.
 *
 * "Onetime Discount" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation version 2 of the License.
 *
 * "Onetime Discount" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "Onetime Discount". If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU GPL V2.0
 * @author Andrew Ballanger
 */
$define = [
    'MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_TITLE' => 'Remise unique',
    'MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_DESCRIPTION' => 'Remise unique appliquée à la commande',
// bof constant configuration titles and descriptions for ot_onetime_discount
    'CFGTITLE_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_STATUS' => 'Ce module est installé.',
    'CFGDESC_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_STATUS' => '',
    'CFGTITLE_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_SORT_ORDER' => 'Ordre de tri',
    'CFGDESC_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_SORT_ORDER' => 'Ordre de tri d’affichage.',
    'CFGTITLE_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_CHANGE_TITLE' => 'Permettre de modifier le titre',
    'CFGDESC_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_CHANGE_TITLE' => 'Permettre de modifier le titre du module lors de la modification d’une commande.',
    'CFGTITLE_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_DEDUCTION_ONLY' => 'Activer uniquement les déductions ?',
    'CFGDESC_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_DEDUCTION_ONLY' => 'Ce module doit-il permettre <em>uniquement</em> des déductions sur le montant de la commande ? Si cette option est réglée sur <b>true</b> (vrai), toute valeur saisie (qu’elle soit positive ou négative) sera déduite de la commande ; dans le cas contraire, vous pourrez utiliser ce module aussi bien pour ajouter un montant à la commande que pour en déduire. Valeur par défaut : <em>true</em>.',
// eof constant configuration titles and descriptions for ot_onetime_discount
];

return $define;
