<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    // public function unit_section (){
    //     return $this->hasMany(Section::class);
    // }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['name'] ?? null, function ($query, $name) {
            $query->where(function ($query) use ($name) {
                $query->where('name', 'like', '%' . $name . '%');
            });
        });

        $query->when($filters['id'] ?? null, function ($query, $user_id) {
            $query->where(function ($query) use ($user_id) {
                $query->where('id', $user_id);
            });
        });
    }
}
