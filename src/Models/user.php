<?php

namespace App\Models;
use App\DB;   

class User extends Model{
    protected static $table='user';
    public function snippet(){
        return substr($this->body,0,2);
    }

}