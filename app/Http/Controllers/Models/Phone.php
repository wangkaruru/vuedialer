<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    /**
     * @var string
     */
    public $table='phones';
    protected $primaryKey = 'extension';

   public function scopeActive($query)
    {
        return $query->where('active', 'Y');

    }
   }

