<?php
require './User.php';
require './Database.php';
session_start();


$email = $_POST['email'];
$senha = $_POST['senha'];

$pwdHash = password_hash($email . $senha, PASSWORD_BCRYPT);




$pdo = Database::conexao();
try {
    $stmt = $pdo->prepare( "SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo "erro: email já cadastrado";
        header("Location: cadastro.php?fail=1"); exit;
    } else {
        $stmt = $pdo->prepare(
            "INSERT INTO users (email, pwdHash) VALUES (:email, :pwdHash);"
        );
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pwdHash', $pwdHash);
        $stmt->execute();


        header("Location: index.php?success=1"); exit;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
