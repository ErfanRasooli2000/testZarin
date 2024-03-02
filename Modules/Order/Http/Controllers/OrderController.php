<?php

namespace Modules\Order\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Order\database\Repositories\Contracts\OrderRepositoryInterface;
use Modules\Order\Enums\OrderStatusEnum;
use Modules\Order\Http\Requests\OrderRequest;
use Modules\Order\Http\Resources\OrderResource;

class OrderController extends Controller
{
    public function __construct(protected OrderRepositoryInterface $orderRepository){}

    public function list()
    {
        $result = OrderResource::collection($this->orderRepository->list());
        return $this->successResponse($result);
    }

    public function create(OrderRequest $request)
    {
        $data = $request->validated();
        $data["created_by"] = Auth::id();
        $data["status"] = OrderStatusEnum::Progress->value;

        $this->orderRepository->create($data);
        return $this->successResponse(null,201,"سفارش شما ثبت شد");
    }
}
