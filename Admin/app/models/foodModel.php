<?php
class foodModel extends BaseModel
{

    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }

    public function add_food()
    {
        if (isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $category = $_POST['category'];
            if (isset($_FILES['image']['name']))
            {
                $image_name = $_FILES['image']['name'];
                if ($image_name != "")
                {
                    $t = explode('.', $image_name);
                    $ext = end($t);
                    $image_name = "Food-Name-" . rand(0000, 9999) . "." . $ext;
                    $src = $_FILES['image']['tmp_name'];
                    //$dst = "../ShopAdmin/app/public/image/food/" . $image_name;
                    //$upload = move_uploaded_file($src, $dst);
                    $dst = "../View/" . $image_name;
                    $upload = move_uploaded_file($src, $dst);
                }
            }
            else
            {
                $image_name = ""; 
            }
            $sql = "INSERT INTO cake SET
             ID = '$id',
             Name ='$title',
             Price = $price,
             Link = '$image_name',
             ID_Category = $category
             ";
            $query = $this->_query($sql);
            header("location:food");
        }
    }
    
    public function Category_foods()
    {
        $sql = "SELECT*FROM category";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;
    }
    

    public function delete_food()
    {
        if (isset($_GET['id']) and isset($_GET['image_name']))
        {
            $id = $_GET['id'];
            $image_name = $_GET['image_name'];
            if ($image_name != "")
            {
                $path = "..ShopAdmin/public/image/food/" . $image_name;
                $remove = unlink($path);
                $sql = "DELETE FROM cake Where ID = '$id'";
                echo $sql;
                $query = $this->_query($sql);

            }
            //header('location:http://localhost/ShopAdmin/admin/food');
            header("location:food");

        }
    }

    public function update_food()
    {
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM cake Where ID = '$id'";
            $query = $this->_query($sql);
            $data = [];
            while ($row = mysqli_fetch_assoc($query))
            {
                array_push($data, $row);
            }
            return $data;
        }

    }
    
    public function Category_food()
    {
        $sql = "SELECT * FROM category";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;

    }
    

    public function Updatefood()
    {
        $id = $_GET['id'];
        if (isset($_POST['submit']))
        {
            $current_image = $_SESSION['imgfood'];
            $id = $_POST['id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $category = $_POST['category'];
            if (isset($_FILES['image']['name']))
            {
                $image_name = $_FILES['image']['name'];
                if ($image_name != "")
                {
                    $ext = end(explode('.', $image_name));
                    $image_name = "Food-Name-_" . rand(000, 999) . '.' . $ext; 
                    $source_path = $_FILES['image']['tmp_name'];
                    $destination_path = "../ShopAdmin/app/public/image/food/" . $image_name;
                    $upload = move_uploaded_file($source_path, $destination_path);
                    if ($upload == false)
                    {
                        $_SESSION['upload'] = "<div class='error'>Failed to upload image.</div>";
                        //header('loaction:http://localhost/DoAnAdmin/admin/food');
                        header("location:food");
                        die();
                    }
                    if ($current_image = "")
                    {
                        $remove_path = "..ShopAdmin/app/public/image/food/" . $current_image;
                        $remove = unlink($remove_path);
                        if ($remove == false)
                        {
                            $_SESSION['failed-remove'] = "<div class = 'error'>Failed to remove current image.</div>";
                            //header('loaction:http://localhost/DoAnAdmin/admin/food');  
                            header("location:food");
                        }
                    }

                }
                else
                {
                    $image_name = $current_image;
                }

            }
            else
            {
                $image_name = $current_image;
            }
            $sql = "UPDATE cake SET
              Name = '$title',
              Price = $price,
              Link = '$image_name',      
              ID_Category = '$category'
              WHERE ID = '$id'
              ";
            $query = $this->_query($sql);
            header("location:food");
            
        }

    }
    public function count_food()
    {
        $sql = "SELECT * FROM cake";
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
