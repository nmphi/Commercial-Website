<?php
namespace App\Utilities;
class Constant{
    //User
    const user_level_host = 0;
    const user_level_admin = 1;
    const user_level_client = 2;
    public static $user_level = [
        self::user_level_host => 'host',
        self::user_level_admin => 'admin',
        self::user_level_client => 'client',

    ];
}