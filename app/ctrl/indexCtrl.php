<?php
namespace app\ctrl;
use \core\frame;
use \core\lib\model;

class indexCtrl extends frame {

	public function index(){


		p('启动框架。');
		$tempC = \core\lib\conf::get('CTRL','route');
		$tempA = \core\lib\conf::get('ACTION','route');
		p('Controller is:'.$tempC);
		p('action is:'.$tempA);

		// p('indexCtrl action is ok.');
		// $model = new model();
		// $re = $model->query('select * from c');
		// p($re->fetchAll());	

		// $title = '这是视图文件';
		// $data = 'Hello View';
		// $this->assign('title',$title);
		// $this->assign('data',$data);
		// $this->display('index.html');
	}
	
}