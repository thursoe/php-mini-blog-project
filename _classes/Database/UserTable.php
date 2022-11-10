<?php

namespace _classes\Database;

class UserTable
{

    private $db = null;

    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }

    public function insert($username, $mail, $address, $password, $image_name)
    {
        $statement = $this->db->prepare(
            "INSERT INTO users (name,mail,address,password,image, created_at) VALUES
            (:name,:mail,:address,:password,:image, NOW())"
        );

        $statement->execute([
            ':name' => $username,
            ':mail' => $mail,
            ':address' => $address,
            ':password' => $password,
            ':image' => $image_name
        ]);

        return $this->db->lastInsertId();
    }

    public function getAll()
    {
        $statement = $this->db->query("SELECT * FROM users");
        return $statement->fetchAll();
    }

    public function findByNameAndPassword($username, $password)
    {
        $statement = $this->db->prepare("SELECT * FROM users WHERE name=:name AND password=:password");

        $statement->execute([
            ':name' => $username,
            ':password' => $password
        ]);

        $row = $statement->fetch();

        return $row ?? false;
    }

    public function findById($id)
    {
        $statement = $this->db->prepare("SELECT * FROM users WHERE id=:id");

        $statement->execute([
            ':id' => $id
        ]);

        $row = $statement->fetch();

        return $row ?? false;
    }
}
