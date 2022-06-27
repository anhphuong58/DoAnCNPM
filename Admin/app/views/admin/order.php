<?php include('partials/menu.php'); ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Order List</span>
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

            <br><br>
                <table class="styled-table">

                    <tr>
                        <th>S.N</th>
                        <th>Total</th>
                        <th>Customer Name</th>
                        <th>Status</th>                       
                        <th>Number Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>

                    <?php $sn =1;?>
                    <?php foreach ($order as $value): ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php  echo $value['Price'];?></td>
                        <td><?php echo $value['Name']; ?></td>
                        <td>
                            <?php
                            if ($value['TrangThai']=="ordered")
                            {
                            echo "<label>ordered</label>";
                            }
                            elseif($value['TrangThai'] == "on deliver")
                            {
                            echo"<label style='color:orange;'>On Delivery</label>";
                            }
                            elseif($value['TrangThai'] == "delivered")
                            {
                            echo"<label style='color:green;'>Delivered</label>";
                            }
                            elseif($value['TrangThai'] == "cancelled")
                            {
                            echo"<label style='color:red;'>Cancelled</label>";
                            }
                            ?>
                        </td>
                        <td><?php echo $value['Phone']; ?></td>
                        <td><?php echo $value['Email']; ?></td>
                        <td><?php echo $value['Address']; ?></td>
                        <td>
                            <a href="update_order?id=<?php echo $value['ID_DonHang']; ?>" class="btn-primary">Update </a>
                            <a href="order_cart?id=<?php echo $value['ID_DonHang']; ?>" class="btn-secondary">Details</a>
                        </td>
                        <?php endforeach; ?>

                </table>
        </div>
    </div>
</section>     