<?php

class IndexAction extends Action {

    public function index() {
        $user = session('user');
        if (!is_null($user)) {
            $this->assign('user', $user)->display();
        } else {
            $url = U('Login/index', '', '', true, true);
            $this->redirect($url);
        }
    }
    
    public function updateWebsite(){
        $this->display();
    }
    
    public function saveWebsiteInfo(){
        
        $n = toHtml(I('wName'));
        $k = toHtml(I('wKey'));
        $d = toHtml(I('wDesc'));
        
        $web = array('WEBSITE_NAME' => $n,'WEBSITE_KEYWORDS' => $k,'WEBSITE_DESCRIPTION' => $d);
        $path = CONF_PATH;
        F('website',$web,$path);
        $url = U('index', '', '', true, true);
        $this->redirect($url);
    }
    
    public function getProducts(){
        //实例化TopClient类
        $c = new TopClient;
        $c->appkey = "1021564665";
        $c->secretKey = "sandboxd6a9adb01d11f4b2700cb11af";
        //$c->sessionkey= "test";   //如沙箱测试帐号sandbox_c_1授权后得到的sessionkey
        //实例化具体API对应的Request类

        $req = new ItemcatsGetRequest;
        $req->setFields("cid,parent_cid,name,is_parent");
        $req->setParentCid(0);
        $resp = $c->execute($req);
        
        p($resp);die;
    }
        

}