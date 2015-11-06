# rental-motor
---------------------
1. Setup
1.a.create `.htaccess` on app/ directory
----------------------------------
```
RewriteEngine On
RewriteBase /your_root_web/app/
RewriteCond %{REQUEST_FILENAME} !-l
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
```
----------------------------------

1.b. create `database.php` on app/config directory
------------------------------------
```
<?php

return array(
    
    'default' => array(
        'driver' => 'mysqli',
        'host' => 'your_host',
        'port' => 3306,
        'user' => 'your_username',
        'password' => 'your_password',
        'database' => 'db_rental_motor',
        'tablePrefix' => '',
        'charset' => 'utf8',
        'collate' => 'utf8_general_ci',
        'persistent' => false,
    ),
);
```
