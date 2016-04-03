<?php

abstract class AdminBase
{
    public static function checkAdmin()
    {
        //Проверка на админа
        $userId = User::checkLogged();

        //Возвращает массив с информацией о пользователе
        $user = User::getUserById($userId);

        if($user['role'] == 'admin') {
            return true;
        }

        die ('Access denied');
    }

}