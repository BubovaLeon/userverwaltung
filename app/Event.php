<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'title', 'description', 'datetime', 'duration', 'creator'
    ];

    protected $casts = [
            'duration' => 'integer',
    ];
}
