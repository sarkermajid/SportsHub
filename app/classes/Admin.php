<?php


namespace App\classes;
use App\classes\Database;

class Admin
{
    private $name;
    private $email;
    private $password;
    private $id;
    private $sql;
    private $database;
    private $dbConnect;
    private $queryResult;
    private $row;
    private $data = [];


    public function __construct($post = null)
    {
        $this->database = new Database();
        if(isset($post['name']))
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->password = md5($post['password']);

            if(isset($post['id'])){
                $this->id = $post['id'];
            }
        }
    }

    public function addAdmin($post = null)
    {
        $this->sql = "INSERT INTO admins (name,email,password) VALUES ('$this->name', '$this->email', '$this->password')";
        $this->dbConnect = $this->database->dbConnect();
        mysqli_query($this->dbConnect, $this->sql);

        return "New admin added successfully";
    }

    public function getAdmin()
    {
        $this->sql = "SELECT * FROM admins";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        while($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }

        return $this->data;
    }

    public function getAdminById($id)
    {
        $this->sql = "SELECT * FROM admins WHERE id = '$id'";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        $this->data = mysqli_fetch_assoc($this->queryResult);

        return $this->data;
    }

    public function updateAdmin()
    {
        $this->sql = "UPDATE admins SET name = '$this->name', email = '$this->email', password = '$this->password' WHERE id = '$this->id'";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        header('Location: action.php?page=admin');
    }
}