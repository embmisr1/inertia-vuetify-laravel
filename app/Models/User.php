<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Resources\UsersResource;
use App\Models\USER_ACCESS\UsersAccess;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'position_id',
        'unit_section_id',
        'section_id',
        'username',
        'email',
        'password',
        "activation_key",
        'fullname',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function unit_section()
    {
        return $this->belongsTo(UnitSection::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class,'section_id','PK_section_ID');
    }
    public function access()
    {
        return $this->hasOne(UsersAccess::class,"users_FK");
    }

    public function scopeOrderByUserName($query)
    {
        return $query->orderBy('username');
    }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['username'] ?? null, function ($query, $username) {
            $query->where(function ($query) use ($username) {
                $query->where('username', 'like', '%'.$username.'%');
            });
        });

        $query->when($filters['id'] ?? null, function ($query, $user_id) {
            $query->where(function ($query) use ($user_id) {
                $query->where('id', $user_id);
            });
        });
    }
    public function logs(){
        return $this->hasMany(Logs::class);
    }

    public function asDriver(){
        return $this->setConnection('mysql_chauffeur')->hasOne(\App\Models\Fleet\Driver::class);
    }
}
