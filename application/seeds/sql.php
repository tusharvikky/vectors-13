<?php 

class Seed_sql extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'mission-sql';
        $event->name = 'MISSION SQL';
        $event->objective = '<p>Participants are tested on their knowledge of databases through questions and are supposed to create database for a system.</p>';
        $event->tagline = '<p>Entity, relationships, constraints, tuples, queries…sounds familiar?? You think you have the knack to work with databases? Be ready to do all you can, right from answering simple questions to executing complex queries. Be a part of Mission SQL…Join the Tables…Press the Trigger...and Fire the Queries! </p>';
        $event->fee = 'Rs. 30/-';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013.';
        $event->time = '10.00 AM onwards';
        $event->venue = 'DB LAB (5TH FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1000/-';
        $event->rules = '<ol>
                            <li>
                                In the first round, participants are asked to draw the E-R diagram for a given system and answer simple SQL related MCQs.
                            </li>
                            <li>
                                In the second round, participants will have to create a database for a system and solve simple queries.
                            </li>
                            <li>
                                In the third round, participants will have to solve questions with the created database and queries with procedure and trigger.
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to the 1st and 2nd prize winners and the 3 runner-ups.</p>';
        $event->manager = 'Rajesh Bhanushali - +91-9022121253
                            Tanya Rastogi  - +91-9867142445';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 118;
    }

}