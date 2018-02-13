<?php


class Order
{
    static public function replaceFormatDate ($date)
    {
        $replaceFormatDate = date_create_from_format('Y-m-d H:i:s', $date);
        return date_format($replaceFormatDate, 'H:i | d-m-Y');
    }
	 /**
     * Сохранение заказа 
     * @param type $name
     * @param type $email
     * @param type $password
     * @return type
     */
	public static function save($name, $email, $phone, $comment, $userId, $products, $address)
	{
		$products = json_encode($products);

        $db = Db::getConnection();

        $sql = 'INSERT INTO product_order (name, email, phone, comment, user_id, date, products, status) VALUES (:name, :email, :phone, :comment, :user_id, NOW(), :products, 0)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':comment', $comment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);
        
        if ($result->execute())
        {
            $sql1 = "SELECT id FROM product_order ORDER BY id DESC LIMIT 1";
            $result = $db->prepare($sql1);
            $result->execute();
            $orderId = $result->fetch();
            $productsInOrder = json_decode($products,true);
            $productsIds = array_keys($productsInOrder);
            $products = Product::getProductsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);
            $totalQuantity = Cart::countItems();
            
            $mess = '
                    <html>
                     <head>
                         <title>Новый заказ клиента</title>
                     </head>
                     <body style="font-family: roboto, helvetica; background-color: #f6f6f6; color: #f6f6f6;">
                         <div style="color: #f6f6f6; padding: 10px; min-width: 300px; max-width: 500px; margin: 0 auto; background-image: url('.SITE_URL.'/upload/order_mailbg.jpg); background-size: cover;">
                             <div style="color: #f6f6f6; width: 100%; text-align: center;"><img style="min-width: 100px; max-width: 200px;" src="'.SITE_URL.'/template/content/img/logo.png" alt=""></div>
                             <h2 style="color: #f6f6f6; font-size: 30px;">Новый заказ клиента</h2>
                             <h4>Вы получили заказ от '.$name.'. Ваш заказ составляет:</h4>
                             <h2 style="color: #f6f6f6; font-size: 30px;">Заказ № '. $orderId[0] .' | ('. date("d/m/Y") .')</h2>
                             <table style=" border-collapse:collapse; border-spacing:0;color: #f6f6f6; width: 100%; list-style-type: none; font-size: 18px; border: 1px solid #252525; background-color: rgba(0, 0, 0, 0.7);">
                                 <tbody>
                                     <tr style=" ">
                                         <td style="padding: 5px;border-bottom: 2px solid #252525;border-right: 1px solid #252525;"><strong>Товар</strong></td>
                                         <td style="padding: 5px;border-bottom: 2px solid #252525;border-right: 1px solid #252525;"><strong>Количество</strong></td>
                                         <td style="padding: 5px;border-bottom: 2px solid #252525;"><strong>Цена</strong></td>
                                     </tr>
                                 </tbody>
                                 <tbody>';

                                    foreach ($products as $product) {
                                        $mess .='
                                            <tr>
                                             <td style="padding: 5px;border-bottom: 1px solid #252525;border-right: 1px solid #252525;">'.$product['title'].'</td>
                                             <td style="padding: 5px;border-bottom: 1px solid #252525;border-right: 1px solid #252525;">'.$productsInOrder[$product['id']].'</td>
                                             <td style="padding: 5px;border-bottom: 1px solid #252525;">'.$product['price'] * $productsInOrder[$product['id']].' сум</td>
                                            </tr>';
                                    }

                                 $mess .= '
                                     
                                 </tbody>
                                 <tbody>
                                     <tr>
                                        <td style="padding: 5px;border-top: 3px solid #252525;border-right: 1px solid #252525;" colspan="2">Всего в корзине</td>
                                        <td style="padding: 5px;border-top: 3px solid #252525;">'.$totalPrice.' сум</td>
                                     </tr>
                                     <tr>
                                        <td style="padding: 5px;border-top: 1px solid #252525;border-right: 1px solid #252525;" colspan="2">Доставка</td>
                                        <td style="padding: 5px;border-top: 1px solid #252525;">Бесплатная доставка</td>
                                     </tr>
                                     <tr>
                                        <td style="padding: 5px;border-top: 1px solid #252525;border-right: 1px solid #252525;" colspan="2">Итог по заказу:</td>
                                        <td style="padding: 5px;border-top: 1px solid #252525;">'.$totalPrice.' сум</td>
                                     </tr>
                                 </tbody>
                            </table>
                            <p>Комментарий: '.$comment.'</p>
                            <h3>Информация о покупателе</h3>
                            <hr>
                            <p><strong>Email: </strong>'.$email.'</p>
                            <p><strong>Тел: </strong>'.$phone.'</p>
                            <h3>Адрес:</h3>
                            <hr>
                            <p><strong>Улица: </strong>'.$address['street'].'</p>
                            <p><strong>Дом и корпус: </strong>'.$address['building'].'</p>
                            <p><strong>Квартира: </strong>'.$address['appt'].'</p>
                            <p><strong>Подъезд: </strong>'.$address['entrance'].'</p>
                            <p><strong>Домофон: </strong>'.$address['intercom'].'</p>
                            <p><strong>На сколько персон?: </strong>'.$address['people'].'</p>
                            <p><strong>Ориентир: </strong>'.$address['landmark'].'</p>
                         </div>
                         <div style="padding: 10px; min-width: 300px; max-width: 500px; margin: 0 auto; font-size: 12px; background-color: #cccccc; color: #454545;">
                             <p>'. ADDRESS .'</p>
                             <a style="color: #454545;" href="'.SITE_URL.'/user/login">Перейти на сайт ресторана "Поднебесная"</a>
                         </div>
                     </body>
                 </html>


            ';
                    $mail = new PHPMailer(); 
                    $mail->CharSet = 'UTF-8';
                    $mail->From = INFO_MAIL;      // от кого 
                    $mail->FromName = 'www.podnebesnaya.uz';   // от кого 
                    $mail->AddAddress(INFO_MAIL, 'Новый заказ'); // кому - адрес, Имя 
                    $mail->IsHTML(true);        // выставляем формат письма HTML 
                    $mail->Subject = "Поднебесная | Новый заказ";  // тема письма
                    $mail->Body = $mess; 
                    return $mail->Send();
        }
	}

    static public function getOrderList()
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM product_order ORDER BY date DESC");

        $orderList = array();
        $i = 0;

        while ($row = $result->fetch())
        {
            

            $orderList[$i]['id'] = $row['id'];
            $orderList[$i]['name'] = $row['name'];
            $orderList[$i]['email'] = $row['email'];
            $orderList[$i]['phone'] = $row['phone'];
            $orderList[$i]['comment'] = $row['comment'];
            $orderList[$i]['user_id'] = $row['user_id'];
            $orderList[$i]['date'] = self::replaceFormatDate($row['date']);
            $orderList[$i]['products'] = $row['products'];
            $orderList[$i]['status'] = $row['status'];
            $i++;
        }
        return $orderList;
    }

    static public function getOrderById($id)
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM product_order WHERE id=$id");
        $row = $result->fetch();
        
        $order['id'] = $row['id'];
        $order['name'] = $row['name'];
        $order['email'] = $row['email'];
        $order['phone'] = $row['phone'];
        $order['comment'] = $row['comment'];
        $order['user_id'] = $row['user_id'];
        $order['date'] = $row['date'];
        $order['products'] = $row['products'];
        $order['status'] = $row['status'];
            
        return $order;
    }
    static public function textStatus($status)
    {
        switch ($status)
        {
          case '0':
            return ORDER_NEW;
            break;
          case '1':
            return ORDER_TO_PROCESS;
            break;
          case '2':
            return ORDER_EXECUTED;
            break;
          case '3':
            return ORDER_CANCELED;
            break;      
        } 
    }
    static public function classStatus($status)
    {
        switch ($status)
        {
          case '0':
            return "success";
            break;
          case '1':
            return "warning";
            break;
          case '2':
            return "";
            break;
          case '3':
            return "active";
            break;      
        }
    }

    static public function deleteOrderById($id)
    {
        $db = Db::getConnection();

        $sql = 'DELETE FROM product_order WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    static public function getNewOrderCount()
    {
        $db = Db::getConnection();

        $query = $db->query('SELECT COUNT(status) FROM product_order WHERE status=0');
        $result = $query->fetchColumn();
        if($result == 0)
        {
            return '';
        }
        return  $result;
    }

    static public function updateOrderById($id, $options)
    {
        $db = Db::getConnection();

        $sql = "UPDATE product_order SET name = :name, phone = :phone, email = :email, comment = :comment, date = :date, status = :status WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':phone', $options['phone'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':comment', $options['comment'], PDO::PARAM_STR);
        $result->bindParam(':date', $options['date'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

	
}