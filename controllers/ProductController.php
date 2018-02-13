<?php

/**
* Контроллер для вывода Меню страницы
*/
class ProductController
{
	function stringReplace($string){
		$string = strip_tags($string);
        $string = substr($string, 0, 100);
        $string = rtrim($string, "!,.-");
        $string = substr($string, 0, strrpos($string, ' '));
        return $string."… ";
	}
	public function actionIndex($page = 1)
	{
		
		$lang = $_SESSION['lang'];
		$cuisines = Cuisine::getDataCuisine();
		foreach ($cuisines as $cuisine) {
			$categories[$cuisine['id']] =  Cuisine::getCuisineCategoryById($cuisine['id']);
		}
		$items = Product::getProductsOrderDesc($page);
		$total = Product::getTotalProducts();
		$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
		$n = 2;
		require_once(ROOT.'/views/content/menu/menu.php');
		return true;
	}

	public function actionViewProductsByCategory($id){
		
			
			$lang = $_SESSION['lang'];
			$cuisines = Cuisine::getDataCuisine();
			foreach ($cuisines as $cuisine) {
				$categories[$cuisine['id']] =  Cuisine::getCuisineCategoryById($cuisine['id']);
				foreach ($categories[$cuisine['id']] as $cat) {
				if($cat['id'] == $id)
				{
					$catId = $cat['id'];
					break;
				}
				}
			}

			
			$itemsByCategory = Product::getProductsByCategory($id);
			$n = 2;
		require_once(ROOT.'/views/content/menu/category.php');
		return true;
	}

	public function actionView($id){
		
		$lang = $_SESSION['lang'];
		$cuisines = Cuisine::getDataCuisine();
		foreach ($cuisines as $cuisine) {
				$categories[$cuisine['id']] =  Cuisine::getCuisineCategoryById($cuisine['id']);
			}
		$item = Product::getProductById($id);
		require_once(ROOT.'/views/content/menu/view.php');
		return true;
	}
}