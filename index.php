<?php
ini_set('display_errors', 1);

require_once 'functions.php';
require_once 'autoload.php';

require_once 'controllers/Base_Controller.php';

session_start();

Model::connect();

Route::start(); // запускаем маршрутизатор
