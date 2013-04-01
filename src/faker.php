<?php

class Faker {

	public static function make($locale = 'en_US')
	{
		return Faker\Factory::create($locale);
	}

}