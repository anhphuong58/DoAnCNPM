<?php include ('partials/menu.php'); ?>

<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Add Admin</span>
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
            <form action="" method="POST" enctype="multipart/form-data">
            <!--
                <table class="tbl-30">
                    <tbody>
                        <tr>
                            <td>Full Name</td>
                            <td>
                                <input type="text" name="full_name" placeholder="Enter Your Name">
                            </td>
                        </tr>
                        <tr>
                            <td>Username: </td>
                            <td>
                                <input type="text" name="username" placeholder="Your Username">
                            </td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td>
                                <input type="Password" name="password" placeholder="Your Password">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <input type="submit" name="submit" value="Add Admin" class="btn-danger">
                            </td>
                        </tr>
                    </tbody>
                </table>
                -->
            <div style="text-align:center" >
                <select style="height:50px; font-size:30px" name="ID">
                    <?php  foreach ($user as $value):  ?>
                         <option value="<?php echo $value['ID']; ?>">
                             <?php echo $value['Name']; ?>
                         </option>
                    <?php endforeach; ?>              			    
                </select>
            </div>
            <br><br> 
            <div style="text-align:center" > 
            <td colspan="2">
                <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                <input type="button" value="Back" class="btn-danger" onclick="window.history.go(-1); return false;" />
            </td>
            </div>
            </form>
        </div>
    </div>
</section>
