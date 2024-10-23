<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Returns all the users.
     *
     * @return object
     */
    public function all()
    {
        $users = User::all();

        return response()->json($users);
    }
}
