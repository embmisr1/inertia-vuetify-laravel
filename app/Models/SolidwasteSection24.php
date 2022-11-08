<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolidwasteSection24 extends Model
{
    protected $table = 'tbl_solidwaste_section24';
    use HasFactory;

    protected $casts = [
        "section24_basis_1" => 'boolean',
        "section24_basis_2" => 'boolean',
        "section24_basis_3" => 'boolean',
        "section24_basis_4" => 'boolean',
        "section24_basis_5" => 'boolean',
        "section24_basis_6" => 'boolean',
        "section24_basis_7" => 'boolean',
        "section24_basis_8" => 'boolean',
        "section24_basis_9" => 'boolean',
        "section24_basis_10" => 'boolean',
        "section24_basis_11" => 'boolean',
    ];
}
