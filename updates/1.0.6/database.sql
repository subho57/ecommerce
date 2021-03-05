ALTER TABLE `users` CHANGE `phone_verified` `phone_verified` TINYINT(1) NULL DEFAULT '0';
INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES (NULL, 'phone_login', '0', NULL, NULL), 
(NULL, 'email_login', '1', NULL, NULL), (NULL, 'phone_verificatio_type', 'firebase', NULL, NULL);

ALTER TABLE `inventory` CHANGE `purchase_price` `purchase_price` DECIMAL(10,2) NULL DEFAULT NULL;

DELETE FROM `payment_methods` WHERE `payment_methods`.`payment_methods_id` = 3; 
DELETE FROM `payment_methods_detail` WHERE `payment_methods_id` = 3;
DELETE FROM `payment_description` WHERE `payment_methods_id` = 3;