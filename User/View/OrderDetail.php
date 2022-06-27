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
    <title>OrderDetail</title>
</head>
<body>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/title.html'); 
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/center.html'); 
    ?>
    
    <div class="main">
        <div class="cart">
            <h1 class="cart_title">ID đơn hàng: <?php echo $id_donhang ?> </h1>
            
            <form action="" class="cart_form">
                <h4 class="cart_form-title">Đơn hàng của bạn có <span class="cart_form-number"><?php echo sizeof($item_donhangs) ?></span> sản phẩm</h4>
                <table class="cart_table">
                    <tr>
                        <th class="cart_table-left">Sản phẩm</th>
                        <th class="cart_table-th">Đơn giá</th>
                        <th class="cart_table-th">Số lượng</th>
                        <th class="cart_table-th">Thành tiền</th>
                    </tr>
                    <?php
                    for($i=0;$i<sizeof($item_donhangs);$i++){ 
                        include('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/Item_DetailDH.html');   
                    }
                    ?>
                </table>
                <div class="cart_form-money">
                    <div class="cart_form-prompt"></div>
                    <div class="cart_form-moneydetail">
                        <div class="cart_form-totalmoney">
                            <h2 class="cart_form-totalmoneyN1">Trạng thái đơn hàng: <span class="cart_form-moneycake1"><?php echo $trangthai; ?></span></h2>
                            <h2 class="cart_form-totalmoneyN">Tổng tiền: <span class="cart_form-moneycake"><?php echo $price; ?></span></h2>
                        </div>
                    </div>
                </div>
                <div class="cart_form-check">
                    <?php
                        echo " <a href='?modDH=2&idUser=$user->id&idDH=$id_donhang' class='cart_form-continue1'>Hủy đơn hàng</a> ";
                        echo " <a href='?modUser=3&id=$user->id' class='cart_form-continue1'>Return</a> ";
                    
                    ?>
                </div>
            </form>
        </div>
    </div>
    </div>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/footer.html'); 
    ?>
</body>
</html>