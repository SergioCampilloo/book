<?php

class Database {
	public static $db;
	public static $con;
	function Database(){
	}

	function connect(){

        	$host = getenv('DB_HOST');
        	$user = getenv('DB_USER');
        	$pass = getenv('DB_PASS');
        	$data = getenv('DB_NAME');
		$con = new mysqli($host, $user, $pass,$data);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
