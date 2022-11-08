<?php

namespace _classes\Database;

class PostTable
{
    private $db = null;

    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }

    public function getAll()
    {
        $statement = $this->db->query("SELECT posts.title, posts.text, posts.created_at, users.name FROM posts LEFT JOIN users ON posts.user_id = users.id");
        return $statement->fetchAll();
    }

    public function insert($user_id, $title, $text)
    {
        $statement = $this->db->prepare("INSERT INTO posts (user_id, title, text) VALUES (:user_id,:title,:text)");

        $statement->execute([
            ':user_id' => $user_id,
            ':title' => $title,
            ':text' => $text
        ]);

        return $this->db->lastInsertId();
    }
}
