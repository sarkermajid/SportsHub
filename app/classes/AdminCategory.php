<?php


namespace App\classes;
use App\classes\Database;

class AdminCategory
{
    private $categoryName;
    private $sql;
    private $dbConnect;
    private $database;
    private $queryResult;
    private $row;
    private $data = [];
    private $id;

    public function __construct($post = null)
    {
        $this->database     = new Database();

        if(isset($post['category_name']))
        {
            $this->categoryName = $post['category_name'];

            if(isset($post['id']))
            {
                $this->id = $post['id'];
            }
        }
    }

    public function createCategory()
    {
        $this->sql = "INSERT INTO categories (category_name) VALUES ('$this->categoryName')";
        $this->dbConnect = $this->database->dbConnect();
        mysqli_query($this->dbConnect, $this->sql);

        return 'Category created successfully';
    }

    public function getAllCategory()
    {
        $this->sql = "SELECT * FROM categories";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        while($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }

        return $this->data;
    }

    public function getCategoryById($id)
    {
        $this->sql = "SELECT * FROM categories WHERE id = '$id'";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        $this->data = mysqli_fetch_assoc($this->queryResult);

        return $this->data;
    }

    public function updateCategory()
    {
        $this->sql = "UPDATE categories SET category_name = '$this->categoryName' WHERE id = '$this->id'";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);
        header('Location: action.php?page=manage-category');
    }

    public function deleteCategory($id)
    {
        $this->sql = "DELETE FROM categories WHERE id = '$id'";
        $this->dbConnect = $this->database->dbConnect();
        $this->queryResult = mysqli_query($this->dbConnect, $this->sql);

        header('Location: action.php?page=manage-category');
    }
}