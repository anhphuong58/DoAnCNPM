<?php include('partials/menu.php') ?>

  <script type="text/javascript" 
          src="https://code.jquery.com/jquery-3.5.1.js">
  </script>
  <link rel="stylesheet" href="<?php echo $url; ?>public/css/xyz.css">
  
  <!-- DataTables JS -->
  <script src=
"https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
  </script>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Cake</span>
        </div>
        
            <div class="search-box">
                <form action="search_food" method="GET">
                    <input name="search" type="text" placeholder="Search...">
                    <button type="submit" class='bx bx-search'></button>
                </form>
            </div>
    </nav>
    <div class="home-content">        
        <div class="">
            <a href="add_food" class="btn-danger">Add Cake </a>  
            <br><br>
            <?php if (isset($_GET['search']))  { 
                echo "<div style='display: inline'>Kết quả tìm kiếm cho:   ".$_GET['search']."</div>";
            } ?>
                <table class="display styled-table" id="tableID">
                <thead>
                    <tr>
                        <th>&nbsp; S.N &nbsp;</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sn =1;?>
                    <?php if (count($food) > 0) { foreach ($food as $value): ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $value['Name']; ?></td>
                        <td><?php echo $value['Price']; ?></td>
                        <td>
                            <img src="<?php echo "http://localhost/ShopAdmin/app/public/"?>image/food/<?php echo $value['Link'];?>" width = "100px">
                        </td>
                        <td>
                            <?php  
                                foreach ($Category_food as $_value):  
                                    if($value['ID_Category']==$_value['ID']) echo $_value['Name'];					                                                                        
                                endforeach; 
                            ?>
                        </td>
                        <td>
                            <a href="update_food?id=<?php echo $value['ID']; ?>" class="btn-secondary">Update Food</a>
                            <a style="cursor: pointer" onclick="JSalert(this.name)" name="delete_food?id=<?php echo $value['ID']; ?>&image_name=<?php echo $value['Link']; ?>" class="btn-danger">Delete Food</a>
                        </td>
                    </tr>
                    <?php endforeach; } ?>
                    </tbody>
                </table>
                      <!-- jQuery -->

                    <script type="text/javascript">
      
    // Initialize the DataTable
    $(document).ready(function () {
      $('#tableID').DataTable({
  
        // Hide the information of the
        // current records of the DataTable
        info: false
      });
    }); 
    </script>
        </div>
    </div>
</section>


