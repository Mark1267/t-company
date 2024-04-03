<?php

namespace App\Http\Controllers\Auth;

use App\Models\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteredUserRefController extends Controller
{
    public function create($username)
    {
        $accounts = Account::all();
        return view('auth.register', ['username' => $username, 'accounts' => $accounts]);
    }
}
