<?php

class UserController
{

    public function actionRegister()
    {
       
        $lang = $_SESSION['lang'];
        
        $name = '';
        $email = '';
        $phone = '';
        $password = '';
        $rePassword = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $rePassword = $_POST['repassword'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = ERROR_NAME;
                                
            }
            
            if (!User::checkEmail($email)) {
                 $errors[] = ERROR_EMAIL;
                
            }

            if (!User::checkPhone($phone)) {
                $errors[] = ERROR_PHONE;
            }

            if (!User::checkPassword($password)) {
                $errors[] = ERROR_PASSWORD;
                
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = ERROR_EMAIL_EXISTS;
            }
            if ($password != $rePassword) {
                $errors[] = ERROR_REPASSWORD;
            }
            
            if ($errors == false) {
                $result = User::register($name, $email, $phone, $password);
            }


        }

        require_once(ROOT . '/views/content/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        
        $lang = $_SESSION['lang'];
        $email = '';
        $password = '';
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = ERROR_EMAIL;
            }            
            if (!User::checkPassword($password)) {
                $errors[] = ERROR_PASSWORD;
            }
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = ERROR_USER_DATA;
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header("Location: /". $_SESSION['lang'] ."/cabinet/"); 
            }

        }

        require_once(ROOT . '/views/content/user/login.php');

        return true;
    }
    
    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location: /". $_SESSION['lang']);
    }
}
