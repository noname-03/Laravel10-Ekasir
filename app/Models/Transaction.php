<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Customer;
use App\Models\DetailTransaction;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'customer_id',
        'cash',
        'change',
        'grand_total',
        'discount',
        'total',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    //detail transaction
    public function detailTransactions()
    {
        return $this->hasMany(DetailTransaction::class);
    }
}