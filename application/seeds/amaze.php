<?php 

class Seed_amaze extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'a-maze';
        $event->name = 'A-MAZE';
        $event->objective = '<p>The bot will have to get out of the maze in the least time with the aid of camera fitted onto it.</p>';
        $event->tagline = '<p></p>';
        $event->fee = 'RS. 50 PER HEAD';
        $event->time = '10.00 AM onwards';
        $event->venue = 'Room # 001';
        $event->prize = 'RS. 2250/-';
        $event->rules = '<ol style="margin-left: 40px;">
                            li>
                                <strong>Combo Offers available. <sup>*</sup> Contact Event Managers.</strong>. 
                            </li>
                            <li>
                                In the first round, participants will have to solve the maze in minimum time by crossing check points. The game will be held in dark room. Participants will be able to view the track by the LEDs arranged.</li>
                            <li>
                                Participants have to solve the maze memorizing the path. The operator will see the track on a display screen with the help of a web cam on the robot in presence of dim light. Companion of the operator will guide him through the maze.</li>
                            <li value="3">
                                A team can have two participants.</li>
                            <li value="4">
                                Robots will be provided by us.</li>
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