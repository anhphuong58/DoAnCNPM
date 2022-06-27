<?php include('partials/menu.php');?>

<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Update Cake</span>
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
            <?php foreach ($food as $value):
            $current_image = $value['Link'];
            $_SESSION['imgfood'] = $current_image;?>
            <form action="" method="POST" enctype="multipart/form-data">
                <table class="tbl-30">
                    <tr>
                        <td>Name:</td>
                        <td>
                            <input type="text" name="title" value="<?php echo $value['Name'];?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Price: </td>
                        <td>
                            <input type="number" name="price" value="<?php echo $value['Price'];?>">
                        </td>
                    </tr>

                    <tr>
                        <td> Current Image:</td>
                        <td>
                            <img src="<?php echo " http://localhost/ShopAdmin/app/public/" ?>image/food/<?php echo $current_image; ?> " width = "150px">
                        </td>
                    </tr>
                    <tr>
                        <td> New Image:</td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                    <tr>
                        <td>Category: </td>
                        <td>
                            <select name="category">
                                <?php  foreach ($Category_food as $_value):  ?>
                                <option value="<?php echo $_value['ID']; ?>"
						            <?php if($value['ID_Category']==$_value['ID']) {echo "selected";} ?>
					            >
                                    <?php echo $_value['Name']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="current_image" value="><?php $current_image; ?>">
                            <input type="hidden" name="id" value="<?php $id = $_GET['id'];echo $id; ?>">
                            <input type="submit" name="submit" value="Update Cake" class="btn-secondary">
                            <input type="button" value="Back" class="btn-danger" onclick="window.history.go(-1); return false;" />         			    
                        </td>
                    </tr>
                </table>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</section>
