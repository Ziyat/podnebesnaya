<?php
$patternLang = '([a-zA-Z][a-zA-Z])';
$patternId = '([0-9]+)';
	// Маршруты ЧПУ
	return array(
		'switch/'.$patternLang => 'home/langSwitch/$1',
		
		//Регистрация и Авторизация
		$patternLang.'/user/register'  => 'user/register',
		$patternLang.'/user/login'  => 'user/login',
		$patternLang.'/user/logout'  => 'user/logout',
		// 'user/restore'  => 'user/restore',
		
		
		//Управление товарами
		$patternLang.'/admin/product/create' => 'adminProduct/create',
		$patternLang.'/admin/product/update/'.$patternId => 'adminProduct/update/$2',
		$patternLang.'/admin/product/delete/'.$patternId => 'adminProduct/delete/$2',
		$patternLang.'/admin/product' => 'adminProduct/index',
		
		//Управление категориями
		$patternLang.'/admin/category/create' => 'adminCategory/create',
		$patternLang.'/admin/category/update/'.$patternId => 'adminCategory/update/$2',
		$patternLang.'/admin/category/delete/'.$patternId => 'adminCategory/delete/$2',
		$patternLang.'/admin/category' => 'adminCategory/index',

		//Управление кухнями
		$patternLang.'/admin/cuisine/create' => 'adminCuisine/create',
		$patternLang.'/admin/cuisine/update/'.$patternId => 'adminCuisine/update/$2',
		$patternLang.'/admin/cuisine/delete/'.$patternId => 'adminCuisine/delete/$2',
		$patternLang.'/admin/cuisine' => 'adminCuisine/index',

		//Управление Заказами
		$patternLang.'/admin/order/view/'.$patternId => 'adminOrder/view/$2',
		$patternLang.'/admin/order/update/'.$patternId => 'adminOrder/update/$2',
		$patternLang.'/admin/order/delete/'.$patternId => 'adminOrder/delete/$2',
		$patternLang.'/admin/order' => 'adminOrder/index',
		//Управление Отзывами
		$patternLang.'/admin/review/approve/'.$patternId => 'adminReview/approve/$2',
		$patternLang.'/admin/review/view/'.$patternId => 'adminReview/view/$2',
		$patternLang.'/admin/review/update/'.$patternId => 'adminReview/update/$2',
		$patternLang.'/admin/review/delete/'.$patternId => 'adminReview/delete/$2',
		$patternLang.'/admin/review' => 'adminReview/index',

		//Управление Галереи
		$patternLang.'/admin/gallery/create' => 'adminGallery/create',
		$patternLang.'/admin/gallery/update/'.$patternId => 'adminGallery/update/$2',
		$patternLang.'/admin/gallery/delete/'.$patternId => 'adminGallery/delete/$2',
		$patternLang.'/admin/gallery' => 'adminGallery/index',

		//Управление Фотографиями
		$patternLang.'/admin/photo/create' => 'adminPhoto/create',
		$patternLang.'/admin/photo/update/'.$patternId => 'adminPhoto/update/$2',
		$patternLang.'/admin/photo/delete/'.$patternId => 'adminPhoto/delete/$2',
		$patternLang.'/admin/photo' => 'adminPhoto/index',

		//Административная часть
		$patternLang.'/admin'  => 'admin/index',
		
		//Кабинет
		$patternLang.'/cabinet/edit' => 'cabinet/edit',
		$patternLang.'/cabinet' => 'cabinet/index',

		//отзывы
		$patternLang.'/reviews' => 'review/index',

		//Интерьер
		$patternLang.'/gallery/view/'.$patternId => 'gallery/view/$2',
		$patternLang.'/gallery' => 'gallery/index',

		//корзина
		$patternLang.'/cart/delete/'.$patternId => 'cart/delete/$2',
		$patternLang.'/cart/add/'.$patternId => 'cart/add/$2',
		$patternLang.'/cart/addAjax/'.$patternId => 'cart/addAjax/$2',
		$patternLang.'/cart/checkout' => 'cart/checkout',
		$patternLang.'/cart' => 'cart/index',
		
		//Меню и Доставка
		$patternLang.'/menu/product/'.$patternId => 'product/view/$2',
		$patternLang.'/menu/category/'.$patternId => 'product/viewProductsByCategory/$2',
		$patternLang.'/menu/page-'.$patternId => 'product/index/$2',
		$patternLang.'/menu' => 'product/index',
		
		//Контент
		
		$patternLang.'/restaurant' => 'restaurant/index',
		$patternLang.'/contacts' => 'contacts/index',
		$patternLang.'' => 'home/home/$1',
		'' => 'home/index'
		);