SET @lan_id=(SELECT languages_id FROM languages WHERE code = 'fr' LIMIT 1);

UPDATE orders_status SET orders_status_name='En attente', sort_order=0 WHERE language_id=@lan_id AND orders_status_name='Pending';
UPDATE orders_status SET orders_status_name='En cours', sort_order=10 WHERE language_id=@lan_id AND orders_status_name='Processing';
UPDATE orders_status SET orders_status_name='Livré', sort_order=20 WHERE language_id=@lan_id AND orders_status_name='Delivered';
UPDATE orders_status SET orders_status_name='Mise à jour', sort_order=30 WHERE language_id=@lan_id AND orders_status_name='Update';
UPDATE orders_status SET orders_status_name='Envoyé', sort_order=15 WHERE language_id=@lan_id AND orders_status_name='Sent';

UPDATE layout_boxes SET layout_box_status=1, layout_box_sort_order=0 WHERE layout_box_name = 'languages.php';

# if POSM is installed
SET @tbl_posm_exists = (SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = DATABASE() AND table_name = 'products_options_stock_names');
SET @sql_posm = IF(@tbl_posm_exists = 0,'SELECT 1','UPDATE IGNORE products_options_stock_names SET pos_name="En rupture de stock" WHERE language_id=@lan_id AND pos_name_id=1');
PREPARE stmt_posm FROM @sql_posm;
EXECUTE stmt_posm;
DEALLOCATE PREPARE stmt_posm;