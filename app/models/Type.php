<?php

class Type extends Eloquent	{
	public $timestamps = false;
	public function posts()	{
		return $this->hasMany('Post');
	}
}