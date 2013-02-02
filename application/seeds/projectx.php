<?php 

class Seed_projectx extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'paperx';
        $event->name = 'PAPER X';
        $event->objective = '<p>To present a paper on any topic related to the technical field and answer the queries related to it in the specified time slot.</p>';
        $event->tagline = '<p>Have a revolutionary idea? Itching to get it out? Get the perfect platform with TPP. Submit your ideas and we will make sure that you get the spotlight</p>';
        $event->fee = '<p>
                            Rs.100/-(TEAM OF 2)
                        </p>
                        <p>
                            ADDITIONAL MEMBER-Rs.50/-PER HEAD
                        </p>
                        <p>
                            MAXIMUM 4 MEMBERS PER TEAM
                        </p>';
        $event->date = '31ST JANUARY 2013';
        $event->time = '9.00 AM-4.00 PM';
        $event->venue = 'SEMINAR  HALL (1ST FLR)';
        $event->spotentry = 'N A';
        $event->reentry = 'N A';
        $event->prize = 'Rs.5000/-';
        $event->rules = '<ol>
                            <li>
                                The participants enrolling for paper presentation should e-mail their full length papers and power point presentations to <strong>vectors.paperx@gmail.com</strong> by 30<sup>th</sup> Jan before 3 p.m.
                            </li>
                            <li>
                                The paper should contain full name of the topic along with name of the authors.
                            </li>
                            <li>
                                &nbsp;The participants whose papers are shortlisted will be sent a confirmation email to their respective e-mail ids.
                            </li>
                            <li>
                                All the participants are required to bring two hard copies of their paper along with them on the day of the event.
                            </li>
                            <li>
                                The entry fee for a team of maximum TWO members is Rs.200/-. If more members are included, they will be charged Rs 50/- per head. If team consists of more than 2 members, only 2 members are allowed to present. The other two will be just helping hands.
                            </li>
                            <li>
                                All the participants are requested to draft their papers in the Times New Roman font with heading of 18, sub-heading of 16, and main text of 14 and line spacing of 1.3pts.
                            </li>
                            <li>
                                The paper should contain maximum twenty pages. Papers omitting a bibliography or using plagiarized material will be automatically disqualified.
                            </li>
                            <li>
                                Each team/entrant must formally present his or her paper at the day of the event.
                            </li>
                            <li>
                                Each team/entrant will be given total time of 10 minutes i.e. 8 minutes for the presentation and 2 minutes for the question and answer round.
                            </li>
                        </ol>
                        <p>
                            Judging will be on a basis of 200, as follows:
                        </p>
                        <p>
                            <strong>A. Technical Paper (50)</strong>
                        </p>
                        <p>
                            &bull; &nbsp;&nbsp;Choice of Topic (05)
                        </p>
                        <p>
                            &bull; &nbsp;&nbsp;Technical Content (30)
                        </p>
                        <p>
                            &bull; &nbsp;&nbsp;Grammar and Spelling (05)
                        </p>
                        <p>
                            &bull; &nbsp;&nbsp;Paper Appearance and format (10)
                        </p>
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            <strong>B. Presentation (50)</strong>
                        </p>
                        <p>
                            &bull; &nbsp;&nbsp;Content (20)
                        </p>
                        <p>
                            &bull; &nbsp;&nbsp;Quality of Presentation (10)
                        </p>
                        <p>
                            &bull; &nbsp;&nbsp;Speaker Mechanics (05)
                        </p>
                        <p>
                            &bull; &nbsp;&nbsp;Question and Answer (15)
                        </p>
                        <p>
                            &nbsp;
                        </p>
                        <p>
                            All the shortlisted participants are requested to be present on 31<sup>st </sup>Jan at the venue along with hard copies sharply at 8.30 am.
                        </p>';
        $event->certificate = '<p>All the short listed participants present during the event will be given a participation certificate. Certificate of merit will be awarded to the first three position holders.</p>';
        $event->manager = 'Suyog Vispute - +91-7738677023';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 102;
    }

}