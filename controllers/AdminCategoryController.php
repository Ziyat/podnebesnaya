<?php

/**
* Контроллер для вывода Администраторской части
*/
class AdminCategoryController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$categoryList = Category::getCategoriesListAdmin();
		$cuisines = Cuisine::getDataCuisine();
		require_once(ROOT . '/views/admin/category/index.php');
		return true;
	}

	public function actionCreate()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$cuisines = Cuisine::getDataCuisine();

		if(isset($_POST['submit']))
		{

			$options['title_ru'] = $_POST['title_ru'];
			$options['title_cn'] = $_POST['title_cn'];
			$options['title_en'] = $_POST['title_en'];
			$options['desc_ru'] = $_POST['desc_ru'];
			$options['desc_cn'] = $_POST['desc_cn'];
			$options['desc_en'] = $_POST['desc_en'];
			$options['cuisine'] = $_POST['cuisine'];

			$errors = false;

			if(!isset($options['title_ru']) || empty($options['title_ru']))
			{
				$errors[] = ERROR_TITLE .' <strong>"'. TITLE.'"</strong>';
			}

			if($errors == false)
			{
				$id = Category::createCategory($options);


				if($id)
				{
					if(is_uploaded_file($_FILES['image']['tmp_name']))
					{
						$fileInput = $_FILES['image']['tmp_name'];
						$fileOutput = "$id.jpg";
						$img = ResizeImg::resize($fileInput, $_SERVER['DOCUMENT_ROOT']. "/upload/images/category/". $fileOutput, 750, 412);
						//move_uploaded_file($img, $_SERVER['DOCUMENT_ROOT']. "/upload/images/products/");
					}
				};

				header("Location: /$lang/admin/category");
			}
		}

		require_once(ROOT . '/views/admin/category/create.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$category = Product::getCategoryById($id);
		$cuisines = Cuisine::getDataCuisine();
		if(isset($_POST['submit']))
		{
			$options['title_ru'] = $_POST['title_ru'];
			$options['title_cn'] = $_POST['title_cn'];
			$options['title_en'] = $_POST['title_en'];
			$options['desc_ru'] = $_POST['desc_ru'];
			$options['desc_cn'] = $_POST['desc_cn'];
			$options['desc_en'] = $_POST['desc_en'];
			$options['cuisine'] = $_POST['cuisine'];

			
			if(Category::updateCategoryById($id, $options))
			{

				if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					$fileInput = $_FILES['image']['tmp_name'];
					$fileOutput = "$id.jpg";
					$img = ResizeImg::resize($fileInput, $_SERVER['DOCUMENT_ROOT']. "/upload/images/category/". $fileOutput, 750, 412);
					//move_uploaded_file($img, $_SERVER['DOCUMENT_ROOT']. "/upload/images/products/");
				};
			}

			header("Location: /$lang/admin/category");
			
		}

		require_once(ROOT . '/views/admin/category/update.php');
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
			Category::deleteCategoryById($id);
			header("Location: /$lang/admin/category");
		}

		require_once(ROOT . '/views/admin/category/delete.php');
		return true;
	}

}