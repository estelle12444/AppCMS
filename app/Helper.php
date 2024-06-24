<?php

namespace App;

class Helper
{
    public static function test($tag){
        return auth()->user()?->role->nom == 'admin' ? "data-tag=$tag" : '';
    }

    // public static function testImage($tag){
    //     return auth()->user()?->role->nom == 'admin' ? "data-tag=Image.$tag" : '';
    // }

    // public static function testVideo($tag){
    //     return auth()->user()?->role->nom == 'admin' ? "data-tag=Video.$tag" : '';
    // }
}
