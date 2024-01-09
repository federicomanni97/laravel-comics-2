<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //! inserire dentro il guarded i dati da escludere
    //? protected $guarded = [];

    //! nel fillable vanno inseriti i dati che voglio includere
    protected $fillable = ['title', 'thumb', 'description', 'price', 'sale_date', 'type', 'series'];
}