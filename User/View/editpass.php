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
    <title>EditPass</title>
</head>
<body>
<?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/title.html'); 
    ?>
   
    <div class="main">
        <div class="signup">
            <form method="post" class="signup_form1">
                <h1 class="signup_name">Đổi mật khẩu</h1>

                <div class="signup_form-lable">
                    <label for="matkhau"><i class="fa fa-lock signup-logoP" aria-hidden="true"></i></label>
                </div>
                <input type="password" name="MatKhauCu" placeholder="Nhập mật khẩu cũ" id="matkhau" class="signup-textP"><br>
                <div class="signup_form-lable">
                    <label for="matkhau"><i class="fa fa-lock signup-logoP" aria-hidden="true"></i></label>
                </div>
                <input type="password" name="MatKhauMoi" placeholder="Nhập mật khẩu mới" id="matkhau" class="signup-textP"><br>
                
                <div class="signup_form-lable">
                    <label for="matkhau"><i class="fa fa-lock signup-logoP" aria-hidden="true"></i></label>
                </div>
                <input type="password" name="MatKhauMoi2" placeholder="Nhập lại mật khẩu mới" id="matkhau" class="signup-textP"><br>
                <button type="submit" class="signup_btn">OK</button>
                <button type="button" class="signup_btn"><a href="?modUser=3&id=<?php echo $user->id;?>" style="color:white;">Return</a></button>   
 
            </form>
        </div>
    </div>
    </div>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/footer.html'); 
    ?>
</body>
</html>