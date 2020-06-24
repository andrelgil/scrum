<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller{

    public function index()
    {
        return Users::all();
    }


    public function store(Request $request)
    {
        return Users::create($request->all());
    }


    public function show(Users $user)
    {
        return $user;
    }


    public function update(Request $request, Users $users)
    {
        $users->update($request->all());
        return $users;
    }

    public function destroy(Users $users)
    {
        $users->delete();
        return  response()->json(['result' => 'ok']);
    }
}
