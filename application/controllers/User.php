<?php
/**
 * Created by PhpStorm.
 * User: captain
 * Date: 16/5/19
 * Time: 上午9:06
 */

class UserController extends Yaf_Controller_Abstract {

    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/demo/index/index/index/name/ 的时候, 你就会发现不同
     */
    public function indexAction($name = "Stranger") {
        var_dump('this is userController');
        return false;
    }

}