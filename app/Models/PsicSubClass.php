<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsicSubClass extends Model
{
    use HasFactory;
    protected $table = 'tbl_psic_subclass';
    protected $fillable = ["psic_subclass_desc", "psic_class_FK"];

    public function psic_class()
    {
        return $this->belongsTo(PsicClass::class, "psic_class_FK");
    }
}
