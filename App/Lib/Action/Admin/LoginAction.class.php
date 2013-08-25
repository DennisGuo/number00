<?php

class LoginAction extends Action {

    /**
     * 首页
     */
    public function index() {
        $this->display();
    }

    /**
     * 验证码
     */
    public function verify() {
        import('ORG.Util.Image');
        Image::buildImageVerify(4, 1);
    }

    /**
     * 登录
     */
    public function login() {
        $flag = false;
        $msg = "操作错误";
        if (IS_POST) {
            $vs = session('verify');
            $v = md5(I('verify'));
            if ($vs != $v) {
                $msg = "请输入正确的验证码！";
            } else {
                $m = M('users');
                $u = I('username');
                $p = md5(trim(I('password')));
                $where = array();
                $where['where']['username'] = $u;
                $user = $m->find($where);
                if ($user == false) {
                    $msg = "用户不存在！";
                } else if ($user['password'] != $p) {
                    $msg = '输入的密码有错！';
                } else {
                    $user['login_ip'] = get_client_ip();
                    $user['login_time'] = date('Y-m-y H:i:s', time());
                    $rs = $m->save($user);
                   // echo $m->getLastSql();die;
                    if ($rs) {
                        $flag = true;
                    } else {
                        $msg = '登录失败！';
                    }
                }
            }
        }
        if ($flag) {
            session('user', $user);  //设置session
            $url = U('Index/index', '', '', true, true);
            $this->redirect($url);
        } else {
            $this->assign("msg", $msg)->display('index');
        }
    }

    public function logout() {
        session_destroy();
        $this->display('index');
    }

}