<?php


class Client
{

    private $name;
    private $contact;

    private $plan;


    public static function addClient($name, $contact, $plan)
    {
        global $db;
        $count = 0;

        try {
            $stmt = $db->prepare("SELECT * FROM clients WHERE name = :name");
            $stmt->bindParam(':name', $name);
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
