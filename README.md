Database SessionHandler PHP class
=================================

Abstract DbSessionHandler. Test and working for MySQL. It uses PDO driver.

Recommended database session table
----------------------------------

```sql
CREATE TABLE `sessions` (
	`id` varchar(63) CHARACTER SET ascii NOT NULL DEFAULT '',
	`data` text,
	`expire` int(10) unsigned DEFAULT NULL,
	PRIMARY KEY (`id`),
	KEY `expire` (`expire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```