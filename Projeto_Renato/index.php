<?php 
session_start();
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');

$action = filter_input(INPUT_POST, 'action');
if (!$action){
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'register':
        include('./views/register_form.php');
        break;
}
include('./views/register_form.php');

