<?php include('partials/menu.php'); ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Addmin</span>
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
            <h1> Change Password </h1>
            <br> <br>
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="tbl-30">
                    <tbody>
                        <tr>
                            <td>Current Password: </td>
                            <td>
                                <input type="password" name="current_password" placeholder="Current Password">
                            </td>
                        </tr>
                        <tr>
                            <td>New Password: </td>
                            <td>
                                <input type="password" name="new_password" placeholder="New Password">
                            </td>
                        </tr>
                        <tr>
                            <td>Confirm Password: </td>
                            <td>
                                <input type="Password" name="confirm_password" placeholder="Confirm Password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="id" value="<?php  $id = $_GET['id']; echo $id ;?>">
                                <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                                <input type="button" value="Back" class="btn-danger" onclick="window.history.go(-1); return false;" />
          			    
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>
