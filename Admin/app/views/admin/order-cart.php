<?php include('partials/menu.php');?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Order Detail</span>
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

        <table class="styled-table">
            <tbody>
                <tr>
                    <th>S.N</th>
                    <th>Cake</th>
                    <th>Image</th>
                    <th>Cream</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>SoLuong</th>
                </tr>
                <?php $sn =1;?>
                <?php foreach ($food_ordered as $value): ?>
                <tr>
                    <td><?php echo $sn++; ?></td>
                    <td><?php  echo $value['Name'];?></td>
                    <td>
                        <img src="<?php echo " http://localhost/ShopAdmin/app/public/" ?>image/food/<?php echo $value['Link']; ?>"  width = "100px">
                    </td>
                    <td><?php echo $value['Cream']; ?></td>
                    <td><?php echo $value['Size']; ?></td>
                    <td><?php echo $value['Price']; ?></td>
                    <td><?php echo $value['SoLuong']; ?></td>
                <?php endforeach; ?>
                <button class="btn-danger" onclick="window.history.go(-1); return false;">Back</button?
        </table>
                    
        </div>
    </div>
</section>
