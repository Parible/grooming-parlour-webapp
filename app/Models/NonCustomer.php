<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonCustomer extends Model
{
    use HasFactory;
    
    

    protected $fillable = [
        
        'customer_name',
        'contact',
        'location',
        'services',
        'service_amt',
        'author',
        'staff_name',
        'additionals',
      

        
    ];


    public function scopeFilter($query, array $filters )
    {
        if($filters['search'] ?? false) {
           $query->where('customer_name', 'like', '%' . request('search') . '%')
               ->orWhere('contact', 'like', '%' . request('search') . '%')
               ->orWhere('location', 'like', '%' . request('search') . '%')
               ->orWhere('created_at', 'like', '%' . request('search') . '%')
               ->orWhere('service_name', 'like', '%' . request('search') . '%')
               ->orWhere('service_amt', 'like', '%' . request('search') . '%')
               ->orWhere('author', 'like', '%' . request('search') . '%')
               ->orWhere('staff_name', 'like', '%' . request('search') . '%');
               
       }

}

public function active_customer()
{
    
}

}
