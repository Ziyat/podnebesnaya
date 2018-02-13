<?php

/**
* Контроллер для вывода Главной страницы
*/
class ReviewController
{
	public function actionIndex()
	{

        
		$userId = $_SESSION['user'];
		$user = User::getUserById($userId);
		$lang = $_SESSION['lang'];
		$n = 4;
		$name = '';
        $email = '';
        $text = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $text = $_POST['text'];

            $name = htmlspecialchars($name);
			$name = stripcslashes($name);
			$name = trim($name);

            $email = htmlspecialchars($email);
			$email = stripcslashes($email);
			$email = trim($email);

            $text = htmlspecialchars($text);
			$text = stripcslashes($text);
			$text = trim($text);
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = ERROR_NAME;
                                
            }
            
            if (!User::checkEmail($email)) {
                 $errors[] = ERROR_EMAIL;
                
            }
            if (!Review::checkText($text)) {
            	$errors[] = ERROR_TEXT;
            }
            
            if ($errors == false) {
                $reviewId = Review::register($name,$email,$text, $userId);
                if(isset($reviewId))
                {
                    $result = Review::sendMail($name,$email,$text, $reviewId);
                }else
                {
                    $result = 'ОШИБКА!';
                }
                
            }
        }
        $comments = Review::getLastComments();
		require_once(ROOT.'/views/content/review.php');
		return true;
	}
}