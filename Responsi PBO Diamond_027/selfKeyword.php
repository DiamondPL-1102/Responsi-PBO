<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Diamond", "Kota Bengkulu");

// panggil function
$person1->sayHello("Diamond");

// panggil self keyword
$person1->info();