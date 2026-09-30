# php-db-session-handler

Historical PHP session handler that stores sessions in MySQL through PDO.
Subclass [DbSessionHandler.php](DbSessionHandler.php) to set the connection,
table, and session name.

## Setup

Create the default table:

```sql
CREATE TABLE sessions (
  id varchar(63) CHARACTER SET ascii NOT NULL DEFAULT '',
  data text,
  expire int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (id),
  KEY expire (expire)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

Set the same table name and your database credentials in the subclass.
[ExampleSessionHandler.php](ExampleSessionHandler.php) uses `php_sessions`, so
change it to `sessions` or create the matching table instead.

## Use

```php
require 'ExampleSessionHandler.php';
$handler = new ExampleSessionHandler();
session_start();
$_SESSION['message'] = 'hello';
```

The base constructor registers its callbacks with `session_set_save_handler`.
A MySQL/PDO environment is required; there is no automated test suite and
current PHP compatibility has not been verified.
