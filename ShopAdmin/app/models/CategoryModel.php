<?php
class CategoryModel extends DataBase

{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }

    public function Category_foods()
    {
        if (isset($_GET['category_id']))
        {

            $category_id = $_GET['category_id'];
            $sql = "SELECT* FROM food WHERE ID = '$category_id'";

            $query = $this->_query($sql);
            $data = [];
            while ($row = mysqli_fetch_assoc($query))
            {
                array_push($data, $row);
            }
            return $data;

        }

    }
    public function Title_Category()
    {
        if (isset($_GET['category_id']))
        {

            $category_id = $_GET['category_id'];
            $sql = "SELECT Name FROM category WHERE ID = $category_id";
            $query = $this->_query($sql);
            $row = mysqli_fetch_assoc($query);
            $title = $row['Name'];
            return $title;

        }
    }

    public function DeleteCategory()
    {
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = "DELETE FROM category Where ID = $id";
            $query = $this->_query($sql);
            $sql = "DELETE FROM cake Where ID_Category = $id";
            $query = $this->_query($sql);
            header('location:categories');
            
        }
    }

    public function addCategory()
    {
        if (isset($_POST['submit']))
        {
            $title = $_POST['title'];
            $sql = "INSERT INTO category SET Name = '$title'";
            $query = $this->_query($sql);
            header("location:categories");
        }
    }
    public function update_category()
    {
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM category Where ID = $id";
            $query = $this->_query($sql);
            $data = [];
            while ($row = mysqli_fetch_assoc($query))
            {
                array_push($data, $row);
            }
            return $data;
        }
    }
    public function UpdateCategory()
    {

        if (isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $title = $_POST['title'];           
            $sql = "UPDATE category SET Name = '$title' WHERE id = '$id'";
            $query = $this->_query($sql);
            header("location:categories");
        }
    }
    public function count_catecory()
    {
        $sql = "SELECT * FROM category";
        $query = $this->_query($sql);
        $count = mysqli_num_rows($query);
        return $count;
    }

    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
}

?>
