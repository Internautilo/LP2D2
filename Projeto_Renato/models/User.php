<?php

include('./models/Database.php');

class User
{
    private $id;
    private $name;
    private $email;
    private $password;


    public static function login($email, $password)
    {
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
                if ($stmt->execute()) {
                    $count = $stmt->rowCount();
                };
                

                $dbPassword = $stmt->fetchColumn();

                if (password_verify($passwordHash, $dbPassword)) {
                    $stmt = $db->prepare("SELECT id FROM users WHERE email = :email");
                    $stmt->bindParam(':email', $email);
                    $stmt->execute();
                    $id = $stmt->fetchColumn();
                    $stmt = $db->prepare("SELECT name FROM users WHERE email = :email");
                    $stmt->bindParam(':email', $email);
                    $stmt->execute();
                    $name = $stmt->fetchColumn();

                        $_SESSION['id'] = $id;
                        $_SESSION['name'] = $name;
                        $_SESSION['email'] = $email;
                        $_SESSION['isLogged'] = true;

                        $count = $stmt->rowCount();
                    

                    return $count;
                } else {
                    return 2;
                }
            } else {
                return 3;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function register($name, $email, $password)
    {
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
