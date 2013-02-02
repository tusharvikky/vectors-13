<?php 

class Seed_technohunt extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'technohunt';
        $event->name = 'TECHNOHUNT';
        $event->objective = '<p>It is a team event where participants will have to hunt for clues at different locations in our campus and solve the code and unlock a file which will consequently lead them to another location.</p>';
        $event->tagline = '<p>The thrill of treasure hunt combined with the skills of coding..!! Put your thinking shoes and come, be a part of this amazing race…</p>';
        $event->fee = 'Rs.100/- PER TEAM (TEAM OF 2)';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013';
        $event->time = '10.00 AM onwards';
        $event->venue = 'CC LAB (5TH FLR)';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs.2000/-';
        $event->rules = '<ol>
                            <li>
                                Only two participants are allowed per team.
                            </li>
                            <li>
                                Each team will get a particular set of clues.
                            </li>
                            <li>
                                They are not allowed to read or touch the clues of other teams. If caught doing so, they will be disqualified.
                            </li>
                            <li>
                                They will be given 20-25 min to complete their hunt and reach their final destination.
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to the 1st and 2nd prize winners and the 3 runner-ups.</p>';
        $event->manager = 'Ragil Pillai - +91-9172955979';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 116;
    }

}