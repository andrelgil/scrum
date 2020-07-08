<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function index()
    {
        return User::with('users_contacts')->get();
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(Request $request, User $users)
    {
        $users->update($request->all());
        return $users;
    }

    public function destroy(User $users)
    {
        $users->delete();
        return  response()->json(['result' => 'ok']);
    }
}
