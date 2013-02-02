<?php 

class Seed_employed extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'status-employed';
        $event->name = 'STATUS: EMPLOYED';
        $event->objective = '<p>It is a technical event which aims at preparing Graduate candidates for campus interview. The event will have three sections APTITUDE, GROUP DISCUSSION & PERSONAL INTERVIEW.</p>';
        $event->tagline = '<p>A complete dress rehearsal for your job quest replete with challenging aptitude test, a thought crunching Group Discussion and a gut wrenching personal interview.</p>';
        $event->fee = 'Rs.30/-';
        $event->date = '1ST FEBRUARY 2013';
        $event->time = '<p>
                            APTI-10.00 AM-12.00 PM
                        </p>
                        <p>
                            GD-1.00 PM-2.30 PM
                        </p>
                        <p>
                            PI-3.00 PM onwards
                        </p>';
        $event->venue = '<p>
                            APTI- Room # 102-104
                        </p>
                        <p>
                            GD- TPO Cell
                        </p>
                        <p>
                            PI- F.E HOD Cabin
                        </p>';
        $event->spotentry = 'YES';
        $event->reentry = 'NA';
        $event->prize = 'Rs.1250/-';
        $event->rules = '<ol>
                            <li>
                                All participants are requested to be present at the venue on 1<sup>st</sup> Feb sharply at 10:00.</li>
                            <li>
                                Round one will be APTI which will consist of sections like Quantitative, Verbal, Logical reasoning, etc. Approximately 1 hour will be given to solve the questions.</li>
                            <li>
                                Round Two will be GD in which a topic will be given on the spot &amp; 10 min. preparation time will be given.</li>
                            <li>
                                Round Three will be PI in which technical &amp; logical questions will be asked.</li>
                            <li>
                                A minimum qualification for each section is required to clear APTI which will be mentioned at the start of the event.</li>
                            <li>
                                In GD, candidates are required to express their views and not debate with others. If candidates debate or argue with anyone then they will be disqualified.&nbsp;</li>
                            <li>
                                Organizers can change rules according to the need of the event. Decision of the judges will be final and binding on everyone.</li>
                        </ol>
                        <p>
                            <strong>GD ethics:&nbsp;</strong></p>
                        <p>
                            &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Slang will be allowed during GD.</p>
                        <p>
                            &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Formal Language should be used in GD.</p>
                        <p>
                            &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Blocking during GD.</p>
                        <p>
                            <strong>Judging Criteria:</strong></p>
                        <p>
                            &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Good Communication skills.</p>
                        <p>
                            &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Formal attire.</p>
                        <p>
                            &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knowledge about the topic</p>
                        <p>
                            &middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Suggesting innovative solutions to the problem.</p>';
        $event->certificate = '<p>Certificate of merit will be awarded to only the winner and the runner-up and Certificate of Appreciation will be awarded to those selected for PI.</p>';
        $event->manager = 'Suyog Vispute - +91-7738677023';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 103;
    }

}