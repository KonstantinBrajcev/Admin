<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\User;

class UsersController extends Controller
{
    use AuthorizesRequests;
    public function index()
{
    $this->authorize('viewAny', User::class);
    $users = User::all();
    return view('users.index', compact('users'));
}

}
