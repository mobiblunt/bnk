<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Plan;
use App\Deposit;
use App\Withdrawal;
use App\Account;
use App\User;
use App\Transaction;
use App\Alert;
use Carbon\Carbon;
//use Sentinel;

class DashController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('sentinel.auth');
        
    }




    public function index()

    {
        if(Sentinel::inRole('administrator'))
       {

         $tran = Transaction::all();
       
        return view('centaur.dashboard' , compact('alert', 'tran'));
       } 
       else {



        //$user = Sentinel::getUser()->plan_id;

        $user = Sentinel::getUser();

        

        $dat = Carbon::now()->toDateString();
        
        //$alert = Alert::all();
       
       $tran = Transaction::where('user_id', Sentinel::getUser()->id)->get();

        //dd($tran);

        //$acct = Account::where('user_id', Sentinel::getUser()->id)->first();

        //$plan1 = Plan::where('id', $acct->plan_id)->first();

        //dd($acct);

        return view('centaur.dashboard' , compact('dat','tran', 'user'));

        }
    }


    public function getTrans() {

        $dep = Deposit::where('user_id', Sentinel::getUser()->id)->get();

        $wit = Withdrawal::where('user_id', Sentinel::getUser()->id)->get();

        $tran = Transaction::where('user_id', Sentinel::getUser()->id)->get();


    	return view('home.transactions' , compact('dep','wit','tran'));


    }

    public function getDep() {

        //$plans = Plan::all();

         $acct = Account::where('user_id', Sentinel::getUser()->id)->first();

       // $plan1 = Plan::where('id', $acct->plan_id)->first();


        //dd($user);

    	return view('home.deposit');


    }


    public function getInt() {

        //$plans = Plan::all();

        // $acct = Account::where('user_id', Sentinel::getUser()->id)->first();

        //$plan1 = Plan::where('id', $acct->plan_id)->first();


        //dd($user);

        return view('home.int');


    }


    public function getWith() {

    	return view('home.withdrawal');


    }


    public function getWallet() {


        $plans = Plan::all();


        $user = Sentinel::getUser()->plan_id;

        $acct = Account::where('user_id', Sentinel::getUser()->id)->first();

        $plan1 = Plan::where('id', $acct->plan_id)->first();

        $dat = Carbon::now()->toDateString();


        //dd($plan1);

        

        return view('home.wallet' , compact('plan1','acct','dat','plans'));


    }


     public function getRef() {

        $users = User::where('ref', Sentinel::getUser()->u_id)->get();

        //dd($users);

        return view('home.ref', compact('users'));


    }





}
