<?php

namespace App\Models\USER_ACCESS;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersAccess extends Model
{
    protected $table = 'tbl_users_access';
    use HasFactory;

    public function users_FK()
    {
        return $this->belongsTo(User::class);
    }

}
