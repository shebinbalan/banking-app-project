<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WithDraw;
use Auth;
class WithDrawController extends Controller
{
    public function add()
    {    
     
     return view('dashboards.admins.withdraw');
    }
    public function insert(Request $request)
    {    
     $withdraws = new WithDraw();
             $withdraws->user_id = Auth::user()->id;
             $withdraws->amount = $request->input('amount');
             $withdraws->type = $request->input('type');
            
             $withdraws->save();
             return redirect('/home')->with('status','withdraws Added Successfully');
     
    }

    public function list()
    {    
     $withdraws = WithDraw::all();
     return view('dashboards.admins.withdrawlist',compact('withdraws'));
    }
 
}
