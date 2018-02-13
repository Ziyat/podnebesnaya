<?php

/**
* Контроллер для вывода Администраторской части
*/
class AdminReviewController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$reviews = Review::getReviewList();
		require_once(ROOT . '/views/admin/review/index.php');
		return true;
	}

	public function actionView($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$review = Review::getReviewById($id);
		require_once(ROOT . '/views/admin/review/view.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$review = Review::getReviewById($id);
		
		if(isset($_POST['submit']))
		{
			$options['name'] = $_POST['name'];
			$options['email'] = $_POST['email'];
			$options['text'] = $_POST['text'];
			$options['user_id'] = $_POST['user_id'];
			$options['date'] = $_POST['date'];
			$options['status'] = $_POST['status'];
			if(Review::updateReviewById($id, $options))
			{
				header("Location: /$lang/admin/review");
			}

			
			
		}
		require_once(ROOT . '/views/admin/review/update.php');
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
			Review::deleteReviewById($id);
			header("Location: /$lang/admin/review");
		}

		require_once(ROOT . '/views/admin/review/delete.php');
		return true;
	}

	public function actionApprove($id)
	{
		$lang = $_SESSION['lang'];
		if(Review::approveReviewById($id))
		{
			header("Location: /$lang/reviews");
		}
		return true;
	}
}