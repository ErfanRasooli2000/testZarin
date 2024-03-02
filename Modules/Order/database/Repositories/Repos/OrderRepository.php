<?php

namespace Modules\Order\database\Repositories\Repos;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Order\database\Repositories\Contracts\OrderRepositoryInterface;
use Modules\Order\Enums\OrderStatusEnum;
use Modules\Order\Models\Order;
use Modules\Transaction\Enums\TransactionTypeEnum;
use Modules\Transaction\Models\Transaction;

class OrderRepository implements OrderRepositoryInterface
{
    public function __construct(protected Order $order){}

    public function create(array $data)
    {
        DB::transaction(function () use ($data){

            Transaction::create([
                'value' => $data["count"] * -4,
                'user_id' => $data["created_by"],
                'type' => TransactionTypeEnum::Charge->value
            ]);

            $this->order->create($data);

        });
    }

    public function list()
    {
        $user_id = Auth::id();

        return $this->order
            ->select(["orders.page_id as order_page_id" , "user_follows.page_id as followed_page_id" , "orders.id as order_id"])
           ->leftJoin('user_follows', function ($join) use ($user_id) {
               $join->on('orders.page_id', '=', 'user_follows.page_id')
                   ->where('user_follows.user_id', '=', $user_id);
           })
           ->whereNull('user_follows.page_id')
           ->get();
    }
}
