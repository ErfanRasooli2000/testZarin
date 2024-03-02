<?php

namespace Modules\User\database\Repositories\Repos;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Modules\Transaction\Facades\Transaction;
use Modules\User\database\Repositories\Contracts\UserRepositoryInterface;
use Modules\User\Models\UserFollow;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(protected UserFollow $userFollow){}

    public function follow(array $data)
    {
        DB::transaction(function () use ($data){
            $this->userFollow->create($data);
            Transaction::transaction(Auth::user(),2);
        });
    }
}
