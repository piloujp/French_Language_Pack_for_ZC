SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'FRA' INTO @coid0;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'GLP' INTO @coid1;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'GUF' INTO @coid2;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'PYF' INTO @coid3;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'MTQ' INTO @coid4;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'MYT' INTO @coid5;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'REU' INTO @coid6;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'NCL' INTO @coid7;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'SPM' INTO @coid8;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'WLF' INTO @coid9;
SELECT countries_id FROM countries WHERE countries_iso_code_3 = 'ATF' INTO @coid10;

# Create a temporary table with old zones ids
CREATE TABLE french_zones (PRIMARY KEY (zone_id)) as SELECT zone_id, zone_country_id, zone_code, zone_name FROM zones WHERE zone_country_id IN (@coid0,@coid1,@coid2,@coid3,@coid4,@coid5,@coid6,@coid7,@coid8,@coid9,@coid10);

# Delete old French zones
DELETE FROM zones WHERE zone_country_id IN (@coid0,@coid1,@coid2,@coid3,@coid4,@coid5,@coid6,@coid7,@coid8,@coid9,@coid10);

INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES
(@coid0, '01', 'Ain'),
(@coid0, '02', 'Aisne'),
(@coid0, '03', 'Allier'),
(@coid0, '04', 'Alpes-de-Haute-Provence'),
(@coid0, '06', 'Alpes-Maritimes'),
(@coid0, '07', 'Ardèche'),
(@coid0, '08', 'Ardennes'),
(@coid0, '09', 'Ariège'),
(@coid0, '10', 'Aube'),
(@coid0, '11', 'Aude'),
(@coid0, '12', 'Aveyron'),
(@coid0, '67', 'Bas-Rhin'),
(@coid0, '13', 'Bouches-du-Rhône'),
(@coid0, '14', 'Calvados'),
(@coid0, '15', 'Cantal'),
(@coid0, '16', 'Charente'),
(@coid0, '17', 'Charente-Maritime'),
(@coid0, '18', 'Cher'),
(@coid0, '19', 'Corrèze'),
(@coid0, '2A', 'Corse-du-Sud'),
(@coid0, '2B', 'Haute-Corse'),
(@coid0, '21', 'Côte-d\'Or'),
(@coid0, '22', 'Côtes-d\'Armor'),
(@coid0, '23', 'Creuse'),
(@coid0, '79', 'Deux-Sèvres'),
(@coid0, '24', 'Dordogne'),
(@coid0, '25', 'Doubs'),
(@coid0, '26', 'Drôme'),
(@coid0, '91', 'Essonne'),
(@coid0, '27', 'Eure'),
(@coid0, '28', 'Eure-et-Loir'),
(@coid0, '29', 'Finistère'),
(@coid0, '30', 'Gard'),
(@coid0, '32', 'Gers'),
(@coid0, '33', 'Gironde'),
(@coid0, '68', 'Haut-Rhin'),
(@coid0, '31', 'Haute-Garonne'),
(@coid0, '43', 'Haute-Loire'),
(@coid0, '52', 'Haute-Marne'),
(@coid0, '70', 'Haute-Saône'),
(@coid0, '74', 'Haute-Savoie'),
(@coid0, '87', 'Haute-Vienne'),
(@coid0, '05', 'Hautes-Alpes'),
(@coid0, '65', 'Hautes-Pyrénées'),
(@coid0, '92', 'Hauts-de-Seine'),
(@coid0, '34', 'Hérault'),
(@coid0, '35', 'Ille-et-Vilaine'),
(@coid0, '36', 'Indre'),
(@coid0, '37', 'Indre-et-Loire'),
(@coid0, '38', 'Isère'),
(@coid0, '39', 'Jura'),
(@coid0, '40', 'Landes'),
(@coid0, '41', 'Loir-et-Cher'),
(@coid0, '42', 'Loire'),
(@coid0, '44', 'Loire-Atlantique'),
(@coid0, '45', 'Loiret'),
(@coid0, '46', 'Lot'),
(@coid0, '47', 'Lot-et-Garonne'),
(@coid0, '48', 'Lozère'),
(@coid0, '49', 'Maine-et-Loire'),
(@coid0, '50', 'Manche'),
(@coid0, '51', 'Marne'),
(@coid0, '53', 'Mayenne'),
(@coid0, '54', 'Meurthe-et-Moselle'),
(@coid0, '55', 'Meuse'),
(@coid0, '56', 'Morbihan'),
(@coid0, '57', 'Moselle'),
(@coid0, '58', 'Nièvre'),
(@coid0, '59', 'Nord'),
(@coid0, '98', 'Nouvelle-Calédonie'),
(@coid0, '60', 'Oise'),
(@coid0, '61', 'Orne'),
(@coid0, '75', 'Paris'),
(@coid0, '62', 'Pas-de-Calais'),
(@coid0, '63', 'Puy-de-Dôme'),
(@coid0, '64', 'Pyrénées-Atlantiques'),
(@coid0, '66', 'Pyrénées-Orientales'),
(@coid0, '69', 'Rhône'),
(@coid0, '71', 'Saône-et-Loire'),
(@coid0, '72', 'Sarthe'),
(@coid0, '73', 'Savoie'),
(@coid0, '77', 'Seine-et-Marne'),
(@coid0, '76', 'Seine-Maritime'),
(@coid0, '93', 'Seine-Saint-Denis'),
(@coid0, '80', 'Somme'),
(@coid0, '81', 'Tarn'),
(@coid0, '82', 'Tarn-et-Garonne'),
(@coid0, '90', 'Territoire de Belfort'),
(@coid0, '95', 'Val-d\'Oise'),
(@coid0, '94', 'Val-de-Marne'),
(@coid0, '83', 'Var'),
(@coid0, '84', 'Vaucluse'),
(@coid0, '85', 'Vendée'),
(@coid0, '86', 'Vienne'),
(@coid0, '88', 'Vosges'),
(@coid0, '89', 'Yonne'),
(@coid0, '78', 'Yvelines'),
(@coid1, '971', 'Guadeloupe'),
(@coid2, '973', 'Guyane'),
(@coid6, '974', 'La Réunion'),
(@coid4, '972', 'Martinique'),
(@coid5, '976', 'Mayotte'),
(@coid7, '988', 'Nouvelle-Calédonie'),
(@coid3, '987', 'Polynésie française'),
(@coid8, '975', 'Saint-Pierre et Miquelon'),
(@coid10, '984', 'Terres australes et antarctiques françaises'),
/* (xxx, '989', 'Clipperton'),
 (xxx, '977', 'Saint-Barthélemy'),
 (xxx, '978', 'Saint-Martin'),*/
(@coid9, '986', 'Wallis et Futuna');

# Update address book and zones to geo zones tables with new zones ids
UPDATE address_book a JOIN french_zones fz ON a.entry_zone_id = fz.zone_id AND a.entry_country_id IN (@coid0,@coid1,@coid2,@coid3,@coid4,@coid5,@coid6,@coid7,@coid8,@coid9,@coid10) JOIN zones z ON z.zone_name = fz.zone_name SET a.entry_zone_id = z.zone_id;
UPDATE zones_to_geo_zones gz JOIN french_zones fz ON gz.zone_id = fz.zone_id AND gz.zone_country_id IN (@coid0,@coid1,@coid2,@coid3,@coid4,@coid5,@coid6,@coid7,@coid8,@coid9,@coid10) JOIN zones z ON z.zone_name = fz.zone_name SET gz.zone_id = z.zone_id;

# Update store zone
UPDATE configuration cf JOIN french_zones fz ON cf.configuration_value = fz.zone_id JOIN zones z ON z.zone_name = fz.zone_name SET cf.configuration_value = z.zone_id WHERE configuration_key = 'STORE_ZONE';

# Delete temporary table
DROP TABLE french_zones;
