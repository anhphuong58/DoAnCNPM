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
    <title>SignIn</title>
</head>
<body>
    <?php
    include_once('/Applications/XAMPP/xamppfiles/htdocs/CNWeb/DoAn_MVC/User/View/Item/title.html'); 
    ?>
   
    <div class="main">
        <div class="signin">
            <form method="post" class="signin_form">
                <h1 class="signin_name">Đăng nhập</h1>
                <div class="signin_form-lable">
                    <label for="email" ><i class="fa fa-envelope-o signin-logoE" aria-hidden="true"></i></label>
                </div>
                <input type="text" name="Email" id="email" class="signin-textE" placeholder="Nhập email"><br>
                <div class="signin_form-lable">
                    <label for="matkhau"><i class="fa fa-lock signin-logoP" aria-hidden="true"></i></label>
                </div>
                <input type="password" name="MatKhau" id="matkhau" class="signin-textP" placeholder="Nhập mật khẩu"><br>
                <input type="submit" class="signin_btn" value="Đăng nhập">
                <div class="signin_prompt">
                    <a href="../Controller/User_Controller.php?modUser=2" class="signin-signup"> Đăng ký</a>
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