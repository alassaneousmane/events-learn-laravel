<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    

    // protected $fillable = ['name', 'description', 'location', 'price'];
    protected $guarded = ['id'];

    // Permet de convertir l'attribut start_at en Carbon\Carbon
    protected $casts = [
        'start_at' => 'datetime',
        'price' => 'integer'
    ];

    // protected $dates = ['start_at'];

    public function isFree() {
        return $this->price == 0;
    }

    protected $appends = ['fake_price'];

    protected $hidden = ['price'];

    public function getFakePriceAttribute() {
        return $this->attributes['price'] + 100;
    }

    public function setPriceAttribute($value) {
        $this->attributes['price'] = $this->attributes['price'] + $value;
    }
}
