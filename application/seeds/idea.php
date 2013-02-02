<?php 

class Seed_idea extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'what-an-idea-sirjee';
        $event->name = 'WHAT AN IDEA SIRJEE!';
        $event->objective = '<p>An event to see how participants react to the challenges given, accept the dares and come out with the best product. </p>';
        $event->tagline = '<p>Are you brimming with clever, creative ideas to create a product and market it? This event will provide you a fabulous platform to bring out the genius in you…</p>';
        $event->fee = 'Rs. 50/-';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013.';
        $event->time = '10.00 AM onwards';
        $event->venue = 'SEMINAR HALL (5TH FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1500/-';
        $event->rules = '<ol>
                            <li>
                                A team can consist of only 2-3 members.</li>
                            <li>
                                The event consists of 3 rounds.</li>
                            <li>
                                Raw materials to make the product will be provided at the start of the event.</li>
                            <li>
                                Incomplete work will not be considered.</li>
                        </ol>
                        <p>
                            &nbsp;</p>
                        <p>
                            <strong>JUDGING CRITERIA:</strong></p>
                        <ol style="list-style-type:lower-alpha;">
                            <li>
                                Profit earned</li>
                            <li>
                                Time consumed</li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to the winner and the runner-up.</p>';
        $event->manager = 'Nutan Hinge - +91-9833496112';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 108;
    }

}