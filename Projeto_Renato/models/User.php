<?php

require('./models/Database.php');

class User
{
    private $id;
    private $name;
    private $email;
    private $password;


    public static function login($email, $password)
    {
        session_start();
        global $db;
        $count = 0;

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
                    session_start();
                    $stmt = $db->prepare("SELECT id, name FROM users WHERE email = :email");
                    $stmt->bindParam(':email', $email);

                    if ($stmt->execute()) {
                        $name = $stmt->fetchColumn();

                        $_SESSION['id'] = $id;
                        $_SESSION['name'] = $name;
                        $_SESSION['email'] = $email;
                        $_SESSION['isLogged'] = true;

                        $count = $stmt->fetchColumn();
                    }

                    return $count;
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
        $count = 0;

        $pwdHash = password_hash($email . $password, PASSWORD_BCRYPT);
        try {
            $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return "jaCadastrado";
            } else {
                $stmt = $db->prepare(
                    "INSERT INTO users (name, email, pwdHash) VALUES (:name, :email, :pwdHash);"
                );
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':pwdHash', $pwdHash);
                if ($stmt->execute()) {
                    $count = $stmt->rowCount();
                }
                $stmt->closeCursor();

                return $count;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function logout()
    {
        session_unset();
        unset($_SESSION);
        session_destroy();
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
