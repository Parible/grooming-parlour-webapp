<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Customer;
use App\Models\Services;
use App\Models\NonCustomer;
use Illuminate\Support\Str;
use App\Models\NonCustomers;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MainController extends Controller
{

 


    public function create_homepage(Request $request)
    {
      try {
          // dd($request);
        $customers = Customer::all();
        $assigned_customers = Transactions::all();
        $customer_count = Customer::count();

        $filters = $request->only('search');
        $customersQuery = Customer::filter($filters);
    
      
        $searchQuery = $request->input('search');
    
       
        $customers = $customersQuery->get();


        $perPage = 15;
        $customers = $customersQuery->paginate($perPage);

        $staff = Staff::all();
        $staff_count = Staff::count();
        $user_count = User::count();

        // Modal for Existing Customer
        $services = Transactions::all();
        $cashier = Staff::all();

        // $transaction = Transactions::findOrFail($customer_id);




        $active_customer_count = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))
        ->whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('transactions')
                ->groupBy('id');
        })
        ->count();
         
              
            $active_customers = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))
            ->latest()
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('transactions')
                    ->groupBy('id');
            })

            ->get(); // Assuming id is the identifier for customers;
    

         
        $inactive_customer_count = Transactions::where('created_at', '<=', Carbon::now()->subDays(40))
        ->whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('transactions')
                ->groupBy('id');
        })
        ->count();

         
        $inactive_customers = Transactions::where('created_at', '<=', Carbon::now()->subDays(40))
        ->whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('transactions')
                ->groupBy('id');
        })
        ->get();

        
    



        return view('pages.home', compact('customers', 'searchQuery'), [
            'customer_count' => $customer_count,
             'staff'=> $staff,
              'staff_count'=> $staff_count,
              'user_count'=> $user_count,
              'cashier'=> $cashier,
              'services'=> $services,
               'active_customer_count' => $active_customer_count,
               'active_customers' => $active_customers,
               'assigned_customers' => $assigned_customers,
               'inactive_customer_count'=> $inactive_customer_count,
               'inactive_customers'=> $inactive_customers,
              
            ]);

        } catch (ModelNotFoundException $e) {
            return redirect()->route('homepage')->with('message', 'An error occurred ❌');
        }
    }

    


    //new Customer
        public function create_newCustomer()
        {
          
    
            return view('pages.newCustomer');
        }

        

        public function store_newCustomer(Request $request)
        {
            // Validate form fields
            $formFields = $request->validate([
                'customer_name' => 'required|string|min:3|max:50',
                'contact' => 'required|string|min:10|max:15', 
                'location' => 'required|string',
               
                
            ]);
        
        
            $formFields['id'] = auth()->user()->id;
               
            $request->session()->put('page_data', $formFields);
        
          
            Customer::create($formFields);
        
            return redirect('/')->with('message', 'Customer added successfully');
        }
        

        
    // Existing Customer

    public function create_existingCustomer(Request $request ,$customer_id)
    {
         
      
        try {
            
            $customer = Customer::findOrFail($customer_id);
            $customer_name=$customer->customer_name;
            $created_at=$customer->created_at;
            $contact=$customer->contact;
            $location=$customer->location;
            $staff = Staff::all();
          
            $cashier = Staff::all();

            $active_customers = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))
            ->latest()
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('transactions')
                    ->groupBy('id');
            })
            

            ->get(); // Assuming id is the identifier for customers;
    
            

          
            return view('pages.existingCustomer ',  [
                'customer' => $customer,
                'staff' => $staff,
                'active_customers' => $active_customers,
                'cashier' => $cashier,
                'customer_name' => $customer_name,
                'location' => $location,
                'contact' => $contact,
                'created_at' => $created_at,
               
            ]);

            

        } catch (ModelNotFoundException $e) {
            
            return redirect()->route('homepage')->with('failed', 'An error occured ');
        }
       

    }


    
        public function store_existingCustomer(Request $request, $customer_id)
        { 
        
            try{
            // Validate the form fields
            $formFields = $request->validate([
                'customer_name' => 'required|string|min:3|max:255',
                'contact' => 'required|string|min:10|max:15',
                'location' => 'required|string|max:255',
                'staff_name' => 'required',
                'author' => 'required',
                'service_amt' => 'required',
                'additionals' => 'nullable',
                'services'=>'required|min:1',
                'Services.*' => 'In:Adult Haircut, Hair, Colouring, Dreadlocks, Interlock, Facials, Hair Treatment, Ponytail, Braids, Wig Caps, Bridal Hairstyling, Manicure, Pedicure, Normal Nails, Acrylic Nails, Gel Polish, Makeup, Facials Treatment' 
            ]);
            
            $customer = Customer::find($customer_id);
            $formFields['id'] = $customer->id;

            $formFields['services'] = implode(',', $formFields['services']);
            
            $request->session()->put('page_data', $formFields);
        
            Transactions::create($formFields);
            }
            catch(ModelNotFoundException $e) {
                return redirect()->route('homepage')->with('message', 'An error occured ❌');
            }

            return redirect('/')->with('message', 'Assigned customer successfully');
        }
        



    // Update and Edit Customer 

    public function show_updateexistingCustomer($customer_id)
    {
        try {
            $customer = Customer::findOrFail($customer_id);
         
            $staff = Staff::all();
           

            $cashier = Staff::all();
    
            return view('pages.updateExistingCustomer', [
                'customer' => $customer,
                'staff' => $staff,
              
              
               
                'cashier' => $cashier,
            ]);
        } catch (ModelNotFoundException $e) {
            return redirect()->route('homepage')->with('failed', 'An error occured ');
        }

        }
     



        public function update_existingCustomer(Request $request, $customer_id)
        {
         
            $formFields = $request->validate([
                'customer_name' => 'required|string|min:3|max:50',
                'contact' => 'required|string|min:10|max:15',     
                'location' => 'required|string|max:50',
              
            ]);
        
            
               $customer = Customer::findOrFail($customer_id);

                $customer->update($formFields);

        
            // Redirect back with a success message
            return redirect()->route('homepage')->with('message', 'Customer details updated');
        }
        



        public function active_customers()
        {
         

    $active_customer_count = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))
    ->whereIn('id', function ($query) {
        $query->select(DB::raw('MAX(id)'))
            ->from('transactions')
            ->groupBy('id');
    })
    ->count();
     
          
        $active_customers = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))
        ->latest()
        ->whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('transactions')
                ->groupBy('id');
        })
        ->get();
    
        $number_of_visits = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))
        ->groupBy('id')
        ->select('id', DB::raw('count(*) as visit_count'))
        ->get()
        ->pluck('visit_count', 'id'); // Assuming id is the identifier for customers


    
        $active_paginate= Transactions::latest()->paginate(15);


            return view('partials.activecustomers',compact('active_paginate'), [
             
            'active_customers'=> $active_customers,
            'active_customer_count'=> $active_customer_count,
            'number_of_visits '=> $number_of_visits ,
        
        ]);
        }


        public function inactive_customers()
        {
            // $customers = Customer::all();
              // Calculate the number of active customers within the last 30 days
        // $number_of_visits = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))->count();
        // $active_customers = Transactions::where('created_at', '>=', Carbon::now()->subMinute(40))->latest()->first();

        $inactive_customer_count = Transactions::where('created_at', '<=', Carbon::now()->subDays(40))
        ->whereIn('id', function ($query) {
            $query->select(DB::raw('MAX(id)'))
                ->from('transactions')
                ->groupBy('id');
        })
        ->count();

         
              
            $inactive_customers = Transactions::where('created_at', '<=', Carbon::now()->subDays(40))
            ->latest()
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('transactions')
                    ->groupBy('id');
            })
            ->get();
    


        $inactive_customers_paginate = Transactions::latest()->paginate(15);


            return view('partials.inactivecustomers', [
              
            'inactive_customer_count'=> $inactive_customer_count,
            'inactive_customers'=> $inactive_customers,
          
        
        ]);
        }

    


         
    public function show_noncustomer()
    {
        $staff =Staff::all();
        

        return view('pages.noncustomer', ['staff ' =>$staff ]);
    }
    //
  
    public function store_noncustomer(Request $request)
    {

        try{
            // Validate the form fields
            $formFields = $request->validate([
                'customer_name' => 'required|string|min:3|max:255',
                'contact' => 'required|string|min:10|max:15',
                'location' => 'required|string|max:255',
                'staff_name' => 'required',
                'author' => 'required',
                'service_amt' => 'required',
                'additionals' => 'nullable',
                'services'=>'required|min:1',
                'services.*' => 'in:Adult Haircut, Hair, Colouring, Dreadlocks, Interlock, Facials, Hair Treatment, Ponytail, Braids, Wig Caps, Bridal Hairstyling, Manicure, Pedicure, Normal Nails, Acrylic Nails, Gel Polish, Makeup, Facials Treatment' 
            ]);
           


            
           
            $formFields['id'] = auth()->user()->id;
            
            $formFields['services'] = implode(',', $formFields['services']);
            
            
            $request->session()->put('page_data', $formFields);
            
            Transactions::create($formFields);
            }
            catch(ModelNotFoundException $e) {
                return redirect()->route('homepage')->with('failed', 'An error occured ');
            }

            return redirect('/')->with('message', 'Assigned customer successfully');
        }
        




        public function show_existingcustomerdetail($customer_id)
        {



            try {
                $transaction = Transactions::findOrFail($customer_id);
                $customer_name = $transaction->customer_name;
                $created_at = $transaction->created_at;
                $contact = $transaction->contact;
                $location = $transaction->location;
            
                // Fetch the history of transactions for the customer
                $history = Transactions::where('id', $transaction->id)
                    ->orderBy('created_at', 'desc')
                    ->get();
            
                // Fetch active customers
                $active_customers = Transactions::where('created_at', '>=', Carbon::now()->subDays(40))
                    ->latest()
                    ->whereIn('id', function ($query) {
                        $query->select(DB::raw('MAX(id)'))
                            ->from('transactions')
                            ->groupBy('id');
                    })
                    ->get();
            
                return view('pages.existingcustomerdetail',  [
                    'transaction' => $transaction,
                    'customer_name' => $customer_name,
                    'created_at' => $created_at,
                    'contact' => $contact,
                    'location' => $location,
                    'history' => $history, // Pass the history to the view
                    'active_customers' => $active_customers,
                ]);
            } catch (\Exception $e) {
                // Handle the exception
                return redirect()->route('homepage')->with('failed','Customer has no history');
            }
            
    
                
    


    }
    }



