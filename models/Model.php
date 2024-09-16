<?php

class Model 
{
	protected static $db;

    public static function connect() 
    {
        if (!self::$db) self::$db = DB::getConnection(); 
    }

	public static function findAll() 
    {
        $table = static::getTable();
		$sql = "SELECT * FROM `$table`";
		$stmt = self::$db->query($sql);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}