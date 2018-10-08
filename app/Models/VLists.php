<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VLists extends Model
{
    /**
     * @var string
     */
    public $table = 'vicidial_lists';

    /**
     * @var string
     */
    protected $primaryKey = 'list_id';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', 'Y');

    }

}
