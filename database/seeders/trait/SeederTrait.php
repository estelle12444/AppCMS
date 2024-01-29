<?php

namespace Database\Seeders\Trait;

trait SeederTrait
{
    public function insert($data, $class){
        $model = app()->make($class);
        foreach ($data[0] as $key => $row) {
            $french = $model::create($row);
            $english = $data[1][$key];
            $model::create(
                array_merge($english, [
                    'translate_code' => 'en',
                    'parent_id' => $french->id,
                ])
            );
        }
    }

}
