<?php

class loginScript
{
    public $error;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getConnection()
    {
        return $this->db;
    }
    public function logged_in($email, $password)
    {
        
        try {
            $sql = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$password}' ";
            $query = $this->getConnection()->select($sql);
            if ($query) {
                while ($request = $query->fetch_assoc()) {
                    $_SESSION['email'] = $request['email'];
                    $_SESSION['user_id'] = $request['id'];
                    header("Location: /admin.php");
                    exit;
                }
            } else {
                $this->error = '<br > Wrong email or passsword';
            }
        } catch (Exception $e) {
           $e->getMessage();
        }
    }
    public function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
