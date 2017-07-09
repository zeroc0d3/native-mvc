<?php

class UserController
{
    public static function index()
    {
        return UserModel::showUsers();
    }
}
