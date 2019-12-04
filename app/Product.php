<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $attributes = [
        'name' => "",
        'desc' => "",
        'quantity' => 0
    ];
    protected $fillable = ['name', 'desc', 'quantity'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
