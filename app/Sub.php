<?php

namespace linkshare;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    protected $table = 'subs';
    protected $fillable = ['name', 'owner_id'];

    public function posts()
    {
        return $this->hasMany('linkshare\Post');
    }

    public function owner()
    {
        return $this->belongsTo('linkshare\User');
    }
}
