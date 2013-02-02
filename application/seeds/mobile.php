<?php 

class Seed_mobile extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'mobile-app-dev';
        $event->name = 'MOBILE APPLICATION DEVELOPMENT';
        $event->objective = '<p>An event to test the participant’s knowledge and interests of new android applications and their ideas for developing them.</p>';
        $event->tagline = '<p>Do you love using android applications and have new ideas regarding it? Then this is where you need to be…</p>';
        $event->fee = 'Rs. 30/-';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013.';
        $event->time = '10.00 AM onwards';
        $event->venue = 'CC LAB (5TH FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1000/-';
        $event->rules = '<ol>
                            <li>
                                First round of the event is an MCQ round on android operating system.
                            </li>
                            <li>
                                The questionnaire will have 30 questions to be answered in 15 min.
                            </li>
                            <li>
                                Cheating will not be tolerated. If caught participants are liable to be disqualified.
                            </li>
                            <li>
                                Subsequent rounds include creation of GUI for specified topics, conveying their ideas regarding android applications and a group discussion.
                            </li>
                            <li>
                                <strong>Rules may change withour proir notice</strong>
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificates of merit will be awarded to the 1st and 2nd prize winners and the 3 runner-ups.</p>';
        $event->manager = 'Nikhil Mhatre - +91-9022944344
                            Nilesh Chakraborty - +91-9594946689';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 115;
    }

}