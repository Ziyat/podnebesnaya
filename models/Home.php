<?php

/**
* 
*/
class Home
{
	static public function nav($lang)
	{
		$db = Db::getConnection();
		$sql = 'SELECT id, name_'. $_SESSION['lang'] .', prefix FROM link';
		$result = $db->prepare($sql);
		$result->execute();
		$nav = $result->fetchAll();
		return $nav;
	}

	static public function page($lang)
	{
		$db = Db::getConnection();
		$sql = 'SELECT meta_k_'. $lang .', meta_d_'. $lang .', title_'. $lang .', content_'. $lang .' FROM page';
		$result = $db->prepare($sql);
		$result->execute();
		$content = $result->fetch();
		return $content;
	}
	static public function navRc()
	{
		$db = Db::getConnection();
		$sql = 'SELECT name_'. $_SESSION['lang'] .', prefix FROM link WHERE prefix="#"';
		$result = $db->prepare($sql);
		$result->execute();
		$nav = $result->fetchAll();
		return $nav;
	}
	static public function getPage($lang, $page)
	{
		
		$db = Db::getConnection();
		$sql = 'SELECT meta_k_'. $lang .', meta_d_'. $lang .', title_'. $lang .', content_'. $lang .' FROM page WHERE title_en ="'. $page .'"';
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetch();
		return $result;
	}
}