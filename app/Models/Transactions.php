<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
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

        'user_id',
        
      

        
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



// public function customer()
// {
//     return $this->belongsTo(Customer::class, 'customer_id');
// }

public function customer()
{
    return $this->belongsTo(Customer::class, 'user_id');
}




public static function isActiveCustomer($customerId)
{
    return static::where('id', $customerId)
                 ->where('created_at', '<=', Carbon::now()->subMinutes(40))
                 ->groupBy('id')
                 ->exists();

     
}



// public function scopeActive($query)
//     {
//         return $query->where('created_at', '>=', Carbon::now()->subDays(40))
//             ->latest()
//             ->groupBy('userid');
//     }

//     public function scopeInactive($query)
//     {
//         return $query->where('created_at', '<=', Carbon::now()->subDays(40))
//             ->groupBy('user_id');
//     }

}

