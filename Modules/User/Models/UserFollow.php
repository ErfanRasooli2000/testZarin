<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\User\database\Factory\UserFollowFactory;

class UserFollow extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id" ,
        "page_id" ,
    ];

    protected static function newFactory()
    {
        return UserFollowFactory::new();
    }
}
