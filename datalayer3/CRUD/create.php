<?php

require_once __DIR__.'/../vendor/autoload.php';

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = 'Thomaz';
$user->last_name = 'França';
$user->genre = 'M';
$user->save();

$addr = new Address();
$addr->add($user, "Rua Antônio Antunes de Almeida", "28");
$addr->save();

var_dump($user);
var_dump($addr);