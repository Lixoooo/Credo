<?php

class AdminController extends AdminBase
{
    public function actionIndex()
    {
        //проверка доступа
        self::checkAdmin();

        //Вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
}