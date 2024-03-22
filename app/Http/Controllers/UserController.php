<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function storeUser(StoreRequest $request)
    {
        $data = $request->validated();
        $response = User::firstOrCreate([
            'email' => $data['email']
            ], $data);
        return $response;
    }
}
