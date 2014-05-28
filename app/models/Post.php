<?php

class Post extends Eloquent	{
	public function type()	{
		return $this->belongsTo('Type');
	}
}