<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Users\IlluminateUserRepository;
use Centaur\AuthManager;
use CoinPayment;
use Uuid;
use App\Deposit; 
use App\Plan;
use App\Alert;
use App\Transaction;
use App\Transfer;
use App\Account; 
use Carbon\Carbon;
use Illuminate\Support\Str;


class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $userRepository;
     
     protected $authManager;

    public function __construct(AuthManager $authManager)
    {
        // Middleware
        $this->middleware('sentinel.auth');
        $this->middleware('sentinel.access:users.create', ['only' => ['create', 'store']]);
        $this->middleware('sentinel.access:users.view', ['only' => ['index', 'show']]);
        $this->middleware('sentinel.access:users.update', ['only' => ['edit', 'update']]);
        $this->middleware('sentinel.access:users.destroy', ['only' => ['destroy']]);

        // Dependency Injection
        $this->userRepository = app()->make('sentinel.users');
        $this->authManager = $authManager;
    }

     
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $result = $this->validate($request, [
            'amount' => 'required',
            
            ]);

        $tranid = Uuid::generate()->string;

        //dd(request('profit'));

        $dep = Deposit::create([
            'user_id' => Sentinel::getUser()->id,
            'amount' => request('amount'),
            'pay_option' => 'USD',
            'plan_id' => request('plan_id'),
            'trans_id' => $tranid,
            'mobile' => request('mobile'),
            ]);

            
            //$dep->save();

            $dep_id = $dep->id;

            return redirect('/deposit-btc-qr/'.$dep_id);


            
            //return view('home.details', compact('dep'));
    }

     public function storet(Request $request)
    {
         $result = $this->validate($request, [
            'amount' => 'required',
            'bene' => 'required',
            'narration' => 'required',
            'swift' => 'required',
            'routing' => 'required',
            'bank_name' => 'required',
            'account_no' => 'required',

            
            ]);

        //$tranid = Uuid::generate()->string;

        //dd(request('profit'));

        $dep = Transaction::create([
            'category' => 'Domestic',
            'amount' => request('amount'),
            'ref' => Str::random(8),
            'narration' => request('narration'),
            'balance' => '500***',
            'user_id' => Sentinel::getUser()->id,
            
            ]);

            
            //$dep->save();

            $dep_id = $dep->id;

            //$cat = $dep_id->category;



        $transf = Transfer::create([

            'transaction_id' => $dep_id,
            'amount' => request('amount'),
            'type' => 'Domestic',
            'beneficiary' => request('bene'),
            'narration' => request('narration'),
            'swift' => request('swift'),
            'routing' => request('routing'),
            'bank_name' => request('bank_name'),
            'account' => request('account_no'),

        ]);


        $transf_id = $transf->id; 

            return redirect('/deposit-btc-qr/'.$transf_id);


            
           // return view('home.details', compact('dep'));  

    }


    public function storetin(Request $request)
    {
         $result = $this->validate($request, [
            'amount' => 'required',
            'bene' => 'required',
            'narration' => 'required',
            'swift' => 'required',
            'routing' => 'required',
            'bank_name' => 'required',
            'account_no' => 'required',
            'address' => 'required',
            'country' => 'required',

            
            ]);

        //$tranid = Uuid::generate()->string;

        //dd(request('profit'));

        $dep = Transaction::create([
            'category' => 'International',
            'amount' => request('amount'),
            'ref' => Str::random(8),
            'narration' => request('narration'),
            'balance' => '500***',
            'user_id' => Sentinel::getUser()->id,
            ]);

            
            //$dep->save();

            $dep_id = $dep->id;

            //$cat = $dep_id->category;



        $transf = Transfer::create([

            'transaction_id' => $dep_id,
            'amount' => request('amount'),
            'type' => 'International',
            'beneficiary' => request('bene'),
            'narration' => request('narration'),
            'swift' => request('swift'),
            'routing' => request('routing'),
            'bank_name' => request('bank_name'),
            'account' => request('account_no'),
            'address' => request('address'),
            'country' => request('country'),
        ]);


        $transf_id = $transf->id; 

            return redirect('/deposit-btc-qr/'.$transf_id);


            
           // return view('home.details', compact('dep'));  

    }




    public function pin(Request $request)
    {
         $result = $this->validate($request, [
            'pin' => 'required',
            
            ]);

        //$tranid = Uuid::generate()->string;

        //dd(request('profit'));

         $pin = request('pin');

         $dep_id = request('dep_id');

         

         if ($pin == Sentinel::getUser()->pin) {
            
            return redirect('/transfer-dom/'.$dep_id);

         } else {
             session()->flash('error', 'Invalid pin.');
             return redirect('/deposit-btc-qr/'.$dep_id);
         }
         

        

    

            


            
            //return view('home.details', compact('dep'));
    }

     public function details($id)
    {
        //Second step in payment route

        //return $payment; 
        $depo = Transfer::where('id', $id)->firstOrFail();

        //$plan = Plan::where('id', $depo->plan_id)->firstOrFail();

        //$total = $plan->minimum + $plan->robot_charge;
        
        //dd($depo);

        return view('home.details', compact('depo'));
    }
    
    public function finals() {
        
       

        

        return view('home.final');
        
    }



    public function postpin($id)
    {
        //Second step in payment route

        //return $payment; 
        $depo = Transfer::where('id', $id)->firstOrFail();

        //$plan = Plan::where('id', $depo->plan_id)->firstOrFail();

        //$total = $plan->minimum + $plan->robot_charge;
        
        //dd($depo);

        return view('home.pin', compact('depo'));
    }

        public function alert(Request $request)
    {
         $result = $this->validate($request, [
            'amount' => 'required',
            'date' => 'required',
            
            ]);

        

        $alert = Alert::create([
            'deposit_id' => request('dep_id'),
            'amount' => request('amount'),
            'date_paid' => request('date'),
            ]);

            
            

            $dep_id = request('dep_id');

            session()->flash('success', "Alert Has been Sent.");

            return redirect('/deposit-btc-qr/'.$dep_id);


            
            //return view('home.details', compact('dep'));
    }
    
    
    public function postfi(Request $request)
    {
         $result = $this->validate($request, [
            'pin' => 'required',
            
            
            ]);

        //$tranid = Uuid::generate()->string;

        //dd(request('profit'));
        ;

         $pin = request('pin');
         
         

         $dep_id = request('dep_id');
         $depo = Transfer::where('id', $dep_id)->firstOrFail();
         $deposit = Transaction::find($depo->transaction_id);
         
         $use = Sentinel::getUser()->id;
         
        // dd($use);

         $user = $this->userRepository->findById($use);
         
         $attributes = [
            'balance' => Sentinel::getUser()->balance - $depo->amount
        ];

         if ($pin == Sentinel::getUser()->imf) {
             
            $user = $this->userRepository->update($user, $attributes);
            $deposit->status = "success";

        
            $deposit->save();
            
            
            return view('home.success');

         } else {
             session()->flash('error', 'Invalid Code.');
             return view('home.final');
         }
         

        

    

            


            
            //return view('home.details', compact('dep'));
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


       $acc_id = $request->input('acc'); 
       
       $account = Account::find($acc_id);


        $currentdate = Carbon::now();

        if ($request->get('plan_id') == "1") {


           $duration = $currentdate->addDays(21)->toDateString();
           
        }
        elseif ($request->get('plan_id') == "4" || $request->get('plan_id') == "5") {
            $duration = $currentdate->addDays(30)->toDateString();
        }
        else {
            $duration = $currentdate->addDays(100)->toDateString();
        }


    

       $account->plan_id = $request->input('plan'); 

       $account->end_date = $duration; 

        $account->save();


         return redirect('userwallet')->with('status', 'Plan Has Been Succesfully Subscribed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
