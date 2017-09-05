<?php
namespace app\ctrl;
use \core\frame;
use \core\lib\model;
use \core\lib\conf;

class indexCtrl extends frame {

	public function index(){


		p('启动框架。');
		$tempC = conf::get('CTRL','route');
		$tempA = conf::get('ACTION','route');
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