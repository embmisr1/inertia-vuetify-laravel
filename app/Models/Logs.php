<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;
    protected $fillable = [
        "model",
        "model_id",
        "user_id",
        "activity",
        "activity_type",
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
