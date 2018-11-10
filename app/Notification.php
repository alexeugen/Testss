<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'longcontent',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
