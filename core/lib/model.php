<?php 
// 模型类
namespace core\lib;
use core\lib\conf;

class model extends \Medoo\medoo{

	public function __construct(){
		$db = conf::all('database');
		parent::__construct($db);
	}
}
