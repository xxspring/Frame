<?php
namespace app\model;
use core\lib\model;

class cModel extends model{

	public $table = 'c';

	public function lists(){
		$re = $this->select($this->table,'*');
		return $re;
	}

	public function getOne($id){
		$re = $this->get($this->table,'*',array(
				'id'=>$id
			));
		return $re;
	}

	public function setOne($id,$data){
		$re = $this->update($this->table,$data,array(
				'id'=>$id
			));
		return $re;
	}

	public function delOne($id){
		return $this->delete($this->table,array(
				'id'=>$id
			));
	}
}