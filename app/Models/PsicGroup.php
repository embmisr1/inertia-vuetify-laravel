<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsicGroup extends Model
{
    use HasFactory;
    protected $table = 'tbl_psic_group';
    protected $fillable = ["psic_group_desc"];
}
