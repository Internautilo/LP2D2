<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);



require('./models/User.php');
require('./models/Client.php');
require('./models/Database.php');

var_dump($_SESSION);

$db = Database::conexao();

$clients = Client::getClients();

//Filter for POST fillable inputs
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$clientName = filter_input(INPUT_POST, 'clientName');
$email = filter_input(INPUT_POST, 'email');
$plan = filter_input(INPUT_POST, 'plan');
$contact = filter_input(INPUT_POST, 'contact');
$password = filter_input(INPUT_POST, 'password');
$plan = filter_input(INPUT_POST, 'plan');
$contact = filter_input(INPUT_POST, 'contact');

//Filter for POST/GET status messages
$error_message = filter_input(INPUT_GET, 'error');
$success = filter_input(INPUT_GET, 'success');
$fail = filter_input(INPUT_GET, 'fail');

//Filter for POST/GET action status
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

    case 'insert_client':
        include('./views/insert_client.php');
        break;

    case 'list_clients':
        include('./views/list_clients.php');
        break;

    case 'list_plans':
        include('./views/list_plans.php');
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
                include('./views/landing_page.php');
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

        case 'client_insertion':
            if ($clientName && $contact && $plan) {
                if(Client::addClient($clientName, $contact, $plan)) {
                    $success = 1;
                    include('./views/insert_client.php');
                } else {
                    $error_message = "Erro ao inserir cliente";
                    include('./views/error.php');
                }
            } else {
                $error_message = "erro ao inserir cliente";
                include('./views/error.php');
            }
            break;

        case 'contract_plan':
            if (Client::contractPlan($plan, $_SESSION['id'], $_SESSION['name'], $_SESSION['email'], $contact)){
                include('./views/landing_page.php');
            } else {
                $error_message = "Erro na contratação de plano";
                include('./views/error.php');
            }
            break;

        case 'update_plan':
            if(Client::updatePlan($plan, $_SESSION['id'])){
                include('./views/landing_page.php');
            } else {
                $error_message = "Erro na atualização de plano";
                include('./views/error.php');
            }
            break;


    // DEFAULT VIEW
    default:
        include('./views/landing_page.php');
}


