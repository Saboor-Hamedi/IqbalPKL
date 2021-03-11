<?php

class insert
{
    protected $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getConnection()
    {
        return $this->db;
    }
    public function Insert($title, $body)
    {
        $stmt = $this->getConnection()->link->prepare("INSERT INTO posts (title, body) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $body);
        $stmt->execute();
        $stmt->close();
    }
}
