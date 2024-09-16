<?php

class Post extends Model
{

	public static function getTable()
	{
		return 'posts';
	}

	public static function add($data) 
	{
		$data['date'] = time();
		$table = self::getTable();
		$sql = "INSERT INTO `$table` (`author`, `text`, `date`) 
		VALUES (:author, :text, :date)";
		$stmt = self::$db->prepare($sql);
		return $stmt->execute($data);
	}

}