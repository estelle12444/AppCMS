<?php

namespace App;

class Helper
{
    public static function test($tag){
        return auth()->user()?->role->nom == 'admin' ? "data-tag=$tag" : '';
    }
}
