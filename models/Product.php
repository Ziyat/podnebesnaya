<?php

/**
* 
*/
class Product
{
	const SHOW_BY_DEFAULT = 6;
	
	static public function getCategoryById($id)
	{
		
		$db = Db::getConnection();
		$sql = 'SELECT * FROM category WHERE id = '.$id.'';
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetch();
		return $result;
	}


	static public function getProductsByCategory($id)
	{
		$db = Db::getConnection();
		$lang = $_SESSION['lang'];
		$sql = "SELECT id, title_{$lang}, desc_{$lang}, price, delivery_price, weight, delivery FROM product WHERE category_id = $id";
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchAll();
		return $result;
	}
	static public function getProductsOrderDesc($page = 1)
	{
		$page = intval($page);
		$offset = ($page - 1) * self::SHOW_BY_DEFAULT;
		$db = Db::getConnection();
		$sql = 'SELECT * FROM product ORDER BY id DESC LIMIT '. self::SHOW_BY_DEFAULT .' OFFSET '. $offset;
		$result = $db->prepare($sql);
		$result->execute();
		$result = $result->fetchAll();
		return $result;
	}

	static public function getTotalProducts()
	{
		$db = Db::getConnection();
		$sql = 'SELECT COUNT(id) AS count FROM product';
		$result = $db->prepare($sql);
		$result->execute();
		$result = $result->fetch();
		return $result['count'];
	}

	static public function getProductById($id)
	{
		
		$db = Db::getConnection();
		$sql = 'SELECT * FROM product WHERE id='.$id;
		$result = $db->prepare($sql);
		$result->execute();
		$result = $result->fetch();
		return $result;
	}

	static public function getProductsByIds($idsArray)
	{
		$products = array();
		$db = Db::getConnection();
		$idsString = implode(',', $idsArray);
		$sql = "SELECT * FROM product WHERE delivery='1' AND id IN ($idsString)";
		$result = $db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$i = 0;
		while($row = $result->fetch()){
			$products[$i]['id'] = $row['id'];
			$products[$i]['title'] = $row['title_'.$_SESSION['lang']];
			$products[$i]['price'] = $row['delivery_price'];
			$products[$i]['img'] = $row['img'];
			$i++;
		}
		return $products;
	}
	static public function getProductList()
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM product ORDER BY id DESC');
		$productsList = array();
		$i = 0;
		while($row = $result->fetch()){
			
			$cat = self::getCategoryById($row['category_id']);
			$cuisine = Cuisine::getCuisineById($cat['cuisine_id']);
			$productsList[$i]['id'] = $row['id'];
			$productsList[$i]['title'] = $row['title_'.$_SESSION['lang']];
			$productsList[$i]['price'] = $row['price'];
			$productsList[$i]['delivery_price'] = $row['delivery_price'];
			$productsList[$i]['category_id'] = $row['category_id'];
			$productsList[$i]['category'] = $cat['title_'.$_SESSION['lang']] .' ('.$cuisine['title_'.$_SESSION['lang']].')';
			$productsList[$i]['delivery'] = $row['delivery'];
			$productsList[$i]['new'] = $row['new'];
			$productsList[$i]['rec'] = $row['recommended'];

			$i++;
		}
		return $productsList;
	}

	static public function deleteProductById($id)
	{
		$db = Db::getConnection();

		$sql = 'DELETE FROM product WHERE id = :id';
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	static public function createProduct($options)
	{
		$db = Db::getConnection();
		$sql = 'INSERT INTO product '
			  .'(title_ru, title_cn, title_en, desc_ru, desc_cn, desc_en, price, delivery_price, '
			  .'weight, length, volume, category_id, delivery, new, recommended) '
			  .'VALUES '
			  .'(:title_ru, :title_cn, :title_en, :desc_ru, :desc_cn, :desc_en, :price, :delivery_price, '
			  .':weight, :length, :volume, :category_id, :delivery, :new, :recommended)';
		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);
		$result->bindParam(':desc_ru', $options['desc_ru'], PDO::PARAM_STR);
		$result->bindParam(':desc_cn', $options['desc_cn'], PDO::PARAM_STR);
		$result->bindParam(':desc_en', $options['desc_en'], PDO::PARAM_STR);
		$result->bindParam(':price', $options['price'], PDO::PARAM_INT);
		$result->bindParam(':delivery_price', $options['delivery_price'], PDO::PARAM_INT);
		$result->bindParam(':weight', $options['weight'], PDO::PARAM_INT);
		$result->bindParam(':length', $options['length'], PDO::PARAM_INT);
		$result->bindParam(':volume', $options['volume'], PDO::PARAM_INT);
		$result->bindParam(':category_id', $options['category'], PDO::PARAM_INT);
		$result->bindParam(':delivery', $options['delivery'], PDO::PARAM_INT);
		$result->bindParam(':new', $options['new'], PDO::PARAM_INT);
		$result->bindParam(':recommended', $options['recommended'], PDO::PARAM_INT);

		if($result->execute())
		{
			return $db->lastInsertId();
		}

		return false;
	}

	static public function updateProductById($id, $options)
	{
		$db = Db::getConnection();

		$sql = "UPDATE product SET
		title_ru = :title_ru,
		title_cn = :title_cn,
		title_en = :title_en,
		desc_ru = :desc_ru,
		desc_cn = :desc_cn,
		desc_en = :desc_en,
		price = :price,
		delivery_price = :delivery_price,
		weight = :weight,
		length = :length,
		volume = :volume,
		category_id = :category_id,
		delivery = :delivery,
		new = :new,
		recommended = :recommended
		WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':title_ru', $options['title_ru'], PDO::PARAM_STR);
		$result->bindParam(':title_cn', $options['title_cn'], PDO::PARAM_STR);
		$result->bindParam(':title_en', $options['title_en'], PDO::PARAM_STR);
		$result->bindParam(':desc_ru', $options['desc_ru'], PDO::PARAM_STR);
		$result->bindParam(':desc_cn', $options['desc_cn'], PDO::PARAM_STR);
		$result->bindParam(':desc_en', $options['desc_en'], PDO::PARAM_STR);
		$result->bindParam(':price', $options['price'], PDO::PARAM_INT);
		$result->bindParam(':delivery_price', $options['delivery_price'], PDO::PARAM_INT);
		$result->bindParam(':weight', $options['weight'], PDO::PARAM_INT);
		$result->bindParam(':length', $options['length'], PDO::PARAM_INT);
		$result->bindParam(':volume', $options['volume'], PDO::PARAM_INT);
		$result->bindParam(':category_id', $options['category'], PDO::PARAM_INT);
		$result->bindParam(':delivery', $options['delivery'], PDO::PARAM_INT);
		$result->bindParam(':new', $options['new'], PDO::PARAM_INT);
		$result->bindParam(':recommended', $options['recommended'], PDO::PARAM_INT);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		return $result->execute();
	}

	static public function getImage($id)
	{
		$noImage = 'no-image.jpg';

		$path = '/upload/images/products/';

		$pathToProductImage = $path . $id . '.jpg';

		if(file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage))
		{
			return $pathToProductImage;
		}

		return $path . $noImage;
	}
}