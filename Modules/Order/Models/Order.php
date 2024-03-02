<?php

namespace Modules\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Order\database\Factories\OrderFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "count",
        "followed",
        "status",
        "page_id",
        "created_by",
    ];
    protected static function newFactory()
    {
        return OrderFactory::new();
    }
}
