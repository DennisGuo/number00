<?php
class LoginAction extends Action{
	public function index(){
		$this->display();
	}
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify(4,5);
	}
	
	public function login(){
		if(!IS_POST){
			$this->assign("msg","操作错误")->display('index');
		}else{
			$user = M('user')->where(array('username'=>I('username'),'password'=>I('password')))->find();
			p($user);
		}		
	}	
}