<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        include_once ('../Model/M_User1.php');
        class Ctrl_User{
            public function invoke(){
                $modeluser = new Model_User();
                $modelcake = new Model_Cake();
                $modelcate = new Model_Catelogy();
                $modelcart = new Model_Cart();
                $modeldonhang = new Model_DonHang();
                if(isset($_REQUEST['modUser'])){
                    $modUser = $_REQUEST['modUser'];
                    if($modUser==0){
                        //hien thi X
                        if(isset($_REQUEST['id'])){
                            $id = $_REQUEST['id'];
                            $user = $modeluser->GetUserByID($id);
                        }
                        $cateList = $modelcate->GetAllCatelogy();
                        for($i=0;$i<sizeof($cateList);$i++){
                            $cakelist[$i] = $modelcake->GetCakeByID_Catelogy($cateList[$i]->id);
                        }
                        include_once('../View/home.php');
                    }
                    else if($modUser==1){
                        //Sign in X
                        include('../View/signin.php');

                        $email = $_REQUEST['Email'];
                        $pass = $_REQUEST['MatKhau'];
                        
                        $check = $modeluser->CheckSignIn($email,$pass);

                        if($check=="Error"){
                        }
                        else if($check=="Error1"){
                            echo "<script>alert('Vui lòng nhập đúng thông tin');</script>";
                        }
                        else{
                            echo("<meta http-equiv='refresh' content='0,url=?modUser=0&id=$check'>"); //Refresh by HTTP META

                        }
                        
                    }
                    else if($modUser==2){
                        //sign up X
                        header("Refresh");
                        include_once('../View/signup.php'); 

                        $name = $_REQUEST['Name'];
                        $address = $_REQUEST['Address'];
                        $phone = $_REQUEST['Phone'];
                        $pass = $_REQUEST['MatKhau'];
                        $email = $_REQUEST['Email'];

                        $check = $modeluser->AddUSer($name,$phone,$email,$pass,$address);
                        echo $check;
                        // if($check=="Error"){
                        // }
                        // else if($check=="Error1"){
                        //     echo "<script>alert('Da ton tai Email');</script>";
                        // }
                        // else if($check=="ErrorEmail"){
                        //     echo "<script>alert('Email sai dinh dang');</script>";
                        // }
                        // else{
                        //     echo("<meta http-equiv='refresh' content='0,url=?modUser=0&id=$check'>"); //Refresh by HTTP META
                        // }
                    }
                    else if($modUser==3){
                        //xem thong tin user X + don hang
                        $id = $_REQUEST['id'];
                        $user = $modeluser->GetUserByID($id);
                        $donhangs = $modeldonhang->GetAllDonHang($id);
                        include_once('../View/user.php'); 
                    }
                    
                    else if($modUser==5){
                        //doi pass X
                        $id = $_REQUEST['id'];
                        $user = $modeluser->GetUserByID($id);
                        include_once('../View/editpass.php'); 
                        if(isset($_REQUEST['MatKhauCu'])&&isset($_REQUEST['MatKhauCu'])&&isset($_REQUEST['MatKhauCu'])){
                            $passcu = $_REQUEST['MatKhauCu'];
                            $passmoi = $_REQUEST['MatKhauMoi'];
                            $passmoi2 = $_REQUEST['MatKhauMoi2'];
                            if($passcu==""||$passmoi==""||$passmoi2==""){
                                echo "<script>alert('Mời nhập đầy đủ thông tin');</script>";
                            }
                            else if($passcu==$passmoi){
                                echo "<script>alert('Mời nhập mật khẩu mới khác mật khẩu cũ');</script>";
                            }
                            else if($passmoi != $passmoi2){
                                echo "<script>alert('Mật khẩu mới không giống nhau');</script>";
                            }
                            else {
                                $check = $modeluser->EditPass($id,$passcu,$passmoi);
                                if($check=="Error"){
                                    echo "<script>alert('Mật khẩu cũ sai');</script>";
                                }
                                else{
                                    echo("<meta http-equiv='refresh' content='0,url=?modUser=3&id=$check'>"); //Refresh by HTTP META
                                }
                            }
                        }
                    }
                    else if($modUser==6){
                        //edit thong tin X
                        $id = $_REQUEST['id'];
                        $user = $modeluser->GetUserByID($id);
                        include_once('../View/editthongtin.php'); 
                        if(isset($_REQUEST['Name'])||isset($_REQUEST['Email'])||isset($_REQUEST['Phone'])||isset($_REQUEST['Address'])){

                            $name=$_REQUEST['Name'];
                            $email = $_REQUEST['Email'];
                            $phone = $_REQUEST['Phone'];
                            $address = $_REQUEST['Address'];
                            $check=$modeluser->EditUser($id,$name,$email,$address,$phone);
                            if($check=="Error Edit"){
                            }
                            else if($check=="Error Data"){
                                echo "<script>alert('Nhap day du lieu');</script>";
                            }
                            else if($check=="Nothing"){
                            }
                            else {
                                echo("<meta http-equiv='refresh' content='0,url=?modUser=3&id=$check'>"); //Refresh by HTTP META
                            }
                        }
                    }
                    else{
                        include_once('../View/Item/404.html'); 
                    }
                }
                else  if(isset($_REQUEST['modCake'])){
                    $modCake = $_REQUEST['modCake'];
                    if($modCake==1){
                        //xem cake detail X
                        if(isset($_REQUEST['id'])){
                            $id = $_REQUEST['id'];
                            $iduser = $_REQUEST['iduser'];
                            $user = $modeluser->GetUserByID($iduser);
                            $cake = $modelcake->GetCakeByID($id);
                            if(($cake->id_cate>=4)&&($cake->id_cate<=6)){
                                include_once('../View/BanhNgotDetail.php'); 
                            }
                            else { 
                                include_once('../View/CakeDetail.php'); 
                            }
                        }
                    }
                    else if ($modCake==2){
                        //search cake name OX
                        $text = $_REQUEST['text'];
                        if(isset($text)){
                            $id = $_REQUEST['id'];
                            if(isset($id)){
                                $user=$modeluser->GetUserByID($id);
                            }
                            $cakelist=$modelcake->SearchCake($text);
                            include_once('../View/searchlist.php'); 
                        }
                    }
                    else if($modCake==3){
                        //them vao gio hang X
                        $cream = $_REQUEST['cream'];
                        $size = $_REQUEST['size'];
                        $number = $_REQUEST['number'];
                        $iduser = $_REQUEST['idUser'];
                        $idCake = $_REQUEST['idCake'];
                        $cake = $modelcake->GetCakeByID($idCake);
                        if($iduser){
                            if((isset($cream)&&isset($size)&&isset($number))||(($cake->id_cate>=4)&&($cake->id_cate<=6))){
                                $check = $modelcart->CheckCart($iduser,$idCake);
                                if($check=="true"){
                                    if($modelcart->CheckItemCart($iduser,$idCake)=="true"){
                                        if(isset($cream)){
                                            $modelcart->UpdateItemCart($iduser,$idCake,$cream,$size,$number);
                                        }
                                        else {
                                            $modelcart->UpdateItemCartBanhNgot($iduser,$idCake,$number);
    
                                        }
                                    }
                                    else{   
                                        if(isset($cream)){
                                            $modelcart->AddItemCart($iduser,$idCake,$cream,$size,$number);
                                        }
                                        else {
                                            $modelcart->AddItemCartBanhNgot($iduser,$idCake,$number);
    
                                        } 
                                     }
                                }
                                else {
                                    $modelcart->TaoCart($iduser);
                                    if(isset($cream)){
                                        $modelcart->AddItemCart($iduser,$idCake,$cream,$size,$number);
                                    }
                                    else {
                                        $modelcart->AddItemCartBanhNgot($iduser,$idCake,$number);
                                    }
                                }
                                
                                $modelcart->UpdatePriceCart($iduser);
                                echo("<meta http-equiv='refresh' content='0,url=?modCart=0&id=$iduser'>"); //Refresh by HTTP META
                            }
                            else {
                                echo "<script>alert('Vui long chon vi, size va luong banh');</script>";
                                echo("<meta http-equiv='refresh' content='0,url=?modCake=1&id=$idCake&iduser=$iduser'>"); //Refresh by HTTP META
                            }
                        }
                        
                        else {
                            echo("<meta http-equiv='refresh' content='0,url=?modUser=1'>");
                        }
                    }
                    else if ($modCake==4){
                        //search cake catelory OX
                        $text = $_REQUEST['text'];
                        if(isset($text)){
                            $id = $_REQUEST['id'];
                            if(isset($id)){
                                $user=$modeluser->GetUserByID($id);
                            }
                            $cakelist=$modelcake->SearchCakeTheoCate($text);
                            include_once('../View/searchlist.php'); 
                        }
                    }
                    else{
                        include_once('../View/Item/404.html'); 
                    }
                }
                else if(isset($_REQUEST['modCart'])){
                    $modCart = $_REQUEST['modCart'];
                    if($modCart==0){
                        //xem gio hang X
                        if(isset($_REQUEST['id'])){
                            $iduser = $_REQUEST['id'];
                            $modelcart->UpdatePriceCart($iduser);
                            $user = $modeluser->GetUserByID($iduser);
                            $item_cakes = $modelcart->GetItemCartByIDUSer($iduser); 
                            $price = $modelcart->GetPriceCartByIDUser($iduser);
                            if(isset($item_cakes)){
                                for($i=0;$i<sizeof($item_cakes);$i++){
                                    $id_cake = $item_cakes[$i]->id_cake;
                                    $cake[$i] = $modelcake->GetCakeByID($id_cake);
                                    $cream[$i] = $item_cakes[$i]->cream;
                                    $size[$i] = $item_cakes[$i]->size;
                                    $soluong[$i] = $item_cakes[$i]->soluong;
                                }
                                include_once('../View/HaveCart.php'); 
                            }
                            else {
                                include_once('../View/EmptyCart.php'); 
                            }
                        }
                        else {
                            echo("<meta http-equiv='refresh' content='0,url=?modUser=1'>"); //Refresh by HTTP META
                        }
                    }
                    else if($modCart==1){
                        //del item cart X
                        $iduser = $_REQUEST['idUser'];
                        $idCake = $_REQUEST['idCake'];
                        $modelcart->DeleteItemCart($iduser,$idCake);
                        $modelcart->UpdatePriceCart($iduser);
                        echo("<meta http-equiv='refresh' content='0,url=?modCart=0&id=$iduser'>"); //Refresh by HTTP META

                    }
                    else{
                        include_once('../View/Item/404.html'); 
                    }
                }
                else if(isset($_REQUEST['modDH'])){
                    $modDH = $_REQUEST['modDH'];
                    if($modDH==1){
                        //dat hang X
                        if(isset($_REQUEST['idUser'])){
                            $iduser = $_REQUEST['idUser'];
                            $ghichu = $_REQUEST['GhiChu'];
                            $modeldonhang->CartToDonHang($iduser);
                            $modeldonhang->Item_CartToItem_DonHang($iduser);
                            $modelcart->DeleteCart($iduser);
                            echo("<meta http-equiv='refresh' content='0,url=?modUser=3&id=$iduser'>"); //Refresh by HTTP META
                        }
                    }
                    else if ($modDH==0){
                        //hien thi 1 don hang X
                        $iduser = $_REQUEST['idUser'];
                        $id_donhang = $_REQUEST['idDH'];
                        $trangthai = $modeldonhang->GetTrangThaiDonHang($id_donhang);
                        $user = $modeluser->GetUserByID($iduser);
                        $price = $modeldonhang->GetPriceDonHang($id_donhang);
                        $item_donhangs = $modeldonhang->GetItemDonHangByID_DonHang($id_donhang);
                        for($i=0;$i<sizeof($item_donhangs);$i++){
                            $id_cake = $item_donhangs[$i]->id_cake;
                            $cake[$i] = $modelcake->GetCakeByID($id_cake);
                            $cream[$i] = $item_donhangs[$i]->cream;
                            $size[$i] = $item_donhangs[$i]->size;
                            $soluong[$i] = $item_donhangs[$i]->soluong;
                        }                   
                        include_once('../View/OrderDetail.php'); 
                    }
                    else if($modDH==2){
                        //hủy đơn hnagf
                        $iduser = $_REQUEST['idUser'];
                        $id_donhang = $_REQUEST['idDH'];
                        $trangthai = $modeldonhang->GetTrangThaiDonHang($id_donhang);
                        if($trangthai=="Ordered"){
                            $modeldonhang->HuyDonHang($id_donhang);
                            echo("<meta http-equiv='refresh' content='0,url=?modUser=3&id=$iduser'>"); //Refresh by HTTP META
                        }
                        else {
                            echo "<script>alert('Không thể hủy đơn hàng');</script>";
                            echo("<meta http-equiv='refresh' content='0,url=?modDH=0&idUser=$iduser&idDH=$id_donhang'>"); //Refresh by HTTP META


                        }
                    }
                    else{
                        include_once('../View/Item/404.html'); 
                    }
                }
            else{
                include_once('../View/Item/404.html'); 
            }
            }
        }
        $C_User = new Ctrl_User();
        $C_User->invoke();
    ?>
</body>
</html>