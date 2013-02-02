<?php 

class Seed_dozers extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'dozers';
        $event->name = 'DOZERS';
        $event->objective = '<p>The participant’s bot will have to pick, drag and drop the ball into the goal to be the winner.</p>';
        $event->tagline = '<p>Collect items with your robot as you are pitted against another doing the same!</p>';
        $event->fee = 'RS. 80/- PER TEAM (TEAM OF 2 to 4)';
        $event->time = '11.00 AM onwards';
        $event->venue = 'GROUND and 002.';
        $event->prize = 'RS. 2250/-';
        $event->rules = '<ol style="margin-left: 40px;">
                            <li>
                                <strong>Combo Offers: </strong>Entry for two events for Rs. 120/-. 
                            </li>
                            <li>
                                A team can consist of only four players.</li>
                            <li>
                                The dimensions of the robot should be 30&times;30 cms.</li>
                            <li>
                                The weight of the robot should be 0-5kg.</li>
                            <li>
                                Power supply will be provided. Specification: max of 24 Volts/3 Amps.</li>
                            <li>
                                Only RACE-ROBO is allowed.</li>
                            <li>
                                First round is the elimination round.</li>
                            <li>
                                No weapons are allowed.</li>
                            <li>
                                Judges decision will be final.</li>
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