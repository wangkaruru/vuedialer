<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{

    /**
     * @var string
     */
    protected $primaryKey = 'server_id';

    /**
     * @var string
     */
    public $table = 'servers';

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', 'Y');

    }
}
