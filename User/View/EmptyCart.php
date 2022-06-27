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
    <title>EmptyCart</title>
</head>
<body>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/title.html'); 
    // include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/center.html'); 
    ?>
    
    <div class="main">
        <div class="cart">
            <h1 class="cart_title">Giỏ hàng của bạn</h1>
            <form action="" class="cart_form">
                <div style="text-align: center;">
                    <img style="width: 40%;height: 40%;" src="../View/image/emptycart.png" alt="">
                </div>
                <h1 class="cart_form-h1" >Giỏ hàng của bạn đang trống</h1>
                        <div class="cart_form-check1">
                            <?php
                            if(isset($user)){
                                echo " <a href='?modUser=0&id=$user->id' class='cart_form-continue'>Tiếp tục mua hàng</a> ";
                            }
                            else {
                                echo " <a href='?modUser=0' class='cart_form-continue'>Tiếp tục mua hàng</a> ";
                            }
                            ?>
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