<?php 

class Seed_deathrace extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'death-race';
        $event->name = 'DEATH RACE';
        $event->objective = '<p>The participant’s bot will have to complete this deadly track in the shortest time to emerge as a winner.</p>';
        $event->fee = 'RS. 80/- PER TEAM (TEAM OF 2 to 4)';
        $event->time = '11.00 AM onwards';
        $event->venue = 'GROUND';
        $event->prize = 'RS. 2250/-';
        $event->rules = '<ol style="margin-left: 40px;">
                            <li>
                                <strong>Combo Offers: </strong>Entry for two events for Rs. 120/-. 
                            </li>
                            <li>
                                The dimensions of the robot should be 30&times;30 cm.</li>
                            <li>
                                The weight of the robot should be 0-5kg.</li>
                            <li>
                                Power supply will be provided. Specification: max of 24 Volts/3 Amps.</li>
                            <li>
                                Level one consists of Robo Race.</li>
                            <li>
                                Level two has Robo race with obstacles in a small war zone.</li>
                            <li>
                                Level three has Race with Voltage Drop.</li>
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