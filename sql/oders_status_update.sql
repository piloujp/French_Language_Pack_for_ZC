SET @lgid=(SELECT languages_id FROM languages WHERE code = 'fr' LIMIT 1);

UPDATE orders_status SET orders_status_name='En attente', sort_order=0 WHERE language_id=@lgid AND orders_status_name='Pending';
UPDATE orders_status SET orders_status_name='En cours', sort_order=10 WHERE language_id=@lgid AND orders_status_name='Processing';
UPDATE orders_status SET orders_status_name='Livré', sort_order=20 WHERE language_id=@lgid AND orders_status_name='Delivered';
UPDATE orders_status SET orders_status_name='Mise à jour', sort_order=30 WHERE language_id=@lgid AND orders_status_name='Update';
#UPDATE orders_status SET orders_status_name='Envoyé', sort_order=15 WHERE language_id=@lgid AND orders_status_name='Sent';

# Uncomment if POSM is installed
#UPDATE products_options_stock_names SET pos_name='En rupture de stock' WHERE language_id=@lgid AND pos_name_id=1;
