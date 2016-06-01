<?php
/**
 * Created by PhpStorm.
 * User: captain
 * Date: 16/5/19
 * Time: 上午10:34
 */
class UserController extends Yaf_Controller_Abstract {

    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/demo/index/index/index/name/ 的时候, 你就会发现不同
     */
    public function indexAction($name = "Stranger") {
        //var_dump('this is User modules userController indexAction');
        //return false;
        $this->getView()->assign('title','UserModule UserController IndexAction');
    }

    public function showAction(){
        //$params = $this->getRequest()->getParams();
        //var_dump($params);die();
        //var_dump($_SERVER['REQUEST_URI']);die();
        var_dump('this is User modules UserController showAction');
        return false;
    }

    public function sayAction(){
        if($this->getRequest()->isGet()){
            echo 'this is a get action';
        }else{
            echo 'this is not a get action';
        }
        return false;
    }

    public function runAction(){
        $model = new UserModel();
        $userId = $model->selectUserId();
        var_dump($userId);
        return false;
    }


}