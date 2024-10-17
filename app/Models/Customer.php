<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

   
    // protected $table = 'customers';
    protected $fillable = [
        
        'customer_name',
        'contact',
        'location',
        'user_name',

        'id',
        
        

    ];


    public function scopeFilter($query, array $filters )
    {
        if($filters['search'] ?? false) {
           $query->where('customer_name', 'like', '%' . request('search') . '%')
               ->orWhere('contact', 'like', '%' . request('search') . '%')
               ->orWhere('location', 'like', '%' . request('search') . '%')
               ->orWhere('created_at', 'like', '%' . request('search') . '%');
               
       }
    }


   

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function transactions()
{
    return $this->hasMany(Transactions::class);
}

}

