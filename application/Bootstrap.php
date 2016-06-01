<?php
/**
 * @name Bootstrap
 * @author 
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initConfig() {
		//把配置保存起来
		$arrConfig = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $arrConfig);
	}

	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		//注册一个插件
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(Yaf_Dispatcher $dispatcher) {
		//在这里注册自己的路由协议,默认使用简单路由

        //添加自定义的路由
        $router = $dispatcher->getInstance()->getRouter();
        //var_dump(get_class($router));
        //$route = new Yaf_Route_Simple('m','c','a');//路由规则,添加之后，可以通过如下方式访问：http://www.yaf.com/?m=user&c=user&a=show
        //$router->addRoute('simple',$route);//将自定义的路由规则添加到路由中

        $router->addConfig(Yaf_Registry::get('config')->routes);
	}
	
	public function _initView(Yaf_Dispatcher $dispatcher){
		//在这里注册自己的view控制器，例如smarty,firekylin
	}
}
