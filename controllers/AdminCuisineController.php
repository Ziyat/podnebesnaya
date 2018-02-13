<?php

/**
* Контроллер для вывода Администраторской части
*/
class AdminCuisineController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$cuisines = Cuisine::getDataCuisine();
		require_once(ROOT . '/views/admin/cuisine/index.php');
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

			$errors = false;

			if(!isset($options['title_ru']) || empty($options['title_ru']))
			{
				$errors[] = ERROR_TITLE .' <strong>"'. TITLE.'"</strong>';
			}

			if($errors == false)
			{
				Cuisine::createCuisine($options);

				header("Location: /$lang/admin/cuisine");
			}
		}

		require_once(ROOT . '/views/admin/cuisine/create.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$cuisine = Cuisine::getCuisineById($id);
		if(isset($_POST['submit']))
		{
			$options['title_ru'] = $_POST['title_ru'];
			$options['title_cn'] = $_POST['title_cn'];
			$options['title_en'] = $_POST['title_en'];

			
			Cuisine::updateCuisineById($id, $options);
			header("Location: /$lang/admin/cuisine");
			
		}

		require_once(ROOT . '/views/admin/cuisine/update.php');
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
			Cuisine::deleteCuisineById($id);
			header("Location: /$lang/admin/cuisine");
		}

		require_once(ROOT . '/views/admin/cuisine/delete.php');
		return true;
	}

}