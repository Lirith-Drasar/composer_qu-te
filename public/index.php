<?php

use HelloWorld\SayHello;
use App\Wcs\Hello;

require __DIR__ . '/../vendor/autoload.php';
$hello = new Hello();
echo $hello->helloWorld();

echo "<br>";

$helloWorld = new SayHello();
echo $helloWorld->world();