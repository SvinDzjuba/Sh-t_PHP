<?php
class Controller
{
    public static function Start()
    {
        include_once 'view/main.php';
    }
    public static function Login()
    {
        $test = ModelUser::checkUser();
        if ($test) {
            header('Location:mainLogin');
        } else {
            $_SESSION['error'] = 'Ошибка ввода данных';
        }
    }
}
?>