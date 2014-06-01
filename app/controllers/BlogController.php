<?php

class BlogController extends BaseController	{
	
	public function getIndex()	{
		return View::make('index');
	}
	
	public function getAbout()	{
		return View::make('about');
	}
}