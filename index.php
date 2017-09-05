<?php
// 入口文件
date_default_timezone_set('PRC');
//当前目录
define('FRAME',realpath('./'));
// 核心文件类库
define('CORE',FRAME.'/core');

define('APP',FRAME.'/app');

define('MODULE','app');
// DEBUG 开启
define('DEBUG',TRUE);

require "vendor/autoload.php";

if(DEBUG){
	// $whoops = new \Whoops\Run;
	// $errorTitle = 'FRAME框架出错了。';
	// $option = new \Whoops\Handler\PrettyPageHandler();
	// $option->setPageTitle($errorTitle);
	// // $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	// $whoops->pushHandler($option);
	// $whoops->register();
	ini_set('display_error', 'On');
}else{
	ini_set('display_error', 'Off');
}

// dump($_SERVER);

include CORE.'/common/function.php';//函数库

include CORE.'/frame.php';

spl_autoload_register('\core\frame::load');//自动加载

\core\frame::run();