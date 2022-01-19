<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
 'driver'    => 'mysql',
 'host'      => 'ID338780_MyTypeBodoni.db.webhosting.be',
 'database'  => 'ID338780_MyTypeBodoni',
 'username'  => 'ID338780_MyTypeBodoni',
 'password'  => 'Léah1252002',
 'charset'   => 'utf8mb4',
 'collation' => 'utf8mb4_unicode_ci',
 'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
