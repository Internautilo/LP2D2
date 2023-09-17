<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

var_dump($_SESSION);
echo "<br>";
var_dump($_POST);

require('./models/User.php');

$db = Database::conexao();


$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');

$error_message = filter_input(INPUT_GET, 'error');
$success = filter_input(INPUT_GET, 'success');
$fail = filter_input(INPUT_GET, 'fail');

$password = filter_input(INPUT_POST, 'password');

$action = filter_input(INPUT_POST, 'action');
if (!$action) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {

    // VIEWS
    case 'register':
        include('./views/register_form.php');
        break;

    case 'login':
        include('./views/login_form.php');
        break;



    
    
    
    // LOGIC
    case 'registration':
        if ($name && $email && $password) {
            if (User::register($name, $email, $password)){
                $success = 1;
                include '../Projeto_Renato/views/register_form.php';
            }
        } else {
            $error_message = 'registrarion_error';
            include('/views/error.php');
        }
        break;
    
    case 'logging':
        echo "okey<br>";
        if ($email && $password){

            $status = User::login($email, $password);
            if ($status == 1) {
                $success = 2;
                include('./views/login_form.php');
            } 
            if ($status == 2){
                $fail = 2;
                include('./views/login_form.php');
            }
            if ($status == 3){
                $fail = 3;
                include('./views/login_form.php');
            }
            if ($status == 0){
                $fail = 4;
                include('./views/login_form.php');
            }
        }
        break;

        case 'logoff':
            User::logout();
            include('./views/landing_page.php');
            break;



    // DEFAULT VIEW
    default:
        include('./views/landing_page.php');
}
