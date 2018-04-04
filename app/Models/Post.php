<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
	use Sluggable;
	
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
					'title',
					'content',
					'user_id'];
					
	 /**
     * Save new Post.
     *
     * @param array $post
	 * @return object Post
     */
	 
	public function savePost($post)
	{
		return $this->create($post);
	}
	
	/**
     * Update Post.
     *
     * @param array $post
	 * @return void
     */
	 
	public function updatePost($post)
	{
		$this->update($post);
	}

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
	
	 /**
     * Get the post user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
	
<<<<<<< HEAD
	/**
     * Get the user comments.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->where('status',1);
    }
	
=======
	 /**
     * Get the post comments.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->where('status', 1);
    }
	
	 /**
     * Get the post comments.
     */
    public function pendingComments()
    {
        return $this->hasMany('App\Models\Comment');
    }
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
}





