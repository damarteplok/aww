<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'name', 'description', 'price', 'debit_id', 'credit_id', 'created_at'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function credits()
    {
    	return $this->belongsTo('App\Credit', 'credit_id');
    }
    public function debits()
    {
    	return $this->belongsTo('App\Debit', 'debit_id');
    }
}
