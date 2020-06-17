<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    protected $fillable = [
        'activity_name', 'activity_type'
    ];

    /**
     * Relations to Teams
     * 
     * @return \App\Team
     */
    public function teams()
    {
        return $this->hasMany('App\Team');
    }
}
