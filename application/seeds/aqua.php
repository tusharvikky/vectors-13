<?php 

class Seed_aqua extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'aquabotics';
        $event->name = 'AQUABOTICS';
        $event->objective = '<p>Participants will have to complete the track controlling their robot on water in the shortest time and grab the prize.</p>';
        $event->tagline = '<p></p>';
        $event->fee = 'RS. 80 (Team of 2)';
        $event->time = '11.00 AM onwards';
        $event->venue = 'GROUND';
        $event->prize = 'RS. 2250/-';
        $event->rules = '<ol style="margin-left: 40px;">
                            <li>
                                <strong>Combo Offers available. <sup>*</sup> Contact Event Managers.</strong>. 
                            </li>
                            <li>
                                The participant will drive a wireless remote controlled boat, on a specific path, in a pool.</li>
                            <li>
                                The operator will have to move the obstacles into the given place in the arena and then move to the next obstacle and eventually complete the race.</li>
                            <li>
                                The arena will be such that it will test the navigation steering and controlling capability of the operator.</li>
                            <li>
                                The team completing the task in least amount of time wins.</li>
                            <li>
                                A team will have 2 participants.</li>
                            <li>
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