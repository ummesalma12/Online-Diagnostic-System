<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $guarded = ['created_at', 'deleted_at', 'updated_at'];
    
    
    protected $appends = ['amount_with_currency'];

    //custom property
    public function getAmountWithCurrencyAttribute()
    {
        return '৳'.$this->price;
    }
}
