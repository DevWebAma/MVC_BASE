<?php
//DISPATCHER

//je charge l'initialisation 
require_once'../core/init.php';

var_dump($connexion);

//je charge le router 
require_once'../app/routers/index.php';

//je charge le template
require_once'../app/views/template/index.php';