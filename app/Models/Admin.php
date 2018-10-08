<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $table = 'vicidial_state_call_times';

    
    protected $primaryKey = 'state_call_time_id';

    public $timestamps = false;
}
