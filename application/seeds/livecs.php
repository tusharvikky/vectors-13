<?php 

class Seed_livecs extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'live-cs';
        $event->name = 'LIVE! CS';
        $event->objective = '<p>A live version of the famous game COUNTER-STRIKE</p>';
        $event->tagline = '<p>Lock and load, as you wind your way through the dark dodging mines while you get to your enemies with armed with your LASER guns.</p>';
        $event->fee = 'Rs.80/- PER TEAM (TEAM OF 4)';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013';
        $event->time = '11.00 AM onwards';
        $event->venue = 'DRAWING HALL (GROUND FLR), ADDITIONAL WORKSHOP-l (GROUND FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'YES';
        $event->prize = 'Rs.2250/-';
        $event->rules = '<ol>
                            <li>
                                The game consists of 4 terrorists and 4 counter terrorist.</li>
                            <li>
                                Each game lasts for 5-6mins.</li>
                            <li>
                                Every player gets a laser gun, jacket with sensor circuit.</li>
                            <li>
                                Anybody found covering sensor circuit will be disqualified immediately.</li>
                            <li>
                                Bomb will be given to all the terrorists.</li>
                            <li>
                                Once the player is killed, he must step out of the venue.</li>
                            <li>
                                No physical contact/violence is tolerated.</li>
                            <li>
                                Any loss in CSL property has to be paid in fine.</li>
                            <li>
                                If terrorist group fails to deploy bomb within a time, counter terrorist will be declared as winner.</li>
                            <li>
                                Map will be given to all the players.</li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to only winners and 1st runner-ups.</p>';
        $event->manager = 'Pradeep Jena - +91-8976191305
                            Shivam Bhatia - +91-9664293795';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 104;
    }

}