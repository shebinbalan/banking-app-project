<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class StatementController extends Controller
{
    public function add()
    {    
        $statements= User::join('deposits', 'users.id', '=', 'deposits.user_id')
        ->join('with_draws','deposits.user_id','=', 'with_draws.user_id')
        ->join('transfer_money','with_draws.user_id','=', 'transfer_money.user_id')
        ->get(['users.*', 'deposits.amount','deposits.type','with_draws.amount']);


     return view('dashboards.admins.statement',compact('statements'));
    }
}
