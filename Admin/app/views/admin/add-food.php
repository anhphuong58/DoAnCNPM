<?php include('partials/menu.php'); ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Add Cake</span>
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
                    <td>ID:</td>
                        <td>
                            <input type="text" name="id" placeholder="Cake ID ">
                        </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td>
                            <input type="text" name="title" placeholder="Cake Title ">
                        </td>
                    </tr>


                    <tr>
                        <td>Price: </td>
                        <td>
                            <input type="number" name="price" class="input-responsive" required>
                        </td>
                    </tr>

                    <tr>
                        <td> Select Image:</td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                    <tr>
                        <td>Category: </td>
                        <td>
                            <select name="category">
                                <?php foreach ($Category_foods as $value): ?>
                                    <option value="<?php echo $value['ID']; ?>">
                                        <?php echo $value['Name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Cake" class="btn-secondary">
                            <input type="button" value="Back" class="btn-danger" onclick="window.history.go(-1); return false;" />         			                           
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
