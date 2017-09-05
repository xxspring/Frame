<?php

namespace core\lib;

class conf{

	static public $conf = array();

	static public function get($name,$file){
		/**
		 * 1 判断配置文件是否存在
		 * 2 判断配置是否存在
		 * 3 缓存配置
		 */
		// p(self::$conf);
		if(isset(self::$conf[$file])){
			return self::$conf[$file][$name];
		}else{
			// p(1);
			$path = FRAME.'/core/config/'.$file.'.php';
			// p($path);
			if(is_file($path)){
				$conf = include $path;
				if(isset($conf[$name])){
					self::$conf[$file] = $conf;
					return $conf[$name];
				}else{
					throw new \Exception('没有此配置项'.$name);
				}
			}else{
				throw new \Exception('找不到配置文件'.$file);
			}
		}
	}

	public function all($file){
		if(isset(self::$conf[$file])){
			return self::$conf[$file];
		}else{
			// p(1);
			$path = FRAME.'/core/config/'.$file.'.php';
			// p($path);
			if(is_file($path)){
				$conf = include $path;
				self::$conf[$file] = $conf;
				return $conf;
			}else{
				throw new \Exception('找不到配置文件'.$file);
			}
		}
	}
}
 