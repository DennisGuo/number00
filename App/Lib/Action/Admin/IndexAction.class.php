<?php
class IndexAction extends Action{
	public function index(){
		$user = session('user');
		if(!is_null($user)){
			$this->assign('user',$user)->display();
		}else{
			$url = U('Login/index','','',true,true);
			$this->redirect($url);
		}
	}	
}