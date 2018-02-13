<?php

/**
* Контроллер для вывода Администраторской части
*/
class AdminPhotoController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$photos = Photo::getData($lang);
		require_once(ROOT . '/views/admin/photo/index.php');
		return true;
	}

	public function actionCreate()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$galleries = Gallery::getData($lang);
		if(isset($_POST['submit']))
		{

			$options['title_ru'] = $_POST['title_ru'];
			$options['title_cn'] = $_POST['title_cn'];
			$options['title_en'] = $_POST['title_en'];
			$options['gallery_id'] = $_POST['gallery_id'];

			$errors = false;

			if(!isset($options['title_ru']) || empty($options['title_ru']))
			{
				$errors[] = ERROR_TITLE .' <strong>"'. TITLE.'"</strong>';
			}

			if($errors == false)
			{
				$id = Photo::createPhoto($options);


				if($id)
				{
					if(is_uploaded_file($_FILES['image']['tmp_name']))
					{
						$fileInput = $_FILES['image']['tmp_name'];
						$fileOutput = "$id.jpg";
						$img = ResizeImg::resize($fileInput, $_SERVER['DOCUMENT_ROOT']. "/upload/images/gallery/photos/". $fileOutput, 100,100, $percent = true);
					}
				};

				header("Location: /$lang/admin/photo");
			}
		}

		require_once(ROOT . '/views/admin/photo/create.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$photo = Photo::getPhotoById($id);
		$galleries = Gallery::getData($lang);
		if(isset($_POST['submit']))
		{
			$options['title_ru'] = $_POST['title_ru'];
			$options['title_cn'] = $_POST['title_cn'];
			$options['title_en'] = $_POST['title_en'];
			$options['gallery_id'] = $_POST['gallery_id'];

			
			if(Photo::updatePhotoById($id, $options))
			{
				if(is_uploaded_file($_FILES['image']['tmp_name']))
				{
					$fileInput = $_FILES['image']['tmp_name'];
					$fileOutput = "$id.jpg";
					$img = ResizeImg::resize($fileInput, $_SERVER['DOCUMENT_ROOT']. "/upload/images/gallery/photos/". $fileOutput, 100,100, $percent = true);
				};
			}
			header("Location: /$lang/admin/photo");
			
		}

		require_once(ROOT . '/views/admin/photo/update.php');
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
			Photo::deletePhotoById($id);
			header("Location: /$lang/admin/photo");
		}

		require_once(ROOT . '/views/admin/photo/delete.php');
		return true;
	}

}