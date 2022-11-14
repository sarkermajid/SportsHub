<?php


namespace App\classes;
use App\classes\Database;

class AdminNews
{
    private $title;
    private $author;
    private $categoryId;
    private $content;
    private $imageName;
    private $tempLocation;
    private $directory;
    private $image;
    private $database;
    private $dbConnect;
    private $sql;
    private $data = [];
    private $row;
    private $id;
    private $queryResult;

    public function __construct($post = null, $files = null)
    {
        $this->database     = new Database();

        if(isset($post['title']))
        {
            $this->title        = $post['title'];
            $this->author       = $post['author'];
            $this->categoryId   = $post['category_id'];
            $this->content      = $post['content'];

            if(isset($post['id']))
            {
                $this->id       = $post['id'];
            }
            if($files['image']['name'])
            {
                $this->imageName        = $files['image']['name'];
                $this->tempLocation     = $files['image']['tmp_name'];
                $this->directory        = 'assets/img/';
            }
        }
    }

    private function getImageUrl()
    {
        move_uploaded_file($this->tempLocation, $this->directory.$this->imageName);
        return $this->directory.$this->imageName;
    }

    public function addNews()
    {
        $this->image        = $this->getImageUrl();
        $this->sql          = "INSERT INTO newses (title,author,category_id,content,image) VALUES ('$this->title', '$this->author','$this->categoryId', '$this->content', '$this->image')";
        $this->dbConnect    = $this->database->dbConnect();
        mysqli_query($this->dbConnect, $this->sql);

        return 'News added Successfully';
    }

    public function getAllNews()
    {
        $this->sql = "SELECT * FROM newses";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        while($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }

        return $this->data;
    }

    public function getNewsById($id)
    {
        $this->sql = "SELECT * FROM newses WHERE id = '$id'";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        $this->data = mysqli_fetch_assoc($this->queryResult);

        return $this->data;
    }

    public function updateNews()
    {
        if($this->imageName)
        {
            $this->image = $this->getImageUrl();
        }
        else
        {
            $this->adminNews    = $this->getNewsById($this->id);
            $this->image        = $this->adminNews['image'];
        }

        $this->sql = "UPDATE newses SET title = '$this->title', author='$this->author',category_name = '$this->categoryName', content = '$this->content', image ='$this->image' WHERE id = '$this->id'";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);

        header('Location: action.php?page=manage-news');
    }

    public function deleteNews($id)
    {
        $this->sql = "DELETE FROM newses WHERE id = '$id' ";
        $this->dbConnect = $this->database->dbConnect();
        mysqli_query($this->dbConnect, $this->sql);
        header('Location: action.php?page=manage-news');
    }

    public function getAllNewsByCricket($cricketId)
    {
        $this->sql = "SELECT * FROM newses WHERE category_id=$cricketId ORDER BY id DESC LIMIT 4";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data, $this->row);
        }

        return $this->data;
    }

    public function getAllNewsByFootball($footballId)
    {
        $this->sql = "SELECT * FROM newses WHERE category_id=$footballId ORDER BY id DESC LIMIT 4";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row=mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data, $this->row);
        }

        return $this->data;
    }

}