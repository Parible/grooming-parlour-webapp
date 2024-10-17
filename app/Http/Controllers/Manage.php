<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Customer;
use App\Models\Services;
use App\Models\DailyIncome;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Manage extends Controller
{
    public function create_manage()
    {
       
        // Retrieve all customers and transactions
        $customers = Transactions::all();
        $transactions = Customer::all();
        $staff = Staff::all();
        
        // Count the number of customers, staff, and users
        $customer_count = Customer::count();
        $staff_count = Staff::count();
        $user_count = User::count();
    
        // Calculate the number of active customers within the last 30 days
        $active_customer_count = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))->count();
        $active_customers = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))->get();
    
    
        // Calculate the number of active customers within the last 30 days
        $inactive_customer_count = Transactions::where('created_at', '<=', Carbon::now()->subDays(40))->count();
        
        $inactive_customers = Transactions::where('created_at', '<=', Carbon::now()->subDays(40))->get();
    
        // Calculate the total income
        $total_income = Transactions::sum('service_amt');
    
        // Calculate the weekly income
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $weekly_income = Transactions::whereBetween('created_at', [$startOfWeek, $endOfWeek])->sum('service_amt');
    
        // Calculate the monthly income
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $monthly_income = Transactions::whereBetween('created_at', [$startOfMonth, $endOfMonth])->sum('service_amt');
    
        // Calculate the daily income
        $startOfDay = Carbon::now()->startOfDay();
        $endOfDay = Carbon::now()->endOfDay();
        $daily_income = Transactions::whereBetween('created_at', [$startOfDay, $endOfDay])->sum('service_amt');


        // Calculate the daily income
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();
        $yearly_income = Transactions::whereBetween('created_at', [$startOfYear, $endOfYear])->sum('service_amt');
    






        return view('pages.manage.manage', [
            'customers'=> $customers,
            'customer_count'=> $customer_count,
            'user_count'=> $user_count,
            'staff_count'=> $staff_count,
            'transactions'=> $transactions,
            'active_customer_count'=> $active_customer_count,
            'total_income'=> $total_income,
            'weekly_income'=> $weekly_income,
            'monthly_income'=> $monthly_income,
            'daily_income'=> $daily_income,
            'staff'=> $staff,
            'yearly_income'=> $yearly_income,
            'inactive_customer_count'=> $inactive_customer_count,
            'inactive_customers'=> $inactive_customers,
            'active_customers'=> $active_customers,
           
        ]);
    }
    




    public function show_users()
    {
        $users = User::all();
        $user_count = User::count();

        return view('pages.manage.users', [
            'users'=> $users,
            'user_count'=> $user_count,
        ]);
    }




    public function show_dailyincome()
    {
        // Define morning and evening shift timings
        $morningShiftStart = Carbon::now()->startOfDay()->hour(6);
        $morningShiftEnd = Carbon::now()->startOfDay()->hour(20); // 8pm
        $eveningShiftStart = Carbon::now()->startOfDay()->hour(20); // 8pm
        $eveningShiftEnd = Carbon::now()->endOfDay()->hour(6)->addDay(); // 6am next day
    
        // Get the current time
        $now = Carbon::now();
    
        // Determine the shift
        if ($now->between($morningShiftStart, $morningShiftEnd)) {
            $shiftStart = $morningShiftStart;
            $shiftEnd = $morningShiftEnd;
        } else {
            $shiftStart = $eveningShiftStart;
            $shiftEnd = $eveningShiftEnd;
        }
    
        // Get daily income records for today
        $dailyIncomeRecords = DailyIncome::whereDate('date', Carbon::today())->get();
    
        // If there are no records for today, calculate the daily income
        if ($dailyIncomeRecords->isEmpty()) {
            $dailyIncomeAmount = Transactions::whereBetween('created_at', [$shiftStart, $shiftEnd])->sum('service_amt');
    
            // Create a new daily income record
            DailyIncome::create([
                'date' => Carbon::today(),
                'amount' => $dailyIncomeAmount
            ]);
    
            // Add the newly calculated daily income to the array of records
            $dailyIncomeRecords = DailyIncome::whereDate('date', Carbon::today())->get();
        }
    
        // Return the view with the daily income records
        return view('pages.manage.dailyincometable', ['dailyIncomeRecords' => $dailyIncomeRecords]);
    }
    



    public function show_overview()
    {
   
       
       // Count the number of customers, staff, and users
       $customer_count = Customer::count();
       $staff_count = Staff::count();
       $user_count = User::count();
   
       // Calculate the number of active customers within the last 30 days
       $active_customer_count = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))->count();
       $active_customers = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))->get();
   
   
       // Calculate the number of active customers within the last 30 days
       $inactive_customer_count = Transactions::where('created_at', '<=', Carbon::now()->subDays(40))->count();
       
       $inactive_customers = Transactions::where('created_at', '<=', Carbon::now()->subDays(40))->get();
   




       return view('pages.manage.overview', [
         
           'customer_count'=> $customer_count,
           'user_count'=> $user_count,
           'staff_count'=> $staff_count,
       
           'active_customer_count'=> $active_customer_count,
         
           'inactive_customer_count'=> $inactive_customer_count,
           'inactive_customers'=> $inactive_customers,
           'active_customers'=> $active_customers,
          
       ]);
   }
   
}
