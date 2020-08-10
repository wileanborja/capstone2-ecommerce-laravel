<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
    	return $this->belongsTo("\App\User");
    }

    public function status(){
    	return $this->belongsTo("\App\Status");
    }

    public function payment(){
    	return $this->belongsTo("\App\Payment");
    }

    public function foods(){
    	return $this->belongsToMany("\App\Food")->withPivot("quantity")->withTimeStamps();
    }
