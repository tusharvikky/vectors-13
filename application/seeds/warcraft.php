<?php 

class Seed_warcraft extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'warcraft-dota';
        $event->name = 'WARCRAFT';
        $event->objective = '<p></p>';
        $event->tagline = '<p></p>';
        $event->fee = 'RS. 200/- PER TEAM(TEAM OF 5)';
        $event->time = '10.00 AM ONWARDS';
        $event->venue = 'COMPUTER LABS. ROOM NO.320 &321';
        $event->prize = 'RS.5000/-';
        $event->rules = '<ol style="margin-left: 40px;">
                                <li>
                                    Team of 5.
                                </li>
                                <li>
                                    Till semis the match will be of 30 min.
                                </li>
                                <li>
                                    Re-entry will be only for first round knock-out.
                                </li>
                                <li>
                                    Back dooring not allowed.
                                </li>
                                <li>
                                    In case of a draw, winner will be decided using hero kill, tower kill, towerdeny.
                                </li>
                            </ol>';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 108;
    }

}