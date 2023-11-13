<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$Diamond = new Person("Diamond", "Kota Bengkulu");

// tambahkan value nama di object
$Diamond->nama = "Diamond";

// panggil function sayHelloNull dengan parameter
$Diamond->sayHelloNull("amoy");

// buat object dari kelas person
$Amoy = new Person("Amoy", "Lampung");

// tambahkan value nama di object
$Amoy->nama = "Amoy";

// panggil function sayHelloNull dengan parameter null
$Amoy->sayHelloNull(null);
