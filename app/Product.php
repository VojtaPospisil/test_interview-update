<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Product extends Model
{
    protected $fillable = ['description', 'price', 'title', 'image_path'];

    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function product() {
        return $this->hasOne('App\Order');
    }
}
