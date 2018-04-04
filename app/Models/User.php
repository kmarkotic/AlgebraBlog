<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
     /**
     * Get the user posts.
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
	
<<<<<<< HEAD
	/**
=======
	 /**
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
     * Get the post comments.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
<<<<<<< HEAD
	
=======
>>>>>>> 05c82859e20c4184de9d50b4ad0cb93423e4a928
}
