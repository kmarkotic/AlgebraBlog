<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Sluggable;
 
class Post extends Model
{
	
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
}
