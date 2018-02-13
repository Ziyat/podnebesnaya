<?php

/**
* 
*/
class Review
{
	static public function checkText($text)
	{
		
		if(strlen($text) >= 2)
		{
			return true;
		}
		
		return $result;
	}

	static public function sendmail($name,$email,$text,$id)
	{
		require_once (ROOT. '/components/PHPMailer/class.phpmailer.php'); 
		 $mess = '
                    <html>
                     <head>
                         <title>Новый заказ клиента</title>
                     </head>
                     <body style="font-family: roboto, helvetica; background-color: #f6f6f6; color: #f6f6f6;">
                         <div style="color: #f6f6f6; padding: 10px; min-width: 300px; max-width: 500px; margin: 0 auto; background-image: url('.SITE_URL.'/upload/order_mailbg.jpg); background-size: cover;">
                             <div style="color: #f6f6f6; width: 100%; text-align: center;"><img style="min-width: 100px; max-width: 200px;" src="'.SITE_URL.'/template/content/img/logo.png" alt=""></div>
                             <h2 style="color: #f6f6f6; font-size: 30px;">Новый отзыв</h2>
                             <h4>Вы получили отзыв от '.$name.'</h4>
                             <hr>
                            <p>Текст: '.$text.'</p>
                            <hr>
                            <p><strong>Имя: </strong>'.$name.'</p>
                            <p><strong>Email: </strong>'.$email.'</p>
                            <hr>
                            <a href="'.SITE_URL.'/ru/admin/review/approve/'.$id.'">Одобрить</a>
                         </div>
                         <div style="padding: 10px; min-width: 300px; max-width: 500px; margin: 0 auto; font-size: 12px; background-color: #cccccc; color: #454545;">
                             <p>'. ADDRESS .'</p>
                             <a style="color: #454545;" href="'.SITE_URL.'/ru/user/login">Перейти на сайт ресторана "Поднебесная"</a>
                         </div>
                     </body>
                 </html>


            ';
        $mail = new PHPMailer(); 
        $mail->CharSet = 'UTF-8';
        $mail->From = INFO_MAIL;      // от кого 
        $mail->FromName = 'www.podnebesnaya.uz';   // от кого 
        $mail->AddAddress(INFO_MAIL, 'Administration'); // кому - адрес, Имя 
        $mail->IsHTML(true);        // выставляем формат письма HTML 
        $mail->Subject = "Новый отзыв";  // тема письма
        //$mess = "Оставили отзыв на сайте Поднебесная, прошу проверить! Имя: $name | email: $email | text: $text \n http://cf64912.tmweb.ru/ru/admin/review";
        $mail->Body =  $mess; 
        return $mail->Send();
	}

	static public function register($name, $email, $text, $userId)
	{
		$db = Db::getConnection();
		$sql = 'INSERT INTO review (name, email, text, date, view, user_id) VALUES (:name, :email, :text, NOW(), :view, :userId)';
		$view = 0;
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        $result->bindParam(':view', $view, PDO::PARAM_INT);
        $result->bindParam(':userId', $userId, PDO::PARAM_STR);
        if($result->execute())
        {
        	return $db->lastInsertId();
        }
        
	}

	static public function getLastComments()
	{
		$db = Db::getConnection();
		$sql = 'SELECT * FROM review WHERE view = 1 ORDER BY date DESC LIMIT 6';
		$result = $db->prepare($sql);
		$result->execute();
		$result= $result->fetchAll();
		return $result;
	}

	static public function getReviewList()
	{

		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM review ORDER BY id DESC');
		$$reviewList = array();
		$i = 0;
		while($row = $result->fetch()){
			
			$reviewList[$i]['id'] = $row['id'];
			$reviewList[$i]['name'] = $row['name'];
			$reviewList[$i]['email'] = $row['email'];
			$reviewList[$i]['text'] = $row['text'];
			$reviewList[$i]['date'] = $row['date'];
			$reviewList[$i]['user_id'] = $row['user_id'];
			$reviewList[$i]['status'] = $row['view'];

			$i++;
		}
		return $reviewList;
	}

	static public function getTextStatus($status)
	{
		if($status)
		{
			return REVIEW_TRUE;
		}

		return REVIEW_FALSE;
	}

	static public function getReviewById($id)
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM review WHERE id=$id");
        $row = $result->fetch();
        
        $review['id'] = $row['id'];
        $review['name'] = $row['name'];
        $review['email'] = $row['email'];
        $review['text'] = $row['text'];
        $review['user_id'] = $row['user_id'];
        $review['date'] = $row['date'];
        $review['status'] = $row['view'];
            
        return $review;
    }

    static public function updateReviewById($id, $options)
	{
		$db = Db::getConnection();

		$sql = "UPDATE review SET name = :name,	email = :email,	text = :text, user_id = :user_id, date = :date,	view = :view WHERE id = :id";
		$result = $db->prepare($sql);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':email', $options['email'], PDO::PARAM_STR);
		$result->bindParam(':text', $options['text'], PDO::PARAM_STR);
		$result->bindParam(':user_id', $options['user_id'], PDO::PARAM_INT);
		$result->bindParam(':date', $options['date'], PDO::PARAM_STR);
		$result->bindParam(':view', $options['status'], PDO::PARAM_INT);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		return $result->execute();
	}

	 static public function deleteReviewById($id)
    {
        $db = Db::getConnection();

        $sql = 'DELETE FROM review WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    static public function approveReviewById($id)
    {
    	$db = Db::getConnection();

		$sql = "UPDATE review SET view = 1 WHERE id = :id";
		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
    }

}