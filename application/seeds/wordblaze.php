<?php 

class Seed_wordblaze extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'wordblaze';
        $event->name = 'WORD BLAZE';
        $event->objective = '<p>Participants have to present a technical essay online to express their opinion on a given topic. Participants will then be called for subsequent rounds of discussion and debate if their essay is impressive.</p>';
        $event->tagline = '<p>Do you have strong opinions on technical related issues and are fearless to express them?! We are looking forward to give your words more power and discuss them with us…</p>';
        $event->fee = 'Rs. 20/- ';
        $event->date = '31st January & 1st February 2013';
        $event->time = '<strong>DAY 1:</strong>
                         2<sup>nd</sup> Round - 11.00 AM - 12.00 PM
                        3<sup>rd</sup> Round - 2.30 PM - 3.30 PM
                        <strong>DAY 2: </strong>
                        Final Round - 11.00 AM -12.00 PM
                        ';
        $event->venue = '<strong>DAY 1:</strong>204
                        <strong>DAY 2:</strong>AC Seminar Hall';
        $event->spotentry = 'N A';
        $event->reentry = 'N A';
        $event->prize = 'Rs. 800/-';
        $event->rules = '<ol>
                            <li>
                                Word limit: 300-400 words</li>
                            <li>
                                The topic for the essay will be declared on 29<sup>th</sup> Jan at 9:00 am either through email or SMS.</li>
                            <li>
                                Participants will have to mail their essays on 30<sup>th</sup> Jan before 10:00 am.</li>
                            <li>
                                Participants qualified for the next round of discussion will be informed by 6:00 pm on 30<sup>th</sup> Jan.</li>
                            <li>
                                It is mandatory for participants to send their mails along with their name, college, year and branch. Mails without the participant&rsquo;s name, college, year and branch will be disqualified</li>
                            <li>
                                Weightage will be given to a grammatically error-free and comprehendible language while judging the essays.</li>
                            <li>
                                Essays not adhering to the word limit will be disqualified.</li>
                            <li>
                                All shortlisted participants are requested to be present at the venue on 31<sup>st</sup> Jan sharply at 10:45 a.m.</li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to only the winner and the 1st runner-up.</p>';
        $event->manager = 'Shruthi S.- +91-9920019790<br>
                            Himani Singh - +91-9022569594';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 101;
    }

}