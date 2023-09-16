<?php
require './User.php';
require './Database.php';

ini_set('display_errors', 1);
error_reporting(1);
session_start();


$email = $_POST['email'];
$senha = $_POST['senha'];

$pwd2Hash = $email . $senha;

$pdo = Database::conexao();

try {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $stmt = $pdo->prepare("SELECT pwdHash FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $pwdHashDB = $stmt->fetchColumn();

        if (password_verify($pwd2Hash, $pwdHashDB)) {
            echo "login feito com successo";

            session_start();
            $stmt = $pdo->prepare("SELECT nome FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $nome = $stmt->fetchColumn();
            
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['isLogged'] = 1;


            header("Location: index.php?success=2");
            exit;
        } else {
            echo "usuario ou senha inválidos";
            //header("Location: login.php?fail=2"); exit;
        }
    } else {
        echo "email não cadastrado";
        //header("Location: login.php?fail=3"); exit;

    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
