<?php

namespace Modules\Transaction\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Transaction\database\Factory\TransactionFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "type",
        "value",
        "user_id"
    ];

    protected static function newFactory()
    {
        return new TransactionFactory();
    }
}
