<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'tbl_section';

    protected $fillable = [
        "description",
    ];


    public function division()
    {
        return $this->belongsTo(Section::class,'id','FK_division_ID');
    }
}
