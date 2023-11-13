<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Lady");
var_dump($company);

$company->programmer = new BackendProgrammer("Lady");
var_dump($company);

$company->programmer = new FrontendProgrammer("Lady");
var_dump($company);

sayHelloProgrammer(new Programmer("Lady"));
sayHelloProgrammer(new BackendProgrammer("Lady"));
sayHelloProgrammer(new FrontendProgrammer("Lady"));
