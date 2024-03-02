<?php

namespace Modules\User\database\Repositories\Repos;

use Modules\User\database\Repositories\Contracts\UserRepositoryInterface;
use Modules\User\Models\UserFollow;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(protected UserFollow $userFollow){}

    public function follow(array $data)
    {
        $this->userFollow->create($data);
    }
}
