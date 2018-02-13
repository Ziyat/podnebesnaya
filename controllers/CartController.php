<?php
require_once (ROOT. '/components/PHPMailer/class.phpmailer.php'); 
/**
* Контроллер для вывода Главной страницы
*/
class CartController
{
	public function actionAdd($id)
	{
		Cart::addProduct($id);

		$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");
		
	}

	public function actionAddAjax($id)
	{
        
		echo Cart::addProduct($id);
		return true;
	}

	public function actionIndex()
	{
		$lang = $_SESSION['lang'];
		$cuisines = Cuisine::getDataCuisine();
		foreach ($cuisines as $cuisine) {
			$categories[$cuisine['id']] =  Cuisine::getCuisineCategoryById($cuisine['id']);
		}
		$productsInCart = false;
		$productsInCart = Cart::getProducts();

		if($productsInCart)
		{
			$productsIds = array_keys($productsInCart);
			$products = Product::getProductsByIds($productsIds);
		}

		$totalPrice = Cart::getTotalPrice($products);

		require_once(ROOT.'/views/content/cart/index.php');
		return true;
	}

	public function actionCheckout()
	{
		$lang = $_SESSION['lang'];
		$cuisines = Cuisine::getDataCuisine();
		foreach ($cuisines as $cuisine) {
			$categories[$cuisine['id']] =  Cuisine::getCuisineCategoryById($cuisine['id']);
		}
        
		$result  = false;

 		if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $comment = $_POST['comment'];
            $address['street'] = $_POST['street'];
            $address['building'] = $_POST['building'];
            $address['appt'] = $_POST['appt'];
            $address['entrance'] = $_POST['entrance'];
            $address['intercom'] = $_POST['intercom'];
            $address['people'] = $_POST['people'];
            $address['landmark'] = $_POST['landmark'];
            $errors = false;
            if (!User::checkPhone($phone)) {
                $errors[] = ERROR_PHONE;
                                
            }

			if (!User::checkName($name)) {
                $errors[] = ERROR_NAME;
                                
            }
            
            if (!User::checkEmail($email)) {
                 $errors[] = ERROR_EMAIL;
                
            }
            if ($errors == false) {
            	$productsInCart = Cart::getProducts();
            	 if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogged();
                }
                $result = Order::save($name, $email, $phone, $comment, $userId, $productsInCart, $address);
                
                if ($result) {
		            Cart::clear();
                }else
                {
                	echo "Не прошло!";
                }
            }
            else
            {
	        	// Форма заполнена корректно? - Нет
	        	// Итоги: общая стоимость, количество товаров
	        	$productsInCart = Cart::getProducts();
	        	$productsIds = array_keys($productsInCart);
	        	$products = Product::getProductsByIds($productsIds);
	        	$totalPrice = Cart::getTotalPrice($products);
	        	$totalQuantity = Cart::countItems();
            }


        }
        else
        {
            // Форма отправлена? - Нет
            // Получием данные из корзины      
            $productsInCart = Cart::getProducts();

            // В корзине есть товары?
            if ($productsInCart == false) {
                // В корзине есть товары? - Нет
                // Отправляем пользователя на главную искать товары
                header("Location: /");
            }
            else
            {
                // В корзине есть товары? - Да
                // Итоги: общая стоимость, количество товаров
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();


                $name = false;
                $phone = false;
                $comment = false;

                // Пользователь авторизирован?
                if (User::isGuest())
                {
                    // Нет
                    // Значения для формы пустые
                }
                else
                {
                    // Да, авторизирован                    
                    // Получаем информацию о пользователе из БД по id
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    $address = User::getUserAddressById($userId);
                    // Подставляем в форму
                    $name = $user['name'];
                    $email = $user['email'];
                    $phone = $user['phone'];
                }
            }
        }

        require_once(ROOT . '/views/content/cart/checkout.php');

        return true;
    }

    public function actionDelete($id)
    {
    	Cart::deleteProduct($id);

    	header('location: /'. $_SESSION['lang'] .'/cart');
    }

        
}