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
    <title>ShoppingCart</title>
</head>
<body>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/title.html'); 
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/center.html'); 
    ?>
    
    <div class="main">
        <div class="cart">
            <h1 class="cart_title">Giỏ hàng của bạn</h1>
            <form action="" class="cart_form">
                <?php
                echo "
                <input type='text' name='modDH' id='' value='1' style='display: none;'>
                <input type='text' name='idUser' id='' value='$user->id' style='display: none;'>";

                ?>
                <h4 class="cart_form-title">Bạn đang có <span class="cart_form-number"><?php echo sizeof($item_cakes) ?></span>  sản phẩm trong giỏ hàng</h4>
                <table class="cart_table">
                    <tr>
                        <th class="cart_table-left">Sản phẩm</th>
                        <th class="cart_table-th">Đơn giá</th>
                        <th class="cart_table-th">Số lượng</th>
                        <th class="cart_table-th">Thành tiền</th>
                        <th class="cart_table-th">Xóa</th>
                    </tr>
                    <?php

                    for($i=0;$i<sizeof($item_cakes);$i++){
                        include('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/Item_Cart.html');   
                    }
                    ?>

                </table>
                <div class="cart_form-money">

                    <div class="cart_form-prompt">
                        <span class="cart_form-promptN">Ghi chú:</span>
                        <input type="textarea" class="cart_form-textarea" name="GhiChu" id="" cols="30" rows="10" placeholder="Nhập ghi chú cho cửa hàng">
                    </div>
                    <div class="cart_form-moneydetail">
                        <div class="cart_form-totalmoney">
                            <h2 class="cart_form-totalmoneyN">Tổng tiền: <span class="cart_form-moneycake"><?php echo $price; ?> đồng</span></h2>
                        </div>
                        <div class="cart_form-check">
                            <?php
                                echo " <a href='?modUser=0&id=$user->id' class='cart_form-continue'>Tiếp tục mua hàng</a> "
                            ?>
                            <button type="submit" class="cart_form-payment">Đặt hàng</button>
                        </div>
                    </div>
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