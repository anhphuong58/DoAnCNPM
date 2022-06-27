<?php
class UserModel extends DataBase

{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }
    public function DetailUser()
    {

        $id = $_GET['username'];
        $sql = "SELECT*FROM user WHERE ID = $id";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;
    }

    public function UpdateUser()
    {
        if (isset($_POST['submit']))
        {
            $id = $_POST['username'];
            $name = $_POST['name'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $sql = "UPDATE user SET  
                Phone = '$phonenumber',
                Password = '$password',
                Address = '$address',
                Email = '$email',
                Name = '$name'
                WHERE ID = '$id'
        ";
            $query = $this->_query($sql);
            header("location:user");
        }
    }
    public function DeleteUser()
    {
        if (isset($_GET['username']))
        {
            $username = $_GET['username'];
            $sql = "DELETE FROM user WHERE ID = '$username' ";
            $query = $this->_query($sql);
            header("location:user");
        }
    }
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

}

