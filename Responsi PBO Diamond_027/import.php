<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;
