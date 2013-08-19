<?php
class IndexAction extends Action{
	public function index(){
		if(!is_null($_SESSION['uid'])){
			$this->display();
		}else{
			$url = U('Login/index','','',true,true);
			$this->redirect($url);
		}
	}	
}