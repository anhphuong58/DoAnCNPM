<?php  include('partials/menu.php'); ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Add Category</span>
        </div>
        <div class="search-box">
                <form action="search_food" method="GET">
                    <input name="search" type="text" placeholder="Search...">
                    <button type="submit" class='bx bx-search'></button>
                </form>
        </div>

    </nav>
    <div class="home-content">
        <div class="overview-boxes">
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="tbl-30">
                    <tr>
                        <label>Name</label> &emsp;
                        <input style="padding-left: 50px" type="text" name="title" placeholder="Category Name ">
                    </tr>                                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                            <input type="button" value="Back" class="btn-danger" onclick="window.history.go(-1); return false;" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
