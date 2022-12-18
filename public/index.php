<?php

use App\Handler\HomeFactory;

require '../vendor/autoload.php';

$homeHandler = (new HomeFactory())();
$homeHandler->handle();