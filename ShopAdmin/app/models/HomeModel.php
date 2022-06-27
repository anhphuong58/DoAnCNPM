<?php
/*
* kees thuwaf class Model
**/
class HomeModel extends BaseModel {
    protected $_table = 'products';
    //const TABLE = 'food';

   
    public function getAll($table)
    {
       return $this->all($table);
       // die($table);
    }
    /*public function food(){
        $sql = "SELECT * FROM food";
        return mysqli_query($this->con,$sql);
    }*/
    public function foodIndex()
    {
        return $this->food();
    }
    public function categoryIndex(){
        return $this->category();
    }
    
}