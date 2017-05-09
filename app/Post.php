<?php

namespace App;


class Post extends Model

{

	public function comments()

	{

		return $this->hasMany(Comment::class);

	}

	    public function user()

    {

    	return $this->belongsTo(User::class);

    }
    
	public function addComment($body)

	{
		// Comments aanmaken
		$this->comments()->create(['body' => request('body'),'user_id' => auth()->id()]);
	}

  
}
