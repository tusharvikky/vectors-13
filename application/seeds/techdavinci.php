<?php 

class Seed_techdavinci extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'tech-da-vinci';
        $event->name = 'TECH DA VINCI';
        $event->objective = 'To present a technical poster based on the given topic.';
        $event->tagline = '<p>Got a penchant for art, but want to stay a techie? This is the outlet you were looking for. Make posters with a technical idea, the brightest and most colourful idea wins.</p>';
        $event->fee = 'Rs. 50/- Per Team (Team of 2)';
        $event->date = '1st February 2013';
        $event->time = '1:00 PM Onwards';
        $event->venue = 'Seminar Hall (3rd Floor)';
        $event->spotentry = 'NA';
        $event->reentry = 'NA';
        $event->prize = 'Rs. 1500/-';
        $event->rules = '<ol>
                            <li>
                                Any technical topic can be chosen by the participants and they need to mail an abstract of the same to techdavinci.vectors@gmail.com two days prior to the event i.e. on 29th January by 6 p.m.
                            </li>
                            <li>
                                A template/layout of the poster and its ideal size (dimensions) will then be mailed to the participant&rsquo;s email-id at the above mentioned date and time.
                            </li>
                            <li>
                                Only 2 participants are allowed in a group.
                            </li>
                            <li>
                                Participants will have to carry their posters, completed in all aspects, on the day of the event i.e. on 1st February.
                            </li>
                            <li>
                                Participants are required to present their posters in front of the judges and explain its contents.
                            </li>
                            <li>
                                The final decision will be taken by the jury and it is left at their discretion.
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to only the winner and the runner-up.</p>';
        $event->manager = 'Anurag Raj - +91-9920104866';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 100;
    }

}