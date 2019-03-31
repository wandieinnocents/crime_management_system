<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Crime;
use App\Models\Prisoner;
use App\Models\Prison;
use App\Models\Employee;
use App\Models\Claim;
use App\Models\Policestation;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employees = Employee::count();
         $rules = Rule::count();
         $claims = Claim::count();
         $crimes = Crime::count();
         $prisoners = Prisoner::count();
         $policestations = Policestation::count();
         $prisons = Prison::count();
        return view('home',compact('employees','rules','claims','crimes','prisoners','policestations','prisons'));
    }

    public function superadmin()
    {


    $rules = Rule::all();
     $crimes = Crime::all();
     $prisoners = Prisoner::all();
     $prisons = Prison::all();
      $employees = Employee::all();
       $claims = Claim::all();

        return view('superadmin',compact('rules','crimes','prisoners','prisons','employees','claims'));
    }
}
