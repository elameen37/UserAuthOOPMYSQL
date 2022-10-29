<?php

session_start();
require_once 'classes/Dbh.php';
require_once 'classes/Route.php';
require_once 'classes/UserAuth.php';


$route = new formController();

 $route->handleForm();

