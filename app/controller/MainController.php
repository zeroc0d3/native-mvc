<?php

class MainController
{
    public static function index()
    {
        $result = UserController::index();
        return var_dump($result);
    }
}
