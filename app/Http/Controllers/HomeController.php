<?php

namespace App\Http\Controllers;


use App\Models\Mamber;
use App\Models\Member;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {


        $data = Payment::select('member_id', DB::raw('MAX(planexpiredate) as planexpiredate'))->groupBy('member_id',)->having('planexpiredate', '<', date('Y-m-d', time() + 86400 * 3))->get();

        $ndata= Member::leftJoin('payments','members.id','=','payments.member_id')->whereNull('payments.member_id')->where('status','Activate')->select('members.id as id','members.name as name','members.mobile as mobile')->get();
        
        return view('home', compact('data','ndata'));

    }
}
