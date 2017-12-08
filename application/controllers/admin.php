<?php
class Admin extends Controller {
	public function __construct(){
        parent::__construct();
        $this->load_model('admin_model');
	}

	function index($msg=""){
		
      $this->loadview('login_form',['title'=>'login','msg'=>$msg]);
    }
	function check_admin(){
		if($this->admin_model->check_admin($_POST['login'],$_POST['password']))
		   	redirect('admin/home');
      
        else{
        	$msg="Wrong login or password";
            redirect("admin/index/$msg");
        }
    }
   function home(){
		$this->loadview('home',['title'=>'home']);
    }


}