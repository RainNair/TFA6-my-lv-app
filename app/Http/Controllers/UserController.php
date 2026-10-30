<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::query()
            ->whereNotNull('username')
            ->orderBy('id')
            ->get();

        return view('pages.users', ['users' => $users]);
    }
}
