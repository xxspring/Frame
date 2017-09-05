<?php 
// 路由类，解析URL
namespace core\lib; 

class route{

	public $ctrl;
	public $action;

	public function __construct(){
		// p('route ok.');
		// xxx.com/index.php/index/index
		/**
		 *1 隐藏index.php
		 *2 获取url 参数部分
		 *3 返回对应的控制器和方法
		 */
		// p($_SERVER);exit;
		if(isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI']!='/Frame/'){
			// /index/index
			$path = $_SERVER['REQUEST_URI'];
			// p($path);exit;
			// $patharr = explode('/',trim($path,'/'.FRAME));
			$patharr = explode('/',trim($path,'/Frame'));
			// p($patharr);exit;
			if(isset($patharr[0])){
				$this->ctrl = $patharr[0];
			}
			unset($patharr[0]);
			if(isset($patharr[1])){
				$this->action = $patharr[1];
				unset($patharr[1]);
			}else{
				$this->action = \core\lib\conf::get('ACTION','route');
			}
			// url多余部分转换为 GET
			// id/1/name/2/test/3
			// p($patharr);exit;
			$count = count($patharr) + 2;
			$i = 2;
			while($i < $count){
				if(isset($patharr[$i + 1])){
					$_GET[$patharr[$i]] = $patharr[$i+1];
				}
				$i += 2;
			}
			// p($_GET);exit;

		}else{
			$this->ctrl = \core\lib\conf::get('CTRL','route');
			$this->action = \core\lib\conf::get('ACTION','route');
		}
	}
}