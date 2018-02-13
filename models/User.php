<?php

class User
{

    /**
     * Регистрация пользователя 
     * @param type $name
     * @param type $email
     * @param type $password
     * @return type
     */
    public static function register($name, $email, $phone, $password)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO user (name, email, phone, password) '
                . 'VALUES (:name, :email, :phone, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        if($result->execute())
        {
            $id = $db->lastInsertId();
            $AddAddress = $db->query("INSERT INTO user_address (user_id, street, building,  appt, entrance, intercom, people, landmark) VALUES ($id,  '',  '',  '',  '',  '',  '', '' )");
            require_once (ROOT. '/components/PHPMailer/class.phpmailer.php'); 
            $mess = '
                        <html>
                            <head>
                                <title>Регистрация</title>
                            </head>
                            <body style="font-family: roboto, helvetica; background-color: #f6f6f6; color: #f6f6f6;">
                                <div style="color: #f6f6f6; padding: 10px; min-width: 300px; max-width: 500px; margin: 0 auto; background-image: url('.SITE_URL.'/upload/mailbg.jpg); background-size: cover;">
                                    <div style="color: #f6f6f6; width: 100%; text-align: center;"><img style="min-width: 100px; max-width: 200px;" src="'.SITE_URL.'/template/content/img/logo.png" alt=""></div>
                                    <h2 style="color: #f6f6f6;">Поздравляем!</h2>
                                    <h4>Вы успешно зарегистрированы на сайте ресторана "Поднебесная"!</h4>
                                    <table style="color: #f6f6f6; width: 100%; list-style-type: none; font-size: 18px; padding: 0;">
                                        <tr>
                                            <td style="border-bottom: 1px solid #000000; padding: 5px;">Имя:</td>
                                            <td style="border-bottom: 1px solid #000000; padding: 5px;">'.$name.'</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #000000; padding: 5px;">Email:</td>
                                            <td style="border-bottom: 1px solid #000000; padding: 5px;">'.$email.'</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #000000; padding: 5px;">Пароль:</td>
                                            <td style="border-bottom: 1px solid #000000; padding: 5px;">'.$password.'</td>
                                        </tr>
                                        <tr>
                                            <td style="border-bottom: 1px solid #000000; padding: 5px;">Телефон:</td>
                                            <td style="border-bottom: 1px solid #000000; padding: 5px;">'.$phone.'</td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="padding: 10px; min-width: 300px; max-width: 500px; margin: 0 auto; font-size: 12px; background-color: #cccccc; color: #454545;">
                                    <p>'.ADDRESS.'</p>
                                    <a style="color: #454545;" href="http://podnebesnaya.uz/user/login">Перейти на сайт ресторана "Поднебесная"</a>
                                </div>
                            </body>
                        </html>
            ';
            $mail = new PHPMailer(); 
            $mail->CharSet = 'UTF-8';
            $mail->From = INFO_MAIL;      // от кого 
            $mail->FromName = 'www.podnebesnaya.uz';   // от кого 
            $mail->AddAddress(INFO_MAIL, 'Регистрация'); // кому - адрес, Имя 
            $mail->AddAddress($email, $name); // кому - адрес, Имя 
            $mail->IsHTML(true);        // выставляем формат письма HTML 
            $mail->Subject = "Registraton";  // тема письма
            //$mess = "Вы зарегестрировались на сайте Поднебесная! Имя: $name | email: $email | Phone: $phone | пароль: $password";
            $mail->Body = $mess; 
            return $mail->Send();
        }else
        {
            return false;
        }
    }

    /**
     * Редактирование данных пользователя
     * @param string $name
     * @param string $password
     */
    public static function edit($id, $name, $phone, $password, $address)
    {
        $db = Db::getConnection();
        
        $sql = "UPDATE user 
            SET name = :name, phone = :phone, password = :password
            WHERE id = :id";
        
        $result = $db->prepare($sql);                                  
        $result->bindParam(':id', $id, PDO::PARAM_INT);       
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);   
        $result->bindParam(':password', $password, PDO::PARAM_STR); 
        if ($result->execute())
        {
            $sql2 = "UPDATE user_address SET street = :street, building = :building, appt = :appt, entrance = :entrance, intercom = :intercom, people = :people, landmark = :landmark WHERE user_id = :id";
            $result2 = $db->prepare($sql2);                                  
            $result2->bindParam(':id', $id, PDO::PARAM_INT);       
            $result2->bindParam(':street', $address['street'], PDO::PARAM_STR);
            $result2->bindParam(':building', $address['building'], PDO::PARAM_STR);
            $result2->bindParam(':appt', $address['appt'], PDO::PARAM_STR);
            $result2->bindParam(':entrance', $address['entrance'], PDO::PARAM_STR);
            $result2->bindParam(':intercom', $address['intercom'], PDO::PARAM_STR);
            $result2->bindParam(':people', $address['people'], PDO::PARAM_STR);
            $result2->bindParam(':landmark', $address['landmark'], PDO::PARAM_STR);
            return $result2->execute();
        }
    }

    /**
     * Проверяем существует ли пользователь с заданными $email и $password
     * @param string $email
     * @param string $password
     * @return mixed : ingeger user id or false
     */
    public static function checkUserData($email, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }

        return false;
    }

    /**
     * Запоминаем пользователя
     * @param string $email
     * @param string $password
     */
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /".$_SESSION['lang']."/user/login");
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет имя: не меньше, чем 6 символов
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет email
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * Проверяет email
     */
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    /**
     * Returns user by id
     * @param integer $id
     */
    public static function getUserById($id)
    {
        if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();
        }
    }

     public static function getUserAddressById($id)
     {
         if ($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM user_address WHERE user_id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();
            return $result->fetch();
        }
     }

}
