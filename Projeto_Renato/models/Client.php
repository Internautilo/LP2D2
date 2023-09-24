<?php


class Client
{

    private $name;
    private $contact;

    private $plan;


    public static function addClient($name, $contact, $plan)
    {
        global $db;
        $user_id = $_SESSION['id'];
        $count = 0;

        try {
            $stmt = $db->prepare("SELECT * FROM clients WHERE user_id = :user_id");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return "jaCadastrado";
            } else {
                $stmt = $db->prepare(
                    "INSERT INTO clients (name, contact, plan) VALUES (:name, :contact, :plan);"
                );
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':contact', $contact);
                $stmt->bindParam(':plan', $plan);
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

    public static function contractPlan($plan, $user_id, $name, $email, $contact)
    {
        global $db;
        $count = 0;

        try {

            $stmt = $db->prepare(
                "INSERT INTO clients (user_id, name, email, contact, plan) VALUES (:user_id, :name, :email, :contact, :plan);"
            );
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':contact', $contact);
            $stmt->bindParam(':plan', $plan);
            if ($stmt->execute()) {
                $count = $stmt->rowCount();
            }
            $stmt->closeCursor();

            $_SESSION['plan'] = $plan;

            return $count;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function updatePlan($plan, $user_id)
    {
        global $db;
        $count = 0;

        try {

            $stmt = $db->prepare(
                "UPDATE clients plan = :plan WHERE user_id = :user_id;"
            );
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':plan', $plan);
            if ($stmt->execute()) {
                $count = $stmt->rowCount();
            }
            $stmt->closeCursor();

            $_SESSION['plan'] = $plan;

            return $count;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function getClients()
    {
        global $db;
        $count = 0;

        try {
            $query = "SELECT * FROM clients";
            $clients = $db->query($query);

            return $clients;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
