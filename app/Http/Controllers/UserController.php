<?php

namespace App\Http\Controllers;

use App\Filters\GenericFilter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class UserController extends Controller
{
    public function index(Request $request){
        $data = User::query()->orderBy('id','DESC');
        $users = app(Pipeline::class)
            ->send($data)
            ->through([
                new GenericFilter('email','email','like',request('email')),
                new GenericFilter('phone','phone','like',request('phone')),
                new GenericFilter('username','username','like',request('username')),
                new GenericFilter('type','type','=',request('type')),
            ])
            ->thenReturn()
            ->paginate(10);
        if ($request->expectsJson()) {
            return response()->json($users);
        }
        return view('admin.users',compact('users'));
        return $data;
    }
}
