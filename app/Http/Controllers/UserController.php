<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::where('level_id', 2)->count();
        
        return view('user', ['data' => $user]);
    }
}
