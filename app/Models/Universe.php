<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    protected $table = 'tbl_universe';
    use HasFactory;

    public function logs(){
        return $this->hasMany(Logs::class);
    }
}
