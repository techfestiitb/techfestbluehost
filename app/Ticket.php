<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public function events()
    {
        return $this->belongsToMany('App\Event','event_ticket','ticket_id','event_id');
    }
}
