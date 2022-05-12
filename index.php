<?php

require_once ('./manager.php');
require_once ('./idirecteur.php');
require_once ('./secretaire.php');


$al = new Manager('Capone', 'Al', 32);
$sylvie = new Secretaire('Durant', 'Sylvie', 30);
$Ane= new Directeur ('Monaco', 'Ane', 45);

$al->direBonjour();
$sylvie -> direBonjour();
$sylvie-> prendRDV ($directeur, $al);
$al->afficherRDV();
