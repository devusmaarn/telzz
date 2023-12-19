<?php

namespace App\Helpers;

class UserHelper {

    protected static $types = [
        'regular' => 'REG',
        'retailer' => 'RET',
        'subdistributor' => 'SUB',
        'distributor' => 'DIS',
    ];

    protected static $availableRoles = [
        'user' => 'USR',
        'admin' => 'ADM',
        'editor' => 'EDT'
    ];

    protected static $statuses = [
        'active' => 1,
        'suspended' => 0,
        'banned' => -1,
    ];

    public static function roles($role){
        return self::$availableRoles[$role];
    }

    public static function generateUsername(string $name): string 
    {
        $rand_int = rand(2, 5);
        $rand_str = str(str()->random(4))->lower();
        return $name . $rand_int . $rand_str;
    }
}