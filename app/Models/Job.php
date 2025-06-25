<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Job extends Model
// {
//     //
// }
class Job{
    public static function all()
    {
        return [
            ['title' => 'Software Engineer','salary' => '$1300'],
            ['title' => 'Graphic Designer','salary' => '$800']
        ];
    }
}