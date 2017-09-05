<?php

namespace app\ctrl;
use core\lib\model;

class testCtrl extends \core\frame{

	public function index(){
		p('I\'m test Controller test Action.');
	}

	public function test(){
		// $model = new model();
		// p($model);
		// $data = $model->select('c','*','');
		// p($data);

		// $data = array(
		// 		'name'=>'chinavaln',
		// 		'sort'=>1
		// 	);
		// $re = $model->insert('c',$data);
		// p($re);

		$model = new \app\model\cModel;
		// select
		// $re = $model->lists();
		// p($re);

		// insert
		// $one = $model->getOne(2);
		// p($one);

		// update
		// $data = array(
		// 		'name'=>'ccc',
		// 		'sort'=>10
		// 	);
		// $re = $model->setOne(0,$data);
		// p($re);

		// delete
		$re = $model->delOne('\'1=1');
		dump($re);
	}

	public function show(){
		$data = 'Hello twig.';
		$this->assign('data',$data);
		$this->display('index.html');
	}
}