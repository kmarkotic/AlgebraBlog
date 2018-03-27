<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

 
class Post extends Model
{
	use Sluggable;
	 
    protected $fillable = [

			'title',
			'content',
			'user_id'];

				/**
				*Update Post.
				*
				*@param array $post
				*@return void
				*ako metoda nista ne vrati stavimo void
				*/
	public function updatePost($post)
	{
		$this->update($post);
	}
					
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
     * Get the user posts.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
