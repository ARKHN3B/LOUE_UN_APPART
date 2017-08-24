<?php
require "User.php";
require "ConnectionDatabase.php";
require "DbManager.php";

$bdd = new DbManager();
// $bdd->selectById(1);
// var_dump($bdd->selectById(1));
var_dump($bdd->selectByEmail("goldenradcoon@icloud.com"));

//INSERT
// $user = new User();
// $user->setEmail("Jean@email.com");
// $user->setFirstname("Jean");
// $user->setLastname("Wong");
// $user->setPassword("mypass");
// $user->setBirth("1999-12-01");

// $user->saveInsert($bdd);


?>