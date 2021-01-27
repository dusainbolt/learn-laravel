<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property mixed fullName
 * @property mixed birthday
 * @property mixed email
 * @property mixed phoneNumber
 * @property mixed job
 * @property mixed avatar
 * @property mixed facebook
 * @property mixed gender
 * @property mixed country
 * @property mixed role
 * @property mixed status
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function courseRequest(){
//        id cua bang user - UserId cua bang CourseRequest
        return $this->hasOne(CourseRequests::class, 'userId');
    }

    public function subject(){
        return $this->hasMany(Subject::class, 'userId');
    }

    public function classes(){
        return $this->hasManyThrough(Classes::class, Subject::class,'userId', 'subjectId');
    }

//    public function classLesson(){
//        return $this->hasManyThrough(Classes::class, 'userId');
//    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
}
