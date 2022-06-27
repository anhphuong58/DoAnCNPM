<?php
class SearchModel extends BaseModel
{

    public function Search()
    {

        $search = $_GET['search'];
        $sql = "SELECT*FROM cake WHERE Name LIKE '%$search%'";
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

