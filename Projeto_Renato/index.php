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
    case 'registration':
        if ($name && $email && $password) {
            if (User::register($name, $email, $password)){
                include('./views/register_form.php?success=1');
            }
        } else {
            include('/views/error.php?error=registration_error');
        }
        break;
    
    case 'login':
        include('./views/login_form.php');
        break;
    
    case 'logging':
        echo "okey<br>";
        if ($email && $password){
            echo "okey<br>";

            $status = User::login($email, $password);
            if ($status == 1) {
                include('./views/login_form.php?success=2');
            } 
            if ($status == 2){
                include('./views/login_form.php?fail=2');
                echo "okey <br>";

            }
            if ($status == 3){
                include('./views/login_form.php?fail=3');

            }
            if ($status == 0){
                include('./views/login_form.php?fail=4');
            }
        }
        break;


    default:
        if (isset($_SESSION['isLogged'])) {
            session_destroy();
        } else {
            include('./views/list_products.php');

           // include('./views/register_form.php');
        }

}
