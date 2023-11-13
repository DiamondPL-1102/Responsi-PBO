<?php

// buat namespace
// import data dari conflict
require "conflict.php";
// buat obeject dari namespace yang di buat
$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();
// import data helper
require "helper.php";
// tampilkan helper menggunakan echo
echo Helper\APPLICATION . PHP_EOL;
// masukan Helper\helpMe();
Helper\helpme();
