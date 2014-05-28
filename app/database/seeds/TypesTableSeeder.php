<?php

class TypesTableSeeder extends Seeder	{
	public function run()	{
		$description = 'Lorem ipsum dolor sit amet, consetetur 	sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
		At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';
		
		for($i = 1; $i<= 5; $i++)	{
			$type = new Type;
			$type->genre = "Genre $i";
			$type->description = $description;
			$type->save();
		}
	}
}