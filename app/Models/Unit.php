<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}