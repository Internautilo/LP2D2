<?php

require('./models/Database.php');



class User extends Database
{
    private $id;
    private $name;
    private $email;
    private $password;

    public $db = Database::conexao();



    public static function login($email, $password)
    {   
        session_start();
        global $db;
        $passwordHash = $email . $password;

        try {
            $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $stmt = $db->prepare("SELECT pwdHash FROM users WHERE email = :email");
                $stmt->bindParam(':email', $email);
                $stmt->execute();

                $dbPassword = $stmt->fetchColumn();

                if (password_verify($passwordHash, $dbPassword)) {
                    echo "login feito com successo";

                    session_start();
                    $stmt = $db->prepare("SELECT name FROM users WHERE email = :email");
                    $stmt->bindParam(':email', $email);
                    $stmt->execute();
                    $name = $stmt->fetchColumn();

                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['isLogged'] = true;


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

    }

    public static function register($name, $email, $password)
    {
        session_start();
        global $db;

        $pwdHash = password_hash($email . $password, PASSWORD_BCRYPT);
        try {
            $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "erro: email já cadastrado";
                header("Location: cadastro.php?fail=1");
                exit;
            } else {
                $stmt = $db->prepare(
                    "INSERT INTO users (name, email, pwdHash) VALUES (:name, :email, :pwdHash);"
                );
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':pwdHash', $pwdHash);
                $stmt->execute();


                header("Location: index.php?success=1");
                exit;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


   
    public function getName()
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }
}