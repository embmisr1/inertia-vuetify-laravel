<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'division_id'
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

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

        $query->when($filters['division'] ?? null, function ($query, $division) {
            // $query->where(function ($query) use ($division) {
            //     $query->where('division', 'like', '%'.$division.'%');
            // });
            $query->whereHas('division', function ($query, $division) {
                $query->where('name', 'LIKE', "%" . $division . "%");
            });
        });
    }
}
