<?php
// namespace Core;

// use PDO;
class DB {
	private static $host = "localhost";
	private static $db_name = "guestbook";
	private static $username = "root";
	private static $password = "";

	public static function getConnection(){
		$host_dbname = "mysql:host=" . self::$host . ";dbname=" . self::$db_name;
		$connect = new PDO($host_dbname, self::$username, self::$password);
		return $connect;
	}
}