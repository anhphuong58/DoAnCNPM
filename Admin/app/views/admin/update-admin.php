<?php include('partials/menu.php'); ?>
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
        <div class="wrapper">
            <h1> Update Admin </h1>
            <br> <br>
                 <form action="" method="POST">
                     <?php foreach ($admin as $value): ?>
                     <table class="tbl-30">
                         <tbody>
                             <tr>
                                 <td>Full Name: </td>
                                 <td>
                                     <input type="text" name="full_name" value="<?php echo $value['full_name']; ?>">
                                 </td>
                             </tr>
                             <tr>
                                 <td>Username: </td>
                                 <td>
                                     <input type="text" name="username" value="<?php echo $value['username']; ?>">
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                     <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                                     <input type="button" value="Back" class="btn-danger" onclick="window.history.go(-1); return false;" />
          			                    
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <?php endforeach; ?>
                 </form>
        </div>
    </div>
</section>
