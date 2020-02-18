<?php
require 'class/Personnage.php';
require 'class/Form.php';

$maru= new Personnage('Maru');
var_dump($maru);

$maru->retrait();


var_dump($maru);
?>