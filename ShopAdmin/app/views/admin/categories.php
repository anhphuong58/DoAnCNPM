 <?php include('partials/menu.php') ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Category</span>
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
            <a href="add_category" class="btn-danger">Add Category </a>
            <br><br>
                <table class="styled-table">
                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    <?php $sn =1;?>
                    <?php foreach ($category as $value): ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $value['Name'];  ?></td>
                        <td>
                            <a href="update_category?id=<?php echo $value['ID'];?>" class="btn-primary">Update Category</a>
                            <a style="cursor: pointer" onclick="JSalert(this.name)" name="delete_Category?id=<?php echo $value['ID'];?>" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
        </div>
    </div>
</section>

