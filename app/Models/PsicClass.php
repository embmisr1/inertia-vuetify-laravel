<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsicClass extends Model
{
    use HasFactory;
    protected $table = 'tbl_psic_class';
    protected $fillable = ["psic_class_desc", "psic_group_FK"];

    public function psic_group()
    {
        return $this->belongsTo(PsicGroup::class, "psic_group_FK");
    }
}
