<?php

namespace Modules\Transaction\Services;

use Modules\Transaction\Models\Transaction;
use Modules\User\Models\User;

class TransactionService
{
    public function getCharge(User $user)
    {
        return Transaction::query()
            ->where("user_id" , $user->id)
            ->sum("value");
    }

    public function transaction($count , $type = "add")
    {

    }
}
