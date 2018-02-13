<?php

/**
* Контроллер для вывода Администраторской части
*/
class AdminProductController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$productList = Product::getProductList();
		
		require_once(ROOT . '/views/admin/product/index.php');
		return true;
	}

	public function actionCreate()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$categoriesList = Category::getCategoriesListAdmin();

		if(isset($_POST['submit']))
		{

			$options['title_ru'] = $_POST['title_ru'];
			$options['title_cn'] = $_POST['title_cn'];
			$options['title_en'] = $_POST['title_en'];
			$options['desc_ru'] = $_POST['desc_ru'];
			$options['desc_cn'] = $_POST['desc_cn'];
			$options['desc_en'] = $_POST['desc_en'];
			$options['price'] = $_POST['price'];
			$options['delivery_price'] = $_POST['delivery_price'];
			$options['weight'] = $_POST['weight'];
			$options['length'] = $_POST['length'];
			$options['volume'] = $_POST['volume'];
			$options['category'] = $_POST['category'];
			$options['delivery'] = $_POST['delivery'];
			$options['new'] = $_POST['new'];
			$options['recommended'] = $_POST['recommended'];

			$errors = false;

			if(!isset($options['title_ru']) || empty($options['title_ru']))
			{
				$errors[] = ERROR_TITLE .' <strong>"'. TITLE.'"</strong>';
			}

			if($errors == false)
			{
				$id = Product::createProduct($options);


				if($id)
				{
					if(is_uploaded_file($_FILES['image']['tmp_name']))
					{
						$fileInput = $_FILES['image']['tmp_name'];
						$fileOutput = "$id.jpg";
						$img = ResizeImg::resize($fileInput, $_SERVER['DOCUMENT_ROOT']. "/upload/images/products/". $fileOutput, 750, 470);
						//move_uploaded_file($img, $_SERVER['DOCUMENT_ROOT']. "/upload/images/products/");
					}
				};

				header("Location: /$lang/admin/product");
			}
		}

		require_once(ROOT . '/views/admin/product/create.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$categoriesList = Category::getCategoriesListAdmin();
		$products = Product::getProductById($id);
		
		if(isset($_POST['submit']))
		{
			$options['title_ru'] = $_POST['title_ru'];
			$options['title_cn'] = $_POST['title_cn'];
			$options['title_en'] = $_POST['title_en'];
			$options['desc_ru'] = $_POST['desc_ru'];
			$options['desc_cn'] = $_POST['desc_cn'];
			$options['desc_en'] = $_POST['desc_en'];
			$options['price'] = $_POST['price'];
			$options['delivery_price'] = $_POST['delivery_price'];
			$options['weight'] = $_POST['weight'];
			$options['length'] = $_POST['length'];
			$options['volume'] = $_POST['volume'];
			$options['category'] = $_POST['category'];
			$options['delivery'] = $_POST['delivery'];
			$options['new'] = $_POST['new'];
			$options['recommended'] = $_POST['recommended'];

			
			if(Product::updateProductById($id, $options))
			{

				if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					$fileInput = $_FILES['image']['tmp_name'];
					$fileOutput = "$id.jpg";
					$img = ResizeImg::resize($fileInput, $_SERVER['DOCUMENT_ROOT']. "/upload/images/products/". $fileOutput, 750, 470);
					//move_uploaded_file($img, $_SERVER['DOCUMENT_ROOT']. "/upload/images/products/");
				};
			}

			header("Location: /$lang/admin/product");
			
		}

		require_once(ROOT . '/views/admin/product/update.php');
		return true;
	}

	public function actionDelete($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];

		if(isset($_POST['submit']))
		{
			Product::deleteProductById($id);
			header('Location: /'.$lang.'/admin/product');
		}

		require_once(ROOT . '/views/admin/product/delete.php');
		return true;
	}

}