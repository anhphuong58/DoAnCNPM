<?php
class OrderModel extends DataBase

{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();

    }

    public function order_food()
    {
        $sql = "SELECT * FROM donhang b JOIN user u ON b.ID_User = u.ID  ORDER BY ID_DonHang DESC";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;
    }

    public function status_order(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM donhang WHERE ID_DonHang = '$id'";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data[0]['TrangThai'];
    }

    public function food_ordered()
    {
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM  `item_donhang` JOIN cake ON `item_donhang`.`ID_Cake`=Cake.ID  WHERE ID_DonHang ='$id'";
            $query = $this->_query($sql);
            $data = [];
            while ($row = mysqli_fetch_assoc($query))
            {
                array_push($data, $row);
            }
            return $data;

        }
    }
    public function count_order()
    {
        $sql = "SELECT * FROM donhang";
        $query = $this->_query($sql);
        $count = mysqli_num_rows($query);
        return $count;
    }
    public function total_revenue()
    {
        $sql = "SELECT SUM(Price) AS Total FROM donhang  WHERE TrangThai ='delivered' ";
        $query = $this->_query($sql);
        $row = mysqli_fetch_assoc($query);
        $total_revenue = $row['Total'];
        return $total_revenue;
    }

    public function update_order()
    {
        $id = $_GET['id'];
        if (isset($_POST['submit']))
        {
            $status = $_POST['status'];
            $sql = "UPDATE donhang SET 
              TrangThai ='$status' WHERE ID_DonHang ='$id'";
            $query = $this->_query($sql);

            if ($query == true)
            {
                header('location:order');
            }
        }
    }

    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
}

