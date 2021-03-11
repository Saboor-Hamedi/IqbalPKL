<?php

class Select
{
    protected $db;
    public function  __construct($db)
    {
        $this->db = $db;
    }
    public function getConnection()
    {
        return $this->db;
    }
    public function selectData($table)
    {
        $result = array();
        $sql = 'SELECT * FROM   ' . $table;
        $post = $this->getConnection()->link->query($sql);
        while ($row = $post->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
    public function selectById($table , $id)
    {
        $result = array();
        $sql = 'SELECT * FROM admin ' .$table . ' WHERE id = ' . $id . ' LIMIT 1';
        $post = $this->getConnection()->link->query($sql);
        while ($row = $post->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
}
