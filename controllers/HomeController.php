<?php

/**
* Контроллер для вывода Главной страницы
*/
class HomeController
{
	public function actionIndex()
	{
		$pattern = '(/[a-zA-Z][a-zA-Z]$|/[a-zA-Z][a-zA-Z]/)';
		if(!empty($_SESSION['lang'])  && preg_match($pattern, $_SERVER['REQUEST_URI']))
		{
			header('Location: /' . $_SESSION['lang']);
		}
		else
		{
			$_SESSION['lang'] = 'ru';
			header('Location: /' . $_SESSION['lang']);
		}
		
		return true;
	}

	public function actionHome($lang)
	{
		$pattern = '(/[a-zA-Z][a-zA-Z]$)';
		if(preg_match($pattern, $_SERVER['REQUEST_URI']))
		{
			$_SESSION['lang'] = $lang;
		}
		
		$content = Home::page($_SESSION['lang']);
		$navRc = Home::navRc($_SESSION['lang']);
		require_once(ROOT.'/views/content/index.php');
		return true;
	}

	public function actionLangSwitch($lang)
	{
		$pattern = '(/[a-zA-Z][a-zA-Z]$|/[a-zA-Z][a-zA-Z]/)';
		$replacement = '/'.$lang.'/';
		$subject = preg_replace($pattern, $replacement, $_SERVER['HTTP_REFERER']);
		$_SESSION['lang'] = $lang;
		header('Location: ' . $subject);
		return true;
	}

	
}