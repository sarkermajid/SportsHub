<?php


namespace App\classes;
use App\classes\Database;

class Auth
{
    private $name;
    private $email;
    private $password;
    private $sql;
    private $queryResult;
    private $dbConnect;
    private $database;
    private $user;


    public function __construct($post = null)
    {
        if(isset($post['email']))
        {
            $this->database     = new Database();
            $this->email        = $post['email'];
            $this->password     = md5($post['password']);
        }
    }

    public function login()
    {
        $this->sql = "SELECT * FROM admins WHERE email = '$this->email' AND password = '$this->password'";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        $this->user = mysqli_fetch_assoc($this->queryResult);
        if($this->user)
        {
            session_start();
            $_SESSION['id']     = $this->user['id'];
            $_SESSION['name']   = $this->user['name'];
            header('Location: action.php?page=admin');
        }
        else
        {
            return "Your credential is wrong !";
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location: action.php?page=login');
    }
}