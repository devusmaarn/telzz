<?php

namespace App\Traits;

trait UserInfo {
    protected $types = [
        'regular' => 'REG',
        'retailer' => 'RET',
        'subdistributor' => 'SUB',
        'distributor' => 'DIS',
    ];

    protected $roles = [
        'user' => 'USR',
        'admin' => 'ADM',
        'editor' => 'EDT'
    ];

    protected $statuses = [
        'active' => 1,
        'suspended' => 0,
        'banned' => -1,
    ];

    protected function generateUsername(){
        $rand_int = rand(2, 5);
        $rand_str = str(str()->random(4))->lower();
        $name = $this->first_name;
        return $name . $rand_int . $rand_str;
    }
}