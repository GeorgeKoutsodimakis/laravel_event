<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'category',
        'price',
        'country',
        'city',
        'date_from',
        'date_to'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
