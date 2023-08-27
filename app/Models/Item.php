<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailTransaction;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'unit_id',
        'price',
        'stock',
        'photo'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function detailTransactions()
    {
        return $this->hasMany(DetailTransaction::class);
    }
}