<?php 

class Seed_beg extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'beg-borrow-deal';
        $event->name = 'BEG, BORROW, DEAL';
        $event->objective = '<p>An event to test the participant’s negotiation skills in a short quality of time.</p>';
        $event->tagline = '<p>The art of negotiating is not everybody’s piece of cake. But once mastered, it can take you through a rising projectile... This event lets you discover this skill in you… </p>';
        $event->fee = 'Rs. 30/-';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013.';
        $event->time = '10.00 AM onwards';
        $event->venue = 'SEMINAR HALL (5TH FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1500/-';
        $event->rules = '<ol>
                            <li>
                                List of products will be presented to the participants.</li>
                            <li>
                                Participants will have to find the products present in college campus and obtain them through begging, borrowing or dealing.</li>
                            <li>
                                Physical persuasion will not be tolerated.</li>
                            <li>
                                Other detailed rules will be explained at the venue before the game starts</li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to the winner and the runner-up.</p>';
        $event->manager = 'Sheetal Rawat - +91-7303750385';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 109;
    }

}