<?php

namespace Modules\User\database\Repositories\Contracts;

interface UserRepositoryInterface
{
    public function follow(array $data);
}
