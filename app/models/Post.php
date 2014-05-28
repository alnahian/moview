<?php

class Post extends Eloquent	{
	protected $fillable = array('title', 'content', 'type_id');
	public function type()	{
		return $this->belongsTo('Type');
	}
}