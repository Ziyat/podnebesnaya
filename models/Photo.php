<?php

/**
* 
*/
class Photo
{
	static public function getData()
	{
		
		$db = Db::getConnection();
		$sql = 'SELECT * FROM photo';
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchAll();
		return $result;
	}
	static public function getPhotoByIdGallery($id)
	{
		
		$db = Db::getConnection();
		$sql = "SELECT * FROM photo WHERE gallery_id = $id";
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchAll();
		return $result;
	}
	static public function getImage($id)
	{
		$noImage = 'no-image.jpg';

		$path = '/upload/images/gallery/photos/';

		$pathToProductImage = $path . $id . '.jpg';

		if(file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage))
		{
			return $pathToProductImage;
		}

		return $path . $noImage;
	}

	static public function deletePhotoById($id)
	{
		$db = Db::getConnection();

		$sql = 'DELETE FROM photo WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	static public function createPhoto($options)
	{
		$db = Db::getConnection();
		$sql = 'INSERT INTO photo (title_ru, title_cn, title_en, gallery_id) VALUES (:title_ru, :title_cn, :title_en, :gallery_id)';
		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);
		$result->bindParam(':gallery_id', $options['gallery_id'], PDO::PARAM_INT);
		if($result->execute())
		{
			return $db->lastInsertId();
		}

		return false;
		
	}

	static public function updatePhotoById($id, $options)
	{
		$db = Db::getConnection();

		$sql = "UPDATE photo SET title_ru = :title_ru, title_cn = :title_cn, title_en = :title_en, gallery_id = :gallery_id WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);
		$result->bindParam(':gallery_id', $options['gallery_id'], PDO::PARAM_INT);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		return $result->execute();
	}
	static public function getPhotoById($id)
	{
		
		$db = Db::getConnection();
		$sql = "SELECT * FROM photo WHERE id = $id";
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetch();
		return $result;
	}
}