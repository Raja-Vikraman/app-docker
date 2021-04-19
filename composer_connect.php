<?php
require 'vendor/autoload.php';

// Create a connection, once only.
$config = [
            'driver'    => 'mysql', // Db driver
            'host'      => 'mysql',
            'database'  => 'information_schema',
            'username'  => 'root',
            'password'  => 'infi',
            'charset'   => 'utf8', // Optional
            'collation' => 'utf8_unicode_ci', // Optional
            'prefix'    => 'cb_', // Table prefix, optional
            'options'   => [ // PDO constructor options, optional
                PDO::ATTR_TIMEOUT => 5,
                PDO::ATTR_EMULATE_PREPARES => false,
            ],
        ];

new \Pixie\Connection('mysql', $config, 'QB');

$row = QB::table('tables')->find(1);
print_r($row)

?>