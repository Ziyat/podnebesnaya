<?php

/**
* Контроллер для вывода Интерьер страницы
*/
class GalleryController
{
	public function actionIndex()
	{
		$lang = $_SESSION['lang'];
		$galleries = Gallery::getData($lang);
		$n = 3;
		require_once(ROOT.'/views/content/gallery/index.php');
		return true;
	}

	public function actionView($id = 1)
	{
		$nav = Home::nav($_SESSION['lang']);
		$lang = $_SESSION['lang'];
		$photos = Photo::getPhotoByIdGallery($id);
		require_once(ROOT.'/views/content/gallery/view.php');
		return true;
	}
}