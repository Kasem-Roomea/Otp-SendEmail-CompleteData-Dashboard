<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informationAccompanying extends Model
{
    protected $guarded=[];


    //Get Place Birth
    public function CPlaceBirth()
    {
        return $this->belongsTo('App\CodeCountrie','CPlaceBirth_id' , 'id');
    }


    //Get Country Residency
    public function CCountryResidency()
    {
        return $this->belongsTo('App\CodeCountrie','CCountryResidency_id' , 'id');
    }

    // get Place Issue
    public function CPlaceIssue()
    {
        return $this->belongsTo('App\CodeCountrie','CPlaceIssue_id' , 'id');
    }


    // get Passenger
    public function PassengerAccompanying()
    {
        return $this->belongsTo('App\informationPassenger','Passenger_id' , 'id');
    }
}
