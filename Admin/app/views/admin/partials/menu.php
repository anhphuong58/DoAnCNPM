<?php $url = "http://localhost/ShopAdmin/app/"; ?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $url; ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>public/css/sweetalert.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="<?php echo $url; ?>public/js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script type="text/javascript">
        var btns = document.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                alert(btns.length);
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
        function JSalert(e) {
            swal({
                title: "you will permanently delete the data!",
                text: "Are you sure to proceed?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Delete!",
                cancelButtonText: "No, I am not sure!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
                function (isConfirm) {
                    if (isConfirm) {
                        window.open(e, "_self")
                    }
                    else {
                        swal("OK", "It is not delete!", "error");
                    }
                });
        }
        function error() {
            swal({     
                title: "Can not delete",
                type: "warning",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "OK",               
            });
        }

    </script>
  </head>
<body>
  <div class="sidebar">
    <div class="logo-details">   
      <a href="index">
          <img src="<?php echo $url; ?>public/image/newlogo.jpg" width="100px" alt class="logo_detail">          
      </a>     
      <span class="logo_name">Cake <br> Shop</span>
    </div>
      <ul class="nav-links" id="nav-links">
        <li class="btn">
          <a href="index" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li class="btn">
          <a href="categories"> 
            <i class='bx bx-box' ></i>
            <span class="links_name">Category</span>
          </a>
        </li>
        <li class="btn">
          <a href="food">
            <i class="fa-solid fa-cake-candles"></i>
            <span class="links_name">Cake</span>
          </a>
        </li>
        <li class="btn">
          <a href="order">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>        
        <li class="btn">
          <a href="user">
            <i class='bx bx-male' ></i>
            <span class="links_name">User</span>
          </a>
        </li>
        <li class="btn">
          <a href="admin">
            <i class='bx bx-user' ></i>
            <span class="links_name">Admin</span>
          </a>
        </li>

        
        <li class="btn log_out">
          <a href="logout">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
