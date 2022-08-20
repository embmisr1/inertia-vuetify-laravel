<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSpecificSubType extends Model
{
    use HasFactory;

    protected $table = 'tbl_project_specific_subtype';
    protected $fillable = ["project_specific_subtype_desc","project_specific_type_FK"];


    public function project_specific_type()
    {
        return $this->belongsTo(ProjectSpecificType::class, "project_specific_type_FK");
    }
}
