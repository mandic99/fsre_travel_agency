<?php

namespace App;

use App\User;
use Auth;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{


    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function checkAvailability($id)
    {
        $user = Auth::user();
        $trip = Trip::find($id);
        $i = 0;

        if ($user->trips[0]->id === $trip->id) {
            echo "zauzeto je";
        }
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    protected $casts = ['departure' => 'dd:mm:yy', 'arrival' => 'dd:mm:yy'];
}
