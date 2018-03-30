<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [

			'content',
			'user_id',
			'post_id',
			'status'];

public function saveComment($comment)
	{
		return $this->create($comment);
	}

			
	public function updateComment($comment)
	{
		$this->update($comment);
	}	
	
	//komentar može pripadati 1 postu
	//komentar može pripadati 1 useru
	
	
	/**
     * Get the comment user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

/**
     * Get the comment post.
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }	
}
