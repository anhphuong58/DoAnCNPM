<?php include('partials/menu.php'); ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Update User</span>
        </div>
        <div class="search-box">
                <form action="search_food" method="GET">
                    <input name="search" type="text" placeholder="Search...">
                    <button type="submit" class='bx bx-search'></button>
                </form>
        </div>
    </nav>
    <div class="home-content">
        <div class="wrapper">
            <br> <br>
            <form action="" method="POST">        
                <table class="tbl-30">
                    <?php foreach ($user as $value): ?>
                    <tbody>
          		        <tr>         			        
          			        <td>ID</td>
          			        <td>
          				        <input readonly type="text" name="username" value="<?php echo $value['ID']; ?>">
          			        </td>
          		        </tr>
                        <tr>         			        
          			        <td>Name</td>
          			        <td>
          				        <input readonly type="text" name="name" value="<?php echo $value['Name']; ?>">
          			        </td>
          		        </tr>
          		        <tr>
          			        <td>Phone Number</td>
          			        <td>
          				        <input type="text" name="phonenumber" value="<?php echo $value['Phone']; ?>">
          			        </td>
          		        </tr>
                        <tr>
          			        <td>Password</td>
          			        <td>
          				        <input type="text" name="password" value="<?php echo $value['Password'] ?>">
          			        </td>
          		        </tr>
                        <tr>
          			        <td>Email</td>
          			        <td>
          				        <input type="text" name="email" value="<?php echo $value['Email']; ?>">
          			        </td>
          		        </tr>
                        <tr>
          			        <td>Address</td>
          			        <td>
          				        <input type="text" name="address" value="<?php echo $value['Address']; ?>">
          			        </td>
          		        </tr>
          		        <tr>
          			        <td colspan="2">
          				    <input type="hidden" name="username" value="<?php echo $value['ID']; ?>">
          				    <input type="submit" name="submit" value="Update user" class="btn-secondary">
                            <input type="button" value="Back" class="btn-danger" onclick="window.history.go(-1); return false;" />
          			    </td>
          		        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>           
            </form>
        </div>
    </div>
</section>
