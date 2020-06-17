<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_name', 'activity_id'
    ];


    /**
     * Relations with Activity
     * 
     * @return \App\Activity
     */
    public function activity() {
        return $this->belongsTo('App\Activity');
    }

    /**
     * Relations with Users
     * 
     * @return \App\User
     */
    public function users() {
        return $this->belongsToMany('App\User');
    }
}