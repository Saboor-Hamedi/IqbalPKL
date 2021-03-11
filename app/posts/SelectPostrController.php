<?php

class SelectPostController
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
    public function fetch($table, $admin_id)
    {
        $id = $_SESSION['email'];
        $result = array();
        $sql = ' SELECT id, name, lastname, email, create_at FROM  ' . $table . '  WHERE  ' . "'.$admin_id.'" . ' = ' . "'.$id.'" . 'LIMIT 1';
        $post = $this->getConnection()->link->query($sql);
        while ($row = $post->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
    public function counts($table)
    {
        $id = $_SESSION['email'];
        $result = array();
        $sql = ' SELECT *, COUNT(id) AS countCourses FROM  ' . $table  ;
        $post = $this->getConnection()->link->query($sql);
        while ($row = $post->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
}
