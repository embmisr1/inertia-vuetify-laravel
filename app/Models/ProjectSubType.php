<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSubType extends Model
{
    use HasFactory;
    protected $table = 'tbl_project_subtype';
    protected $fillable = ["project_subtype_desc","project_type_FK"];


    public function project_type()
    {
        return $this->belongsTo(ProjectType::class, "project_type_FK");
    }
}
