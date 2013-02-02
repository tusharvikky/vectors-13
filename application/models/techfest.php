<?php

class Techfest extends Eloquent 
{
	public static $timestamps = true;
	public static $table = 'techfest';

	public function seed()
	{
		$event = new Event();
        $event->permalink = 'tech-da-vinci';
        $event->name = 'Tech Da Vinci';
        $event->objective = 'To present a technical poster based on the given topic.';
        $event->fee = 'Rs. 50/- Per Team (Team of 2)';
        $event->date = '1st February 2013';
        $event->time = '1:00 PM Onwards';
        $event->venue = 'Seminar Hall (3rd Floor)';
        $event->spotentry = 'NA';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1500/-';
        $event->rules = 'some rules';
        $event->certificate = 'some text';
        $event->manager = 'manager';

        $event->save();
	}

}