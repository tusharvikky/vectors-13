<?php 

class Seed_enginerd extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'engi-nerd';
        $event->name = 'ENGI-NERD';
        $event->objective = '<p>An event to test the participant’s circuit building skills and its fundamentals and get the best out of them.</p>';
        $event->tagline = '<p>Think you know your circuits, play with us. 3 grinding, mind-bending rounds that will test every aspect of circuit making you thought you knew. </p>';
        $event->fee = 'Rs.30/-';
        $event->date = '1ST FEBRUARY 2013';
        $event->time = '10.00 AM – 2.00 PM';
        $event->venue = '<p>
                            1<sup>ST</sup> ROUND- 202,203.
                        </p>
                        <p>
                            TREASURE HUNT- 2<sup>ND</sup> FLR.
                        </p>';
        $event->spotentry = 'YES (ONLY FOR 1ST ROUND)';
        $event->reentry = 'NA';
        $event->prize = 'Rs.800/-';
        $event->rules = '<ol>
                            <li>
                                Participants should be present at the venue 15min before the scheduled time.
                            </li>
                            <li>
                                The groups arriving after the start of event will be disqualified.
                            </li>
                            <li>
                                All the components related to the task will be provided to the participants during the task.
                            </li>
                            <li>
                                Cheating in any form will not be tolerated. Participants caught for cheating are liable to be disqualified.
                            </li>
                        </ol>';
        $event->certificate = '<p> Certificate of merit will be awarded to the winner and the runner-up.</p>';
        $event->manager = 'Madhura Jadhav - +91-8898264134
                           Sachin Chavan&nbsp;- +91-9773595540';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 111;
    }

}