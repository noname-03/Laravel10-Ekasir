<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Transliterator;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'description'
    ];
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}