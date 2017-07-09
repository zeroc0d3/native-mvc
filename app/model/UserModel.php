<?php

class UserModel
{
    public static function showUsers()
    {
        $result = QB::table('users')->get();
        return $result;
    }
}
