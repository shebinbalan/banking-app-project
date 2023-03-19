<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\User;
use Auth;

class DepositController extends Controller
{
    public function add()
    {    
     
     return view('dashboards.admins.deposit');
    }
    public function insert(Request $request)
   {    
    $deposits = new Deposit();
            $deposits->user_id = Auth::user()->id;
            $deposits->amount = $request->input('amount');
            $deposits->type = $request->input('type');
           
            $deposits->save();
            return redirect('/home')->with('status','deposits Added Successfully');
    
   }

   public function list()
   {    
    $deposits = Deposit::all();
    return view('dashboards.admins.depositlist',compact('deposits'));
   }

   
}
