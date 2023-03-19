<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\WithDraw;
use App\Models\TransferMoney;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
  
        $deposits = Deposit::all(); 
        $withdraws = WithDraw::all();   
        $transfermoney = TransferMoney::all(); 
        return view('home',compact('deposits','withdraws','transfermoney'));
    }
}
