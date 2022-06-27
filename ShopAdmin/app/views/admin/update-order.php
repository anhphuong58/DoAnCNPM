<?php include('partials/menu.php'); ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Update Order</span>
        </div>
        <div class="search-box">
                <form action="search_food" method="GET">
                    <input name="search" type="text" placeholder="Search...">
                    <button type="submit" class='bx bx-search'></button>
                </form>
        </div>

    </nav>
    <div class="home-content">

        <form action="" method="POST">
            <table class="tbl-30">
                <tbody>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select name="status">
                                <option value="ordered"
                                    <?php if($status=="ordered") {echo "selected";} ?>   
                                >Ordered</option>
                                <option value="on deliver"
                                    <?php if($status=="on deliver") {echo "selected";} ?>   
                                >On Delivered</option>
                                <option value="delivered"
                                    <?php if($status=="delivered") {echo "selected";} ?>   
                                >Delivered</option>
                                <option value="cancelled"
                                    <?php if($status=="cancelled") {echo "selected";} ?>   
                                >Cancelled</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="1">
                            <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                            <input type="button" value="Back" class="btn-danger" onclick="window.history.go(-1); return false;" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</section>
       