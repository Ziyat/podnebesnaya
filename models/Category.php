<?php

/**
* 
*/
class Category
{       /**
        * Возвращает лист с категориями
        * @return categoriesList
        */
	static public function getCategoriesListAdmin()
	{
		$lang = $_SESSION['lang'];
		$db = Db::getConnection();
		$result = $db->query("SELECT title_$lang, id, desc_$lang, cuisine_id, img FROM category");

		$categoryList = array();
		$i = 0;

		while ($row = $result->fetch())
		{

			$cuisine = Cuisine::getCuisineById($row['cuisine_id']);
			$categoryList[$i]['id'] = $row['id'];
			$categoryList[$i]['title'] = $row['title_'.$lang];
			$categoryList[$i]['desc'] = $row['desc_'.$lang];
			$categoryList[$i]['cuisine'] = $cuisine['title_'.$lang];
			$categoryList[$i]['img'] = $row['img'];
			$i++;
		}
		return $categoryList;
	}

	static public function deleteCategoryById($id)
	{
		$db = Db::getConnection();

		$sql = 'DELETE FROM category WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	static public function createCategory($options)
	{
		$db = Db::getConnection();
		$sql = 'INSERT INTO category '
			  .'(title_ru, title_cn, title_en, desc_ru, desc_cn, desc_en,cuisine_id)'
			  .' VALUES '
			  .'(:title_ru, :title_cn, :title_en, :desc_ru, :desc_cn, :desc_en, :cuisine_id)';
		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);
		$result->bindParam(':desc_ru', $options['desc_ru'], PDO::PARAM_STR);
		$result->bindParam(':desc_cn', $options['desc_cn'], PDO::PARAM_STR);
		$result->bindParam(':desc_en', $options['desc_en'], PDO::PARAM_STR);
		$result->bindParam(':cuisine_id', $options['cuisine'], PDO::PARAM_INT);

		if($result->execute())
		{
			return $db->lastInsertId();
		}

		return false;
	}

	static public function updateCategoryById($id, $options)
	{
		$db = Db::getConnection();

		$sql = "UPDATE category SET
		title_ru = :title_ru,
		title_cn = :title_cn,
		title_en = :title_en,
		desc_ru = :desc_ru,
		desc_cn = :desc_cn,
		desc_en = :desc_en,
		cuisine_id = :cuisine_id
		WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);
		$result->bindParam(':desc_ru', $options['desc_ru'], PDO::PARAM_STR);
		$result->bindParam(':desc_cn', $options['desc_cn'], PDO::PARAM_STR);
		$result->bindParam(':desc_en', $options['desc_en'], PDO::PARAM_STR);
		$result->bindParam(':cuisine_id', $options['cuisine'], PDO::PARAM_INT);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		return $result->execute();
	}

	static public function getImage($id)
	{
		$noImage = 'no-image.jpg';

		$path = '/upload/images/category/';

		$pathToProductImage = $path . $id . '.jpg';

		if(file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage))
		{
			return $pathToProductImage;
		}

		return $path . $noImage;
	}
}