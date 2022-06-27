<?php
    include_once ('../Model/E_User.php');
    
    class Model_User{
        public function __construct(){}

        public function getAllUser(){
            include('../config/config.php');
            $sqli = "SELECT * FROM User";
            $resulti = mysqli_query($link, $sqli);
            $i=0;
            while($row = mysqli_fetch_array($resulti)){
                $id = $row['ID'];
                $phone = $row['Phone'];
                $name = $row['Name'];
                $email = $row['Email'];
                $pass = $row['Password'];
                $address = $row['Address'];
                $users[$i++] = new Entity_User($id,$name,$email,$pass,$phone,$address);
            }
            return $users;
        }
        public function GetUserByID($id){
            $users = $this->getAllUser();
            for($i = 0; $i < sizeof($users);$i++){
                if($users[$i]->id==$id){
                   return $users[$i];
                }
            } 
        }
        public function GetUserByEmail($email){
            $users = $this->getAllUser();
            for($i = 0; $i < sizeof($users);$i++){
                if($users[$i]->email==$email){
                   return $users[$i];
                }
            } 
        }
        public function CheckSignIn($email,$pass){
            include('../config/config.php');
            $error="";
            if($email==""||$pass==""){
                return $error="Error";
            }            
            elseif($error==""){
                $sqli = "SELECT * FROM User where Email ='$email' and Password = '$pass'";
                $resulti = mysqli_query($link, $sqli);
                
                if(mysqli_num_rows($resulti)==0){
                    return "Error1";
                }
                else {
                    while($row = mysqli_fetch_array($resulti)){
                        $id = $row['ID'];                    
                    }
                    return $id;
                }
            }
        }
        public function CheckEmail($email){
            $partten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
            if(!preg_match($partten ,$email, $matchs))
                return false;
            else{
                return true;
            }
        }
        public function AddUSer($name,$phone,$email,$pass,$address){
            include('../config/config.php');
            $users = $this->getAllUser();
            $error="";
            if($name==""||$phone==""||$email==""||$pass==""||$address==""){
                return $error="Error";
            }
            if($this->CheckEmail($email)){
                for($i = 0; $i < sizeof($users);$i++){
                    if($users[$i]->email==$email){
                       return $error="Error1";
                    }
                } 
                if($error==""){
                    $sqli = "INSERT INTO User (ID,Name,Email,Password,Phone,Address)
                    VALUES (NULL, '$name', '$email', '$pass', '$phone', '$address'); ";
                    $resulti = mysqli_query($link, $sqli);
                    $user = $this->GetUserByEmail($email);

                    return $user->id;
                }
            }
            else {
                return $error="ErrorEmail";

            }
        }
        public function EditPass($id,$passcu,$passmoi){
            include('../config/config.php');
            $user = $this->GetUserByID($id);
            if($user->password != $passcu){
                return "Error";
            }
            else{
                $sqli = "UPDATE User set Password='$passmoi' where ID='$id' ";
                $resulti = mysqli_query($link, $sqli);    
                return $user->id;
            }
        }
        public function EditUser($id,$name,$email,$address,$phone){
            include('../config/config.php');
            $error="";
            if(($name==""||$email==""||$address==""||$phone=="")){
                 return $error="Error Data";
            }
            $user = $this->GetUserByID($id);
            if(($name==$user->name)&&($email==$user->email)&&($address==$user->address)&&($phone==$user->phone)){
                return $error="Nothing";
            }
            $sqli = "UPDATE User set Email='$email',Address='$address',Name='$name',Phone='$phone' where ID='$id' ";
            $result = mysqli_query($link, $sqli);
            if(!$result){
                return $error="Error Edit";
            }
            $error=$id;
            return $error;
        }
    }   

    class Model_Catelogy{
        public function __construct() { }

        public function GetAllCatelogy(){
            include('../config/config.php');
            $sqli = "SELECT * FROM Category";
            $resulti = mysqli_query($link, $sqli);
            $i=0;
            while($row = mysqli_fetch_array($resulti)){
                $id = $row['ID'];
                $name = $row['Name'];

                $catelogies[$i++] = new Entity_Catelogy($id,$name);
            }
            return $catelogies;
        }

        public function GetNameCatelogyByID($id){
            $catelogies = $this->GetAllCatelogy();
            for ($i=0;$i<sizeof($catelogies);$i++){
                if($catelogies[$i]->id ==$id )
                    return $catelogies[$i]->name;
            }
            return "Error";

        }
        public function GetCatelogyByID($id){
            $catelogies = $this->GetAllCatelogy();
            for ($i=0;$i<sizeof($catelogies);$i++){
                if($catelogies[$i]->id ==$id )
                    return $catelogies[$i];
            }
            return "Error";

        }
    }

    class Model_Cake{
        public function __construct(){}

        public function GetAllCake(){
            include('../config/config.php');
            $sqli = "SELECT * FROM Cake";
            $resulti = mysqli_query($link, $sqli);
            $i=0;
            while($row = mysqli_fetch_array($resulti)){
                $id = $row['ID'];
                $name = $row['Name'];
                $link = $row['Link'];
                $price = $row['Price'];
                $id_cate = $row['ID_Category'];

                $cakes[$i++] = new Entity_Cake($id,$name,$link,$price,$id_cate);
            }
            return $cakes;
        }

        public function GetCakeByID($id){
            $cakes = $this->GetAllCake();
            for($i = 0; $i < sizeof($cakes);$i++){
                if($cakes[$i]->id==$id){
                   return $cakes[$i];
                }
            } 
        }

        public function GetCakeByID_Catelogy($id){
            include('../config/config.php');
            $sqli = "SELECT * FROM Cake where ID_Category ='$id'";
            $resulti = mysqli_query($link, $sqli);
            $i=0;
            while($row = mysqli_fetch_array($resulti)){
                $id = $row['ID'];
                $name = $row['Name'];
                $link = $row['Link'];
                $price = $row['Price'];
                $id_cate = $row['ID_Category'];
                $cakes[$i++] = new Entity_Cake($id,$name,$link,$price,$id_cate);
            }
            return $cakes;
        }

        public function SearchCake($text){
            include('../config/config.php');
            $sqli = "SELECT * FROM Cake where Name like '%$text%'";
            $resulti = mysqli_query($link, $sqli);
            $i=0;
            while($row = mysqli_fetch_array($resulti)){
                $id = $row['ID'];
                $name = $row['Name'];
                $link = $row['Link'];
                $price = $row['Price'];
                $id_cate = $row['ID_Catelogy'];
                $cakes[$i++] = new Entity_Cake($id,$name,$link,$price,$id_cate);
            }
            return $cakes;
        }
        public function SearchCakeTheoCate($text){
            include('../config/config.php');
            $sqli = "SELECT Cake.ID,Cake.Name,Cake.Link,Cake.Price,Cake.ID_Category FROM Cake INNER JOIN Category ON Cake.ID_Category=Category.ID where Category.Name='$text'";
            $resulti = mysqli_query($link, $sqli);
            $i=0;
            while($row = mysqli_fetch_array($resulti)){
                $id = $row['ID'];
                $name = $row['Name'];
                $link = $row['Link'];
                $price = $row['Price'];
                $id_cate = $row['ID_Category'];
                $cakes[$i++] = new Entity_Cake($id,$name,$link,$price,$id_cate);
            }
            return $cakes;
        }
    }

    class Model_Cart{
        public function __construct(){}

        public function GetItemCartByIDUSer($id){
            include('../config/config.php');
            $sql = "SELECT ID_Cart FROM Cart where ID_User ='$id'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $id_cart = $row['ID_Cart'];
            }
            $sqli = "SELECT * FROM Item_Cart where ID_Cart ='$id_cart'";
            $resulti = mysqli_query($link, $sqli);
            $i=0;
            while($row = mysqli_fetch_array($resulti)){
                $id_cake = $row['ID_Cake'];
                $id_cart = $row['ID_Cart'];
                $cream = $row['Cream'];
                $size = $row['Size'];
                $soluong = $row['SoLuong'];
                $item_cart[$i++]= new Entity_ItemCart($id_cart,$id_cake,$cream,$size,$soluong);
            }
            return $item_cart;
         }

        
         public function GetPriceCartByIDUser($iduser){
            include('../config/config.php');
            $sql = "SELECT Price FROM Cart where ID_User ='$iduser'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $price = $row['Price'];
            }
            return $price;
        }
         public function CheckCart($idUser,$idCake){
            include('../config/config.php');
            $sql = "SELECT ID_Cart FROM Cart where ID_User ='$idUser'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $id_cart = $row['ID_Cart'];
            }
            if(isset($id_cart)){
                return "true";
            }
            else return "false";
         }
         public function CheckItemCart($iduser,$idcake){
            include('../config/config.php');
            $sql = "SELECT ID_Cart FROM Cart where ID_User ='$iduser'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $id_cart = $row['ID_Cart'];
            }
            $sqli = "SELECT * FROM Item_Cart where ID_Cart ='$id_cart'";
            $resulti = mysqli_query($link, $sqli);
            $i=0;
            while($row = mysqli_fetch_array($resulti)){
                $id_cake[$i++] = $row['ID_Cake'];
            }
            if(isset($id_cake)){
                for($i=0;$i<sizeof($id_cake);$i++){
                    if($idcake == $id_cake[$i]) return "true";
                }
            }
            return "false";
         }
         public function TaoCart($iduser){
            include('../config/config.php');
            $sqli = "INSERT INTO Cart (ID_Cart, ID_User, Price) VALUES (NULL, '$iduser', '')";
            $result = mysqli_query($link, $sqli);
         }

         public function AddItemCart($iduser,$idcake,$cream,$size,$number){
            include('../config/config.php');
            $sql = "SELECT ID_Cart FROM Cart where ID_User ='$iduser'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $id_cart = $row['ID_Cart'];
            }
            $sqli = "INSERT INTO Item_Cart (ID_Cart,ID_Cake,Cream,Size,SoLuong) 
                VALUES ('$id_cart', '$idcake', '$cream', '$size', '$number'); ";          
            $resulti = mysqli_query($link, $sqli);
         }
         public function AddItemCartBanhNgot($iduser,$idcake,$number){
            include('../config/config.php');
            $sql = "SELECT ID_Cart FROM Cart where ID_User ='$iduser'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $id_cart = $row['ID_Cart'];
            }
            $sqli = "INSERT INTO Item_Cart (ID_Cart,ID_Cake,Cream,Size,SoLuong) 
                VALUES ('$id_cart', '$idcake', NULL,NULL, '$number'); ";          
            $resulti = mysqli_query($link, $sqli);
         }
         public function UpdateItemCart($iduser,$idcake,$cream,$size,$number){
            include('../config/config.php');
            $sql = "SELECT ID_Cart FROM Cart where ID_User ='$iduser'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $id_cart = $row['ID_Cart'];
            }
            $sqli = "UPDATE Item_Cart SET Cream = '$cream', Size = '$size', SoLuong = '$number' WHERE Item_Cart.ID_Cart = '$id_cart' AND Item_Cart.ID_Cake = '$idcake' ";
            $resulti = mysqli_query($link, $sqli);
         }
         public function UpdateItemCartBanhNgot($iduser,$idcake,$number){
            include('../config/config.php');
            $sql = "SELECT ID_Cart FROM Cart where ID_User ='$iduser'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $id_cart = $row['ID_Cart'];
            }
            $sqli = "UPDATE Item_Cart SET  SoLuong = '$number' WHERE Item_Cart.ID_Cart = '$id_cart' AND Item_Cart.ID_Cake = '$idcake' ";
            $resulti = mysqli_query($link, $sqli);
         }
         public function DeleteItemCart($iduser,$idcake){
            include('../config/config.php');
            $sql = "SELECT ID_Cart FROM Cart where ID_User ='$iduser'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $id_cart = $row['ID_Cart'];
            }
            $sqli = "DELETE  FROM Item_Cart WHERE Item_Cart.ID_Cart = '$id_cart' AND Item_Cart.ID_Cake = '$idcake'";
            $resulti = mysqli_query($link, $sqli);
         }
         public function UpdatePriceCart($iduser){
            include('../config/config.php');
            $TotalPrice=0;
            $sql = "SELECT Cake.Price,Item_Cart.SoLuong FROM Cake INNER JOIN Item_Cart ON Cake.ID=Item_Cart.ID_Cake INNER JOIN Cart ON Item_Cart.ID_Cart = Cart.ID_Cart where Cart.ID_User ='$iduser'";
            $result = mysqli_query($link, $sql);
            $i=0;
            while($row = mysqli_fetch_array($result)){
                $price[$i]= $row['Price'];
                $number[$i] = $row['SoLuong'];
                $i++;
            }
            if(isset($price)){
                for($i=0;$i<sizeof($price);$i++){
                    $TotalPrice += $price[$i]*$number[$i];
                }
            }
            $sqli = "UPDATE Cart SET Price= '$TotalPrice' WHERE  `Cart`.`ID_User` = '$iduser' ";
            $resulti = mysqli_query($link, $sqli);
         }
         public function DeleteCart($iduser){
            include('../config/config.php');
            $sql = "DELETE Item_Cart From Item_Cart INNER JOIN Cart ON Cart.ID_Cart=Item_Cart.ID_Cart where ID_User='$iduser';";
            $result = mysqli_query($link,$sql);
            $sqli = "DELETE Cart From Cart where ID_User='$iduser';";
            $resulti = mysqli_query($link,$sqli);
            
         }
    }

    class Model_DonHang{
        public function __construct(){}

        public function GetAllDonHang($iduser){
            include('../config/config.php');
            $sql = "SELECT * From DonHang where ID_User='$iduser'";
            $result = mysqli_query($link,$sql);
            $i=0;
            while($row = mysqli_fetch_array($result)){
                $id_donhang = $row['ID_DonHang'];
                $price = $row['Price'];
                $trangthai = $row['TrangThai'];            
                $donhangs[$i++] = new Entity_DonHang($id_donhang,$iduser,$price,$trangthai);
            }
            return $donhangs;
        }

        public function GetItemDonHangByID_DonHang($id_donhang){
            include('../config/config.php');
            $sql = "SELECT * FROM Item_DonHang where ID_DonHang ='$id_donhang'";
            $result = mysqli_query($link, $sql);
            $i=0;
            while($row = mysqli_fetch_array($result)){
                $id_cake = $row['ID_Cake'];
                $cream = $row['Cream'];
                $size = $row['Size'];
                $soluong = $row['SoLuong'];
                $item_donhangs[$i++]= new Entity_ItemDonHang($id_donhang,$id_cake,$cream,$size,$soluong);
            }
            return $item_donhangs;
        }
        public function GetTrangThaiDonHang($id_donhang){
            include('../config/config.php');
            $sql = "SELECT TrangThai FROM DonHang where ID_DonHang ='$id_donhang'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $trangthai = $row['TrangThai'];
            }
            return $trangthai;
        }
        public function GetPriceDonHang($id_donhang){
            include('../config/config.php');
            $sql = "SELECT Price FROM DonHang where ID_DonHang ='$id_donhang'";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result)){
                $price = $row['Price'];
            }
            return $price;
        }
        public function CartToDonHang($iduser){
            include('../config/config.php');
            $sql = "SELECT Price From Cart where ID_User='$iduser'";
            $result = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($result)){
                $price = $row['Price'];
            }
            $sqli = "INSERT INTO DonHang (ID_DonHang,ID_User,Price,TrangThai) 
                VALUES (NULL, '$iduser', '$price','Ordered'); ";  
            $resulti = mysqli_query($link,$sqli);
        
       }
         
        public function CheckIDDonHang($iduser){
            include('../config/config.php');
            $sql = "SELECT ID_DonHang From DonHang where ID_User='$iduser'";
            $result = mysqli_query($link,$sql);
            while ($row = mysqli_fetch_array($result)){
                $id_donhang = $row['ID_DonHang'];
            }
            if(isset($id_donhang)){
                return $id_donhang;
            }
            else return "None";
       }

        public function Item_CartToItem_DonHang($iduser){
            include('../config/config.php');
            $sql = "SELECT * From Item_Cart INNER JOIN Cart on Cart.ID_Cart = Item_Cart.ID_Cart where ID_User='$iduser'";
            $result = mysqli_query($link,$sql);
            $i=0;
            while ($row = mysqli_fetch_array($result)){
                $id_cake[$i] = $row['ID_Cake'];
                $cream[$i] = $row['Cream'];
                $size[$i] = $row['Size'];
                $number[$i] = $row['SoLuong'];
                $i++;
            }
            $sql1 = "SELECT ID_DonHang From DonHang where ID_User='$iduser'";
            $result1 = mysqli_query($link,$sql1);
            while ($row = mysqli_fetch_array($result1)){
                $id_donhang = $row['ID_DonHang'];
            }
            for($i=0;$i<sizeof($id_cake);$i++){
                if($size[$i]){
                    $sqli = "INSERT INTO `Item_DonHang` (`ID_DonHang`, `ID_Cake`, `Cream`, `Size`, `SoLuong`)
                    VALUES ('$id_donhang', '$id_cake[$i]', '$cream[$i]', '$size[$i]', '$number[$i]')";
                }
                else{
                    $sqli = "INSERT INTO `Item_DonHang` (`ID_DonHang`, `ID_Cake`, `Cream`, `Size`, `SoLuong`)
                    VALUES ('$id_donhang', '$id_cake[$i]', NULL,NULL, '$number[$i]')";
                }
            $resulti = mysqli_query($link,$sqli);
            }
       }
       public function HuyDonHang($id_donhang){
        $link =  mysqli_connect("localhost","root","") or die ("khong the ket noi !!!");
        mysqli_select_db($link, "DoAn");
        $sql = "UPDATE  DonHang SET TrangThai ='Cancel' where ID_DonHang ='$id_donhang'";
        $result = mysqli_query($link, $sql);
       }

    }

?>