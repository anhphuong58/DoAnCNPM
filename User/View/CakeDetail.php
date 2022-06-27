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
    <title>CakeDetail</title>
</head>
<body>
    
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/title.html'); 
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/center.html'); 
    ?>
    <div class="main">
        <div class="cake">
            <div class="cake_filter">
                <?php
                echo 
                "
                <img class='cake_filter-img' src='$cake->link'>
                <div class='cake_filter-detail'>
                    <h1 class='cake_filter-h1'>$cake->name</h1>
                    <form method='post'>
                        <span class='cake_filter-money'>$cake->price đồng</span>
                        <input type='text' name='modCake' id='' value='3' style='display: none;'>
                        <input type='text' name='idUser' id='' value='$user->id' style='display: none;'>
                        <input type='text' name='idCake' id='' value='$cake->id' style='display: none;'>

                        <div class='cake_filter-size'>
                            <p class='cake_filter-p'>Kích thước</p>
                            <input type='radio' name='size' id='18' value='18' class='cake_filter-radio'>
                            <label for='18' class='cake_filter-lable'>18</label>
                            <input type='radio' name='size' id='20' value='20' class='cake_filter-radio'>
                            <label for='20' class='cake_filter-lable'>20</label>
                            <input type='radio' name='size' id='22' value='22' class='cake_filter-radio'>
                            <label for='22' class='cake_filter-lable'>22</label>
                            <input type='radio' name='size' id='24' value='24' class='cake_filter-radio'>
                            <label for='24' class='cake_filter-lable'>24</label>
                        </div>
                        <div class='cake_filter-size'>
                            <p class='cake_filter-p'>Chọn vị kem</p>
                            <input type='radio' name='cream' id='vani' value='vani' class='cake_filter-radio'>
                            <label for='vani' class='cake_filter-lable'>vani</label>
                            <input type='radio' name='cream' id='tra' value='trà xanh' class='cake_filter-radio'>
                            <label for='tra' class='cake_filter-lable'>trà xanh</label>
                            <input type='radio' name='cream' id='socola' value='socola' class='cake_filter-radio'>
                            <label for='socola' class='cake_filter-lable'>socola</label>
                            <input type='radio' name='cream' id='capuchino' value='capuchino' class='cake_filter-radio'>
                            <label for='capuchino' class='cake_filter-lable'>capuchino</label>
                        </div>
                        <div class='cake_filter-number'>
                            <label class='cake_filter-numberN' for='number'>Số lượng</label>
                            <input type='number' name='number' id='' class='cake_filter-numberI' min='1' value='1' >
                        </div>
                        
                        <input type='submit' class='cake_filter-numberbtnB' value='Bỏ vào giỏ hàng'>
                        <div class='cake_filter-buy'>
                        </div>
                    </form>
                </div>";
                ?>
                <div class="cake_filter-prompt">
                    <h2 class="cake_filter-h2">Những điều cần lưu ý: </h2>
                    <p class="cake_filter-p">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Size và số người phù hợp để sử dụng: <br>
                         - Size 18cm=5,6 người.<br>
                         - Size 20cm=6-8 người. <br>
                         - Size 22cm=8-9 người. <br>
                         - Size 24cm=9-11 người.<br>

                    </p>
                    <p class="cake_filter-p">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Bảo quản: <br>
                        Bảo quản ở nhiệt độ từ 10-18 độ C.
                    </p>
                    <p class="cake_filter-p">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Chúng tôi cam kết: <br>
                         1. Khách hàng nhận bánh, kiểm tra kỹ mới thanh toán.<br>
                         2. Mọi vấn đề phát sinh đều được giải quyết ngay.<br>
                         3. Hoàn tiền 100% nếu khách nhận bánh không đúng mẫu.<br>
                         4. Hotline hỗ trợ: 0944 508 367    
                    </p>
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