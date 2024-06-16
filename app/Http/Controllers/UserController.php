<?php


namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {   
        $this->userService = $userService;
        
    }
    public function index(){
            $users = $this->userService->getAllUsers();
            return response()->json($users);
    }
    public function show($id){
        $user = $this->userService->getUserById($id);
        return response()->json($user);
    }
}
