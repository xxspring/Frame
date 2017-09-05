<?php
namespace app\ctrl;
use core\lib\model;

class showCtrl extends \core\frame{

	public function index(){
		$data = 'Hello Index twig.';
		$this->assign('data',$data);
		$this->display('index.html');
	}

	public function test(){
		$data = 'Hello Test twig.';
		$this->assign('data',$data);
		$this->display('test.html');
	}
}