<?php

/**
* Контроллер для вывода Администраторской части
*/
class AdminOrderController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$ordersList = Order::getOrderList();
		require_once(ROOT . '/views/admin/order/index.php');
		return true;
	}

	public function actionView($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];

		$order = Order::getOrderById($id);
		$productsQuantity = json_decode($order['products'], true);
		$productsIds = array_keys($productsQuantity);
		$products = Product::getProductsByIds($productsIds);

		require_once(ROOT . '/views/admin/order/view.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$order = Order::getOrderById($id);
		if(isset($_POST['submit']))
		{
			$options['name'] = $_POST['name'];
			$options['phone'] = $_POST['phone'];
			$options['email'] = $_POST['email'];
			$options['comment'] = $_POST['comment'];
			$options['date'] = $_POST['date'];
			$options['status'] = $_POST['status'];

			
			Order::updateOrderById($id, $options);
			header("Location: /$lang/admin/order");
			
		}

		require_once(ROOT . '/views/admin/order/update.php');
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
			Order::deleteOrderById($id);
			header("Location: /$lang/admin/order");
		}

		require_once(ROOT . '/views/admin/order/delete.php');
		return true;
	}

}