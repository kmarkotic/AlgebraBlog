<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
<<<<<<< HEAD
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
	
=======
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
					'content',
					'user_id',
					'post_id',
					'status'];
					
	 /**
     * Save new Comment.
     *
     * @param array $comment
	 * @return object Comment
     */
	 
	public function saveComment($comment)
	{
		return $this->create($comment);
	}
	
	/**
     * Update Comment.
     *
     * @param array $comment
	 * @return void
     */
	 
	public function updateComment($comment)
	{
		$this->update($comment);
	}
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
	
	/**
     * Get the comment user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
<<<<<<< HEAD

/**
=======
	
	/**
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
     * Get the comment post.
     */
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
<<<<<<< HEAD
    }	
}
=======
    }
}





>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
