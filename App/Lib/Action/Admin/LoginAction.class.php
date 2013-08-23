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
		$flag = false;
		$msg = "操作错误";
		$user = null;
		if(IS_POST){
			$m =  M('users');
			$user = $m->where(' username = "'+I('username')+'" and password = "'+I('password')+'" ')->find();
			if($user!=null && !empty($user)){
				$user['login_ip'] = get_client_ip();		
				$user['login_time'] = time();
				if($m->save($user)){
					$flag = true;
				}
			}else{
				$msg = "用户或密码错误！";
			}
		}		
		if(flag){
			session('user',$user);  //设置session
			$url = U('Index/index','','',true,true);
			$this->redirect($url);
		}else{
			$this->assign("msg",$msg)->display('index');
		}
		
	}	
}