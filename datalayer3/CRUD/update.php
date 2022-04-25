<?php

require_once __DIR__.'/../vendor/autoload.php';

use Source\Models\User;

$user = (new User())->findByID(1);
$user->first_name = 'Inocêncio';
$user->last_name = 'Coitadinho';
$user->save();

var_dump($user);


?>