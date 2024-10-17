<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Customer;
use App\Models\Services;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Manage extends Controller
{
   public function create_manage(Request $request)
   {
    $customers = Transactions::all();
    $transactions = Customer::all();
    $customer_count = Customer::count();
    


    //search
    $filters = $request->only('search');
    $transactionQuery = Transactions::filter($filters);
    $searchQuery = $request->input('search');
    $customers = $transactionQuery->get();
   
    
    // $paginate = Transactions::paginate(15);



    
    $staff = Staff::all();
    $staff_count = Staff::count();
    $user_count = User::count();

    // Active customers
    $active_customer_count = Customer::where('created_at', '>=', Carbon::now()->subDays(30))->count();

    // Total income
    $total_income = Transactions::sum('service_amt');

    // Weekly Income
    $startOfWeek = Carbon::now()->startOfWeek();
    $endOfWeek = Carbon::now()->endOfWeek();
    // Get the total sum of service_amt from transactions within the current week
    $weekly_income = Transactions::whereBetween('created_at', [$startOfWeek, $endOfWeek])->sum('service_amt');
    
   $startOfYear = Carbon::now()->startOfYear();
   $endOfYear = Carbon::now()->endOfYear();
   $yearly_income = Transactions::whereBetween('created_at',[$startOfYear, $endOfYear])->sum('service_amt');


    return view('pages.manage.manage', compact('searchQuery'), [
        'customers'=> $customers,
    'customer_count'=> $customer_count,
    'user_count'=> $user_count,
    'staff'=> $staff,
    'staff_count'=> $staff_count,
    'transactions'=> $transactions,
    'active_customer_count'=> $active_customer_count,
    'total_income'=> $total_income,
    'weekly_income'=> $weekly_income,
    'yearly_income'=> $yearly_income,
    


]);
   } 
}
