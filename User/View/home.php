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
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../View/css/reset.css">
    <link rel="stylesheet" href="../View/css/home.css">
    <title>Home</title>
</head>
<body>
    <?php
        include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/title.html'); 
        include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/center.html'); 
    ?>
    <div class="advertisement">
        <div class="advertisement_main">
            <img class="advertisement_main-img" src="../View/image/img5.png">
            <div class="advertisement_main-controlL"><i class='bx bx-chevron-left'></i></div>
            <div class="advertisement_main-controlR"><i class='bx bx-chevron-right' ></i></div>
        </div>
        <div class="advertisement_list-image">
            <div  class="advertisement_div"><img src="../View/image/img5.png" alt="" class="advertisement_img"></div>
            <div  class="advertisement_div"><img src="../View/image/img9.png" alt="" class="advertisement_img"></div>
            <div  class="advertisement_div"><img src="../View/image/img7.png" alt="" class="advertisement_img"></div>
            <div  class="advertisement_div"><img src="../View/image/img6.png" alt="" class="advertisement_img"></div>
            <div  class="advertisement_div"><img src="../View/image/img8.png" alt="" class="advertisement_img"></div>
            <div  class="advertisement_div"><img src="../View/image/img1.png" alt="" class="advertisement_img"></div>
            <div  class="advertisement_div"><img src="../View/image/img2.png" alt="" class="advertisement_img"></div>
            <div  class="advertisement_div"><img src="../View/image/img3.png" alt="" class="advertisement_img"></div>
            <div  class="advertisement_div"><img src="../View/image/img4.png" alt="" class="advertisement_img"></div>
        </div>
    </div>
    <div class="main">
        <div class="main_classify">
            <?php
            for($j=0;$j<sizeof($cateList);$j++){
                echo "<div class='main_classify-name'>
                    <span class='main_classify-typepry'>".$cateList[$j]->name."</span>
                    <a href='?modCake=4&text=".$cateList[$j]->name."&id=$user->id' class='main_classify-more'>Xem thêm</a>
                </div>";
                echo "<div class='main_classify-list'>";
                    for($i=0;$i<5;$i++){
                        $cake = $cakelist[$j][$i];
                        include('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/cake.html'); 
                    }    
               echo " </div><br>";
            }
            ?>
            
        </div>
    </div>
    </div>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/footer.html'); 
    ?>
</body>
<script src="../View/css/app.js"></script>
</html>