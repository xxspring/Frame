<?php
//  基础类
namespace core;

class frame{
	public static $classMap = array();
	public $assign;
	// 启动框架方法
	public static function run(){
		// p('ok');
		\core\lib\log::init();
		$route = new \core\lib\route();//路由类
		// p($route); exit;
		$ctrlClass = $route->ctrl;
		$action = $route->action; 
		$ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';// Ctrl
		p('file is: '.$ctrlFile);
		$ctrlActionFile = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl'; //拼接命名空间
		p('namespace is: '.$ctrlActionFile);
		if(is_file($ctrlFile)){
			require_once $ctrlFile;
			$cc = new $ctrlActionFile();		// 加载控制器
			$cc->$action();
			\core\lib\log::log('Controller:'.$ctrlClass.'  '.'Action:'.$action);
		}else{
			throw new \Exception('找不到控制器');
		}

	}

	static public function load($className){
		// new \core\route();
		// $class = '\core\route';
		// FRAME.'\core\route';
		if(isset($classMap[$className])){
			return true;
		}else{
			$className = str_replace('\\','/',$className);
			$file = FRAME.'/'.$className.'.php';
			if(is_file($file)){
				require_once $file;
				self::$classMap[$className] = $className;
			}else{
				return false;
			}
		}
	}

	public function assign($name,$value){
		$this->assign[$name] = $value;
	}
	
	/*
	public function assignArray($data,$default = NULL){
		if(is_array($data)){
			foreach($data as $key=>$value){
				$this->assign[$key] = $value;
			}
		}else{
			return $default;	
		}
	}
	*/

	public function display($file){
		$path = APP.'/views/'.$file;
		if(is_file($path)){
			// extract($this->assign);
			//include $file;
			$loader = new \Twig_Loader_Filesystem(APP.'/views/');
			$twig = new \Twig_Environment($loader, array(
			    'cache' => FRAME.'/cache/twig',
			    'debug' => DEBUG
			));
			$template = $twig->load($file);
			$template->display($this->assign?$this->assign:array());
		}
	}
}




















































