<?php include('partials/menu.php') ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Admin</span>
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
            <a href="add_admin" class="btn-danger">Add Admin </a>
            <br><br>
                <table class="styled-table">
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Phone number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Actions</th>

                    </tr>
                    <?php $sn =1;?>
                    <?php foreach ($admin as $value): ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $value['Name']; ?></td>
                        <td><?php echo $value['Phone']; ?></td>
                        <td><?php echo $value['Email']; ?></td>
                        <td><?php echo $value['Address']; ?></td>                        
                        <td>
                        <!--
                            <a href="update_password?id=<?php echo $value['ID'] ;?>" class="btn-primary">Change Password </a>
                            <a href="update_admin?id=<?php echo $value['id'] ;?>" class="btn-secondary">Update Admin </a> 
                        -->
                        <?php if(  $value['Email'] != $_SESSION['admin']) { ?>
                            <button onclick="JSalert(this.name)" name="deleteAdmin?id=<?php echo $value['ID']; ?>" class="btn-danger"> Delete Admin </button>
                        <?php } else { ?> 
                            <button onclick="error()" class="btn-danger"> Delete Admin </button>
                        <?php } ?> 
                        </td>
                        
                    </tr>
                    <?php endforeach; ?>
                </table>
        </div>
    </div>
</section>
