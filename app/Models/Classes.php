<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed avatar
 * @property mixed userId
 * @property mixed subjectId
 * @property mixed status
 */
class Classes extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasOne(User::class, 'id', 'userId');
    }

    public function subject(){
        return $this->hasOne(Subject::class, 'id', 'subjectId');
    }
}
