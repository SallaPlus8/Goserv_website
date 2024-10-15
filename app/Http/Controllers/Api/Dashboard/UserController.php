<?php

namespace App\Http\Controllers\Api\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Dashboard\UserRequest;
use App\Helpers\ApiResponse; // Import your ApiResponse helper
use App\Services\Api\Dashboard\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return ApiResponse::sendResponse(200, 'Users retrieved successfully', $users);
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated(); // Get validated data
        $user = $this->userService->createUser($data);
        return ApiResponse::sendResponse(201, 'User created successfully', $user);
    }

    public function show($id)
    {
        $user = $this->userService->getUserById($id);

        if ($user) {
            return ApiResponse::sendResponse(200, 'User retrieved successfully', $user);
        }

        return ApiResponse::sendResponse(404, 'User not found');
    }

    public function update(UserRequest $request, $id)
    {
        $data = $request->validated(); // Get validated data
        $user = $this->userService->updateUser($id, $data);

        if ($user) {
            return ApiResponse::sendResponse(200, 'User updated successfully', $user);
        }

        return ApiResponse::sendResponse(404, 'User not found');
    }

    public function destroy($id)
    {
        $deleted = $this->userService->deleteUser($id);

        if ($deleted) {
            return ApiResponse::sendResponse(200, 'User deleted successfully');
        }

        return ApiResponse::sendResponse(404, 'User not found');
    }
}
