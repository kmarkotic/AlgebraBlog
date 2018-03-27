<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
<<<<<<< HEAD
use Sluggable;
 
class Post extends Model
{
	
	 /**
=======

class Post extends Model
{
	use Sluggable;
	
     /**
>>>>>>> 05ef1a9da8996592e5b038c73eddc83c07cbd3df
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
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
		$this->update($post)
	}
	
	
	
=======
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
>>>>>>> 05ef1a9da8996592e5b038c73eddc83c07cbd3df

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
<<<<<<< HEAD
	 
=======
>>>>>>> 05ef1a9da8996592e5b038c73eddc83c07cbd3df
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
