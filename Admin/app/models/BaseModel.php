<?php
class BaseModel extends DataBase

{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }
    public function all($table)
    {
        $sql = "SELECT * FROM ${table}";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;

    }

    public function food()
    {
        $sql = "SELECT * FROM food WHERE active = 'Yes' AND featured = 'Yes' LIMIT 6";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;

    }
    public function category()
    {
        $sql = "SELECT * FROM category WHERE active = 'Yes' AND featured = 'Yes' LIMIT 3 ";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data, $row);
        }
        return $data;

    }

    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
}

?>
