<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransferMoney;
use Auth;

class TranferController extends Controller
{
    public function add()
    {    
     
     return view('dashboards.admins.transfer');
    }
    public function insert(Request $request)
    {    
     $transfermoney = new TransferMoney();
             $transfermoney->user_id = Auth::user()->id;
             $transfermoney->amount = $request->input('amount');
             $transfermoney->email = $request->input('email');
            
             $transfermoney->save();
             return redirect('/home')->with('status','deposits Added Successfully');
     
    }

    public function list()
   {    
    $transfermoneys = TransferMoney::all();
    return view('dashboards.admins.transferlist',compact('transfermoneys'));
   }
 
}
