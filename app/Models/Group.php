<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * @var string
     */
    protected $fillable = ['group_name'];

    /**
     * @var array
     */
    protected $guarded = [];


    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */
    public $table = 'vicidial_user_groups';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userGroups()
    {
        return $this->belongsToMany(User::class);
    }
}
