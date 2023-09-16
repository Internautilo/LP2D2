<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require('./models/User.php');

$db = Database::conexao();


$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');

$password = filter_input(INPUT_POST, 'password');

$action = filter_input(INPUT_POST, 'action');
if (!$action) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'registration':
        if ($name && $email && $password) {
            if (User::register($name, $email, $password)){
                include('./views/register_form.php?success=1');
            }
        } else {
            include('./views/error.php');
        }
        break;
    
    case 'login':
        include('./views/login_form.php');
        break;
    
    case 'logged':
        

    default:
        include('./views/register_form.php');

}
