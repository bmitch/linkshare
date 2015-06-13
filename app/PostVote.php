<?php

namespace linkshare;

use Illuminate\Database\Eloquent\Model;

class PostVote extends Model
{
    protected $table = 'post_votes';
    protected $fillable = ['type', 'user_id', 'post_id'];

    public function post()
    {
        return $this->belongsTo('linkshare\Post');
    }

    public function user()
    {
        return $this->belongsTo('linkshare\User');
    }
}
