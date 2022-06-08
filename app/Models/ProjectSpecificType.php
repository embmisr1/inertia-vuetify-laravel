<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSpecificType extends Model
{
    use HasFactory;
    protected $table = 'tbl_project_specific_type';
    protected $fillable = ["project_specific_type_desc","project_subtype_FK"];


    public function project_subtype()
    {
        return $this->belongsTo(ProjectSubType::class, "project_subtype_FK");
    }
}
