<?php include('partials/menu.php'); ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">User</span>
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                    <?php $sn =1;?>
                    <?php foreach ($user as $value): ?>
                    <tr>
                        <td><?php echo $value['ID']; ?></td>
                        <td><?php echo $value['Name']; ?></td>
                        <td><?php echo $value['Phone']; ?></td>
                        <td><?php echo $value['Email']; ?></td>
                        <td><?php echo $value['Address']; ?></td>
                        <td>
                            <a href="Update_user?username=<?php echo $value['ID'] ;?>" class="btn-secondary"> Update </a>
                            <a style="cursor: pointer" onclick="JSalert(this.name)" name="Delete_user?username=<?php echo $value['ID']; ?>" class="btn-danger"> Delete </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
        </div>
    </div>
</section>
