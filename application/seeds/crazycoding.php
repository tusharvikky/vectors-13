<?php 

class Seed_crazycoding extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'crazy-coding';
        $event->name = 'CRAZY CODING';
        $event->objective = '<p>It consists of various rounds to test the participant’s coding skills.</p>';
        $event->tagline = '<p>Do you have it in you to be the future Bill Gates?! Mark Zuckerberg?! Enter the world of our crazy coding…</p>';
        $event->fee = 'Rs. 30/-';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013.';
        $event->time = '10.00 AM onwards';
        $event->venue = 'OS LAB (5TH FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1000/-';
        $event->rules = '<ol>
                            <li>
                                Coding should be done in C, C++ and Java.
                            </li>
                            <li>
                                Participants are not allowed to carry any CD, pen drive or any other storage device.
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to the 1st and 2nd prize winners and the 3 runner-ups.</p>';
        $event->manager = 'Vidhya Nair - +91-9022580042
                            Shweta Pawar  - +91-9028720700';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 117;
    }

}