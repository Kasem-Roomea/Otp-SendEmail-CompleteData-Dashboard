<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomStay extends Model
{
    protected $guarded=[];

    // get Passenger
    public function PassengerRoom()
    {
        return $this->belongsTo('App\informationPassenger','Passenger_id' , 'id');
    }
}
