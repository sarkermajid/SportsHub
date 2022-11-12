<?php


namespace App\classes;
use App\classes\Database;

class Message
{
    private $name;
    private $email;
    private $message;
    private $database;
    private $sql;
    private $dbConnect;
    private $data = [];
    private $queryResult;

    public function __construct($post = null)
    {
        $this->database = new Database();

        if(isset($post['name']))
        {
            $this->name     = $post['name'];
            $this->email    = $post['email'];
            $this->message  = $post['message'];
        }
    }


    public function sendMessage()
    {
        $this->sql = "INSERT INTO messages (name,email,message) VALUES ('$this->name', '$this->email', '$this->message')";
        $this->dbConnect = $this->database->dbConnect();
        mysqli_query($this->dbConnect, $this->sql);
        return "Message send successfully";
    }

    public function getAllMessage()
    {
        $this->sql = "SELECT * FROM messages";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        while($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }

        return $this->data;
    }

    public function deleteMessage($id)
    {
        $this->sql = "DELETE FROM messages WHERE id = '$id' ";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);

        header('Location: action.php?page=message');
    }
}