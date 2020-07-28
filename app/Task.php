<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'priority',
        'date',
        'completed'
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
