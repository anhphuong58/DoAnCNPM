<?php
class AdminModel extends DataBase

{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }
    public function getAll(){
        $sql = "SELECT * FROM user AS u, admin AS a WHERE u.ID = a.id_admin";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;
    }

    public function getUser(){
        $sql = "SELECT * FROM user WHERE ID NOT IN (SELECT * FROM admin)";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;
    }

    public function add_admin()
    {
        if (isset($_POST['submit']))
        {

            $id = $_POST['ID'];
            $sql = "INSERT INTO admin SET id_admin = $id";
            $query = $this->_query($sql);
            header('location:http://localhost/ShopAdmin/admin/admin');

        }
    }

    public function deleteAdmin()
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM admin WHERE id_admin =$id";
        $query = $this->_query($sql);
        header('location:http://localhost/ShopAdmin/admin/admin');

    }

    public function DetailAdmin()
    {
        $id = $_GET['id'];
        $sql = "SELECT*FROM user WHERE ID = $id";
        // Exucute the query
        $query = $this->_query($sql);
        // Check whether the query is exetued or not
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;
    }
    public function UpdateAdmin()
    {
        if (isset($_POST['submit']))
        {
            // get all the values from form to update
            $id = $_POST['id'];
            $full_name = $_POST['full_name'];
            $username = $_POST['username'];

            //create s SQL Query to update admin
            $sql = "UPDATE admin SET  
                full_name = '$full_name',
                username = '$username'
                WHERE id = '$id'

        ";
            $query = $this->_query($sql);
            header("location:admin");
        }
    }
    public function Update_password()
    {
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
        }
        if (isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $current_password = $_POST['current_password'];
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_password'];
            $sql = "SELECT * FROM user WHERE ID =$id AND Password = '$current_password'";
            $query = $this->_query($sql);
            if ($query == true)
            {
                // check whether data is available or not
                $count = mysqli_num_rows($query);
;
                if ($count == 1)
                {

                    // user exitst and password can be changed
                    // echo "user found";
                    // check whether the new passsword and confirm match or not
                    if ($new_password == $confirm_password)
                    {
                        // update the password
                        $sql2 = "UPDATE user SET Password = '$new_password' WHERE ID=$id ";
                        echo $sql2;
                        $query2 = $this->_query($sql2);
                        // check whther the query executed or not
                        if ($query2 == true)
                        {
                            // display succes message
                            // redirect the user
                            header("location:admin");

                        }

                    }
                }
            }
        }
    }
    public function login()
    {
        if (isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            //$sql = "SELECT * FROM  user AS u, admin AS a WHERE Email ='$email' AND password ='$password' AND u.ID = a.id_admin";
            $sql = "SELECT * FROM user WHERE Email ='$email' AND password ='$password' AND ID IN (SELECT * FROM admin)";
            $query = $this->_query($sql);
            $count = mysqli_num_rows($query);
            if ($count > 0)
            {
                $_SESSION['admin'] = $email;
                header('location:index');
            }
            else
            {
                header("location:login?a='$email'&b='$password'");
            }
        }
    }
    public function check_login()
    {
        if (!isset($_SESSION['admin'])) // if user session is not set       
        {

            header('location:login');
        }
    }
    public function logout()
    {
        session_destroy(); 
        header('location:login');
    }

    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
}

