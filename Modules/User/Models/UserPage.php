<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\User\database\Factory\UserPageFactory;

class UserPage extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "instagram_id",
        "page_name",
    ];

    protected static function newFactory()
    {
        return UserPageFactory::new();
    }

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
