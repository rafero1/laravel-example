<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $attributes = [
        'name' => ""
    ];
    protected $fillable = ['name'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    public function products()
    {
        return $this->hasMany('App\Product')->withTimestamps();
    }
}
