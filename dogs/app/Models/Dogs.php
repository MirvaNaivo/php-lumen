<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dogs extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'breed',
        'age',
        'image_id'
    ];

    /**
     * The attributes are excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}