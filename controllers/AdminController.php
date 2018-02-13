<?php

/**
* Контроллер для вывода Администраторской части
*/
class AdminController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		require_once(ROOT . '/views/admin/index.php');
		return true;
	}
}