<?php
    class Entity_User{
        public $id;
        public $name;
        public $password;
        public $phone;
        public $email;
        public $address;

        public function __construct($_id,$_name,$_email,$_password,$_phone,$_address)
        {
            $this->id = $_id;
            $this->name = $_name;
            $this->password = $_password;
            $this->phone = $_phone;
            $this->email = $_email;
            $this->address = $_address;
        }
    }
    class Entity_Catelogy{
        public $id;
        public $name;

        public function __construct($_id,$_name)
        {
            $this->id = $_id;
            $this->name = $_name;
        }
    }
    class Entity_Cake{
        public $id;
        public $name;
        public $link;
        public $price;
        public $id_cate;
        
        public function __construct($_id,$_name,$_link,$_price,$_id_cate)
        {
            $this->id = $_id;
            $this->name = $_name;
            $this->link = $_link;
            $this->price = $_price;
            $this->id_cate = $_id_cate;
        }
    }
    class Entity_ItemCart{
        public $id_cart;
        public $id_cake;
        public $soluong;
        public $cream;
        public $size;

        public function __construct($_id_cart,$_id_cake,$_cream,$_size,$_soluong)
        {
            $this->id_cart = $_id_cart;
            $this->id_cake = $_id_cake;
            $this->cream = $_cream;
            $this->size = $_size;
            $this->soluong = $_soluong;
        }
    }
    class Entity_ItemDonHang{
        public $id_donhang;
        public $id_cake;
        public $cream;
        public $size;
        public $soluong;

        public function __construct($_id_donhang,$_id_cake,$_cream,$_size,$_soluong)
        {
            $this->id_donhang = $_id_donhang;
            $this->id_cake = $_id_cake;
            $this->cream = $_cream;
            $this->size = $_size;
            $this->soluong = $_soluong;      
        }
    }
    class Entity_DonHang{
        public $id_donhang;
        public $id_user;
        public $price;
        public $trangthai;
        public function __construct($_id_donhang,$_id_user,$_price,$_trangthai)
        {
            $this->id_donhang = $_id_donhang;
            $this->id_user = $_id_user;
            $this->price = $_price;      
            $this->trangthai = $_trangthai;
        }
    }
    class Entity_Cart{
        public $id_cart;
        public $id_user;
        public $price;

        public function __construct($_id_cart,$_id_user,$_price)
        {
            $this->id_cart = $_id_cart;
            $this->id_user = $_id_user;
            $this->price = $_price;      
        }
    }
?>