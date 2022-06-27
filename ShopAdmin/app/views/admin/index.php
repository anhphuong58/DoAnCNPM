<?php include('partials/menu.php'); ?>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
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
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Category</div>
                    <div class="number"><?php echo $count; ?></div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Food</div>
                    <div class="number"><?php echo $count2; ?></div>
                    <div class="indicator">
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Profit</div>
                    <div class="number"><?php echo $total_revenue; ?></div>
                    <div class="indicator">
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Order</div>
                    <div class="number"><?php echo $count3; ?></div>
                    <div class="indicator">
                        <span class="text">Down From Today</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</body>
