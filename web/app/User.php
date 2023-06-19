<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'users';

    protected $primaryKey = '_id';

    public function getAllUsers() {
        // return self::where('first_name', 'ZOLBOO')->first();
        // return User::find($id);
        return User::all();
    }
}
