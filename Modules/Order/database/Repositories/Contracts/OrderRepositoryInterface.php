<?php

namespace Modules\Order\database\Repositories\Contracts;

interface OrderRepositoryInterface
{
    public function create(array $data);

    public function list();
}
