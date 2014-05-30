<?php

class TypeController extends BaseController	{
	
	public function listType()	{
		$types = Type::all();
		return View::make('types.index')
			->with('types', $types);
	}
	
	public function showType(Type $type)	{
		return View::make('types.single')
			->with('type', $type);
	}
}