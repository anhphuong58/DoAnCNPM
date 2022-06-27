<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../View/css/reset.css">
    <link rel="stylesheet" href="../View/css/home.css">
    <title>User</title>
</head>
<body>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/title.html'); 
    
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/center.html'); 
    ?>
    <div class="main">
        <div class="user">
            <div class="user_title">
                <h1 class="user_title-h1">Đơn hàng đã đặt của bạn</h1>
                <div class="user_title-user">
                <h1 class="user_title-h1">Thông tin cá nhân</h1>
                    <a href="?modUser=0" class="user_title-logout">
                        <i class="fa fa-sign-out user_title-logo" aria-hidden="true"></i>
                        Thoát
                    </a>
                </div>
            </div>
            <div class="user_box">
                <div class="" style="width: 68%">
            
                    <div class="user_cart">
                        <?php
                        if(!isset($donhangs)){
                            echo '
                            <div class="user_cart-detail">
                                <div class="user_cart-img">
                                    <img src="../View/image/GioHangTrong.png" alt="" class="user_cart-image">
                                    <span class="user_cart-span"> Bạn chưa đặt đơn hàng nào !!!</span>
                                </div>     
                            </div>
                            ';
                        }
                        else{
                            for($i=sizeof($donhangs)-1;$i>=0;$i--){
                                $donhang = new Entity_DonHang($donhangs[$i]->id_donhang,$donhangs[$i]->id_user,$donhangs[$i]->price,$donhangs[$i]->trangthai);
                                include('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/Item_DonHang.html');       
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="user_detail1">
                    <div class="user_detail">
                        <p class="user_detail-name">Tên : <span lass="user_detail-nameS"><?php echo $user->name ?></span></p>
                        <p class="user_detail-name">Email: <span lass="user_detail-nameS"><?php echo $user->email ?></span></p>
                        <p class="user_detail-name">Địa chỉ: <span lass="user_detail-nameS"><?php echo $user->address ?></span></p>
                        <p class="user_detail-name">SDT: <span lass="user_detail-nameS"><?php echo $user->phone ?></span></p>
                        <?php
                            echo " <p class='user_detail-name1'><a href='?modUser=6&id=$user->id'>Chỉnh sửa thông tin</a></p>";
                            echo " <p class='user_detail-name'><a href='?modUser=5&id=$user->id'>Đổi mật khẩu</a></p>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/footer.html'); 
    ?>
</body>
</html>