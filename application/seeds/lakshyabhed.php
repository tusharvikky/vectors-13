<?php 

class Seed_lakshyabhed extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'lakshyabhed';
        $event->name = 'LAKSHYABHED';
        $event->objective = '<p>It is a management quiz to test the participant’s corporate knowledge and decision making skills.</p>';
        $event->tagline = '<p>Do you have the calibre of a leader overflowing in you and are all set to venture into the corporate world? Dare to test your management knowledge and decision making skills?? Then this quiz is just for you…</p>';
        $event->fee = 'Rs. 30/-';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013.';
        $event->time = '10.00 AM onwards';
        $event->venue = 'SEMINAR HALL (5TH FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1500/-';
        $event->rules = '<ol>
                            <li>
                                A team can consist of only two members.
                            </li>
                            <li>
                                The event consists of 3 rounds.
                            </li>
                            <li>
                                Use of unfair means and practices will lead to immediate disqualification.
                            </li>
                            <li>
                                Other detailed rules will be explained at the venue before the game starts.
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to the winners and the runner-ups.</p>';
        $event->manager = 'Sachin Chaudhari - +91-7620724185';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 106;
    }

}