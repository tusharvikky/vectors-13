<?php 

class Seed_clickolumia extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'crick-o-lumia';
        $event->name = 'CRICK-O-LUMIA';
        $event->objective = '<p>A cricket match which is to be played in a dark room with bats and balls illuminated by radium. </p>';
        $event->tagline = '<p>The future of Cricket is Dark, literally! Get your team to play box cricket in the dark only with the help of glowing bats and balls. This is what we call taking it to the next level!</p>';
        $event->fee = 'Rs.80/- PER TEAM (TEAM OF 4)
                        COMBO With LIVE! CS Rs. 120/-';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013';
        $event->time = '11.00 AM onwards';
        $event->venue = 'ROOM NO. 020';
        $event->spotentry = 'YES';
        $event->reentry = 'YES';
        $event->prize = 'Rs.2250/-';
        $event->rules = '<ol>
                            <li>
                                A team should consist of 4 players.
                            </li>
                            <li>
                                One match lasts for 2 overs.
                            </li>
                            <li>
                                No running is allowed between wickets.
                            </li>
                            <li>
                                Umpire&rsquo;s decision will be the last decision.
                            </li>
                            <li>
                                The venue is a dark room and fluorescent material is used for participants&rsquo; badges, balls and bats.
                            </li>
                            <li>
                                All the box cricket match rules are applicable.
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificate of Merit will be awarded to only the winning team and the runner-ups.</p>';
        $event->manager = 'Vishal Gholap - +91-9664567474';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 105;
    }

}