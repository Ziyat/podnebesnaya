<?php

/**
* 
*/
class Gallery
{
	static public function getData($lang)
	{
		
		$db = Db::getConnection();
		$sql = "SELECT * FROM gallery";
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchAll();
		return $result;
	}
	static public function getPhotoByIdGallery($id, $lang)
	{
		
		$db = Db::getConnection();
		$sql = "SELECT id, title_$lang, link FROM photo WHERE gallery_id = $id";
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchAll();
		return $result;
	}
	static public function getImage($id)
	{
		$noImage = 'no-image.jpg';

		$path = '/upload/images/gallery/cat/';

		$pathToProductImage = $path . $id . '.jpg';

		if(file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage))
		{
			return $pathToProductImage;
		}

		return $path . $noImage;
	}

	static public function deleteGalleryById($id)
	{
		$db = Db::getConnection();

		$sql = 'DELETE FROM gallery WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	static public function createGallery($options)
	{
		$db = Db::getConnection();
		$sql = 'INSERT INTO gallery (title_ru, title_cn, title_en, date) VALUES (:title_ru, :title_cn, :title_en, NOW())';
		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);

		if($result->execute())
		{
			return $db->lastInsertId();
		}

		return false;
		
	}

	static public function updateGalleryById($id, $options)
	{
		$db = Db::getConnection();

		$sql = "UPDATE gallery SET title_ru = :title_ru, title_cn = :title_cn, title_en = :title_en WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		return $result->execute();
	}
	static public function getGalleryById($id)
	{
		
		$db = Db::getConnection();
		$sql = "SELECT * FROM gallery WHERE id = $id";
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetch();
		return $result;
	}
	static public function getGalleryTitleById($id)
	{
		$lang = $_SESSION['lang'];
		$db = Db::getConnection();
		$sql = "SELECT title_$lang FROM gallery WHERE id = $id";
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchColumn();
		return $result;
	}
}