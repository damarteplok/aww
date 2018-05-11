<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    //
    protected $fillable = [
        'name', 'description',
    ];

    public function transaction()
    {
    	return $this->hasMany('App\Transaction');
    }
}
