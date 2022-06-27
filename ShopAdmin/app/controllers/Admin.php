<?php 
$url = "http://localhost/ShopAdmin/app/"; 
class Admin{
    public $model;
    public $modeladmin;
    public $modelcategory;
    public $modelfood;
    public $modelorder;
    public $modeluser;
    public $modelsearch;
    public function __construct(){
        require_once _DIR_ROOT.'/app/models/HomeModel.php';
        $this->model = new HomeModel();
        require_once _DIR_ROOT.'/app/models/AdminModel.php';
        $this->modeladmin = new AdminModel();       
        require_once _DIR_ROOT.'/app/models/CategoryModel.php';
        $this->modelcategory = new CategoryModel();
        require_once _DIR_ROOT.'/app/models/foodModel.php';
        $this->modelfood = new foodModel();
        require_once _DIR_ROOT.'/app/models/OrderModel.php';
        $this->modelorder = new OrderModel();
        require_once _DIR_ROOT.'/app/models/UserModel.php';
        $this->modeluser = new UserModel(); 
        require_once _DIR_ROOT.'/app/models/SearchModel.php';
        $this->modelsearch = new SearchModel();
    }

    public function index(){
        $this->modeladmin->check_login();
        $count = $this->modelcategory->count_catecory();
        $count2 = $this->modelfood->count_food();
        $count3 = $this->modelorder->count_order();
        $total_revenue = $this->modelorder->total_revenue();
        require_once _DIR_ROOT.'/app/views/admin/index.php';
     }
    
     public function categories(){
        $this->modeladmin->check_login();
        $category = $this->model->getAll('category');
        require_once _DIR_ROOT.'/app/views/admin/categories.php';
      }

     public function update_category(){
        $this->modeladmin->check_login();
        $category = $this->modelcategory->update_category();
        $this->modelcategory->UpdateCategory();
        require_once _DIR_ROOT.'/app/views/admin/update-category.php';

     }

     public function delete_Category(){
        $this->modeladmin->check_login();
        $this->modelcategory->DeleteCategory();         
     }
     public function add_category(){
        $this->modeladmin->check_login();
        $this->modelcategory->addCategory();
        require_once _DIR_ROOT.'/app/views/admin/add-category.php';
     }
      
     public function food(){
        $this->modeladmin->check_login();
        $food = $this->model->getAll('cake');
        $Category_food = $this->modelfood->Category_food();
        require_once _DIR_ROOT.'/app/views/admin/food.php';
     }
     public function add_food(){
        $this->modeladmin->check_login();
        $Category_foods = $this->modelfood->Category_foods();
        require_once _DIR_ROOT.'/app/views/admin/add-food.php';
        $this->modelfood->add_food();
     }
     public function update_food(){
        $this->modeladmin->check_login();
        $food = $this->modelfood->update_food();
        $Category_food = $this->modelfood->Category_food();
        require_once _DIR_ROOT.'/app/views/admin/update-food.php';
        $this->modelfood->updatefood();                          
     }
     public function search_food(){
        $this->modeladmin->check_login();
        $food = $this->modelsearch->Search();
        $Category_food = $this->modelfood->Category_food();
        require_once _DIR_ROOT.'/app/views/admin/food.php';
     }
           
     public function user(){
        $this->modeladmin->check_login();
        $user = $this->model->getAll('user');
        require_once _DIR_ROOT.'/app/views/admin/user.php';
     }
     public function Update_user(){
        $this->modeladmin->check_login();
        $user =  $this->modeluser->DetailUser();
        $this->modeluser->UpdateUser();
        require_once _DIR_ROOT.'/app/views/admin/update-user.php';
     }
     public function Delete_user(){
        $this->modeladmin->check_login();     
        $this->modeluser->DeleteUser();
     }
     public function delete_food(){
        $this->modeladmin->check_login();
        $this->modelfood->delete_food();
     }
     public function admin(){
        $this->modeladmin->check_login();
        $admin = $this->modeladmin->getAll();
        require_once _DIR_ROOT.'/app/views/admin/admin.php';
     }
     public function add_admin(){
        $this->modeladmin->check_login();
        $user = $this->modeladmin->getUser();
        $this->modeladmin->add_admin();
        require_once _DIR_ROOT.'/app/views/admin/add-admin.php';        
     }
     public function deleteAdmin(){
        $this->modeladmin->check_login();
        $this->modeladmin->deleteAdmin();
     }
     /*
     public function Update_admin(){
        $this->modeladmin->check_login();
        $admin =  $this->modeladmin->DetailAdmin();
        $this->modeladmin->UpdateAdmin();
        require_once _DIR_ROOT.'/app/views/admin/update-admin.php';
     }
     
     public function Update_password(){
         $this->modeladmin->check_login();
         $this->modeladmin->Update_password();
         require_once _DIR_ROOT.'/app/views/admin/update-password.php';
     }
     */

   
     public function order(){
        $this->modeladmin->check_login();
        $order = $this->modelorder->order_food();
        require_once _DIR_ROOT.'/app/views/admin/order.php';
     }
     public function order_cart(){
        $this->modeladmin->check_login();
        $food_ordered = $this->modelorder->food_ordered();
        require_once _DIR_ROOT.'/app/views/admin/order-cart.php';
     }
     public function update_order(){
        $this->modeladmin->check_login();
        $this->modelorder->update_order();
        $status = $this->modelorder->status_order();
        require_once _DIR_ROOT.'/app/views/admin/update-order.php';
     }
     public function login(){     
        $this->modeladmin->login();
        require_once _DIR_ROOT.'/app/views/admin/login.php';
     }
     public function logout(){
        $this->modeladmin->logout();
     } 
}

