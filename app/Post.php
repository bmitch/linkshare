<?php

namespace linkshare;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'url', 'sub_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('linkshare\User');
    }

    public function sub()
    {
        return $this->belongsTo('linkshare\Sub');
    }

    public function votes()
    {
        return $this->hasMany('linkshare\PostVote');
    }
}
