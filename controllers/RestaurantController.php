<?php

/**
* Контроллер для вывода Главной страницы
*/
class RestaurantController
{
	public function actionIndex()
	{
		$data = Restaurant::getData($_SESSION['lang'],'restaurant');
		echo $data[3];
		return true;
	}
}