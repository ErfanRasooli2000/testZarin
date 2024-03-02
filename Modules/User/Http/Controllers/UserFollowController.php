<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\User\database\Repositories\Contracts\UserRepositoryInterface;
use Modules\User\Http\Requests\UserFollowRequest;

class UserFollowController extends Controller
{
    public function __construct(protected UserRepositoryInterface $userRepository){}

    public function follow(UserFollowRequest $followRequest)
    {
        $data = $followRequest->validated();
        $data["user_id"] = Auth::id();

        $this->userRepository->follow($data);
        return $this->successResponse(null , 200 , "کاربر با موفقیت دنبال شد.");
    }
}
