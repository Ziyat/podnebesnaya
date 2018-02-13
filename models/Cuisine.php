<?php

/**
* 
*/
class Cuisine
{
	static public function getDataCuisine()
	{
		
		$db = Db::getConnection();
		$sql = 'SELECT id, title_'.$_SESSION['lang'].' FROM cuisine';
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchAll();
		return $result;
	}
	static public function getCuisineById($id)
	{
		
		$db = Db::getConnection();
		$sql = "SELECT * FROM cuisine WHERE id = $id";
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetch();
		return $result;
	}
	static public function getCuisineCategoryById($id)
	{
		
		$db = Db::getConnection();
		$sql = 'SELECT id, title_'.$_SESSION['lang'].', desc_'.$_SESSION['lang'].', img FROM category WHERE cuisine_id = '.$id.'';
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchAll();
		return $result;
	}

	static public function deleteCuisineById($id)
	{
		$db = Db::getConnection();

		$sql = 'DELETE FROM cuisine WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	static public function createCuisine($options)
	{
		$db = Db::getConnection();
		$sql = 'INSERT INTO cuisine (title_ru, title_cn, title_en) VALUES (:title_ru, :title_cn, :title_en)';
		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);

		return $result->execute();
		
	}

	static public function updateCuisineById($id, $options)
	{
		$db = Db::getConnection();

		$sql = "UPDATE cuisine SET title_ru = :title_ru, title_cn = :title_cn, title_en = :title_en WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		return $result->execute();
	}
}