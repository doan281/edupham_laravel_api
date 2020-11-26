<?php

namespace Edupham\Api\App\Http\Controllers;

use Edupham\Api\App\Events\ApiLogEvent;
use Edupham\Api\App\Http\Requests\User\LoginRequest;
use Edupham\Api\App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $userRepository;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * URL: http://localhost:8000/api/v2/login
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        event(new ApiLogEvent(
            date('Y-m-d H:i:s'),
            $request->getHttpHost(),
            $request->getClientIp(),
            'UserController: '.__FUNCTION__,
            null,
            null,
            $request->userAgent(),
            null
        ));

        return response()->json([
            'code' => 200,
            'message' => 'Đăng nhập thành công.',
            'data' => null
        ]);
    }

    /**
     * URL: http://localhost:8000/api/v2/logout
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        return response()->json([
            'code' => 200,
            'message' => 'Đăng xuất thành công.',
            'data' => null
        ]);
    }


}
