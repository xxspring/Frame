<?php 
// 模型类
namespace core\lib;
use \core\lib\conf;

class modelPDO extends \PDO{
	public function __construct(){
		// $dns = 'mysql:host=localhost;dbname=test';
		// $username = 'root';
		// $passwd = 'root';
		$db = conf::all('database');

		try{
			parent::__construct($db['DNS'],$db['USERNAME'],$db['PASSWD']);
		}catch(\PDOexception $e){
			p($e->getMessage());
		}
	}
}
