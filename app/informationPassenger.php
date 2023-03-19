<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informationPassenger extends Model
{
    protected $guarded = [];


    //Get Place Birth
    public function PlaceBirth()
    {
        return $this->belongsTo('App\CodeCountrie','PlaceBirth_id' , 'id');
    }


    //Get Country Residency
    public function CountryResidency()
    {
        return $this->belongsTo('App\CodeCountrie','CountryResidency_id' , 'id');
    }

    // get Place Issue
    public function PlaceIssue()
    {
        return $this->belongsTo('App\CodeCountrie','PlaceIssue_id' , 'id');
    }


    // get Code Number
    public function NumberPhone()
    {
        return $this->belongsTo('App\CodeCountrie','code_id' , 'id');
    }
}
