<?php 

class Seed_race extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'regain-race';
        $event->name = 'REGAIN RACE';
        $event->objective = '<p>To check the participant’s awareness regarding the brands and their founders.</p>';
        $event->tagline = '<p>The world is certainly bustling with brands and brand makers… If you dream of having a brand of your own someday, you’ll find it hard to ignore the others. This quiz is to check if you are a connoisseur of brands, which have transformed our lives…</p>';
        $event->fee = 'Rs. 20/-';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013.';
        $event->time = '10.00 AM onwards';
        $event->venue = 'SEMINAR HALL (5TH FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1500/-';
        $event->rules = '<ol>
                            <li>
                                The event consists of 3 rounds.
                            </li>
                            <li>
                                Only individual participants are allowed.
                            </li>
                            <li>
                                Participants will be judged on the basis of their knowledge of brands.
                            </li>
                            <li>
                                Use of unfair means and practices will lead to immediate disqualification.
                            </li>
                            <li>
                                Other detailed rules will be explained at the venue before the game starts.
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to the winner and the runner-up.</p>';
        $event->manager = 'Saphalta Palve - +91-8097740200';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 107;
    }

}