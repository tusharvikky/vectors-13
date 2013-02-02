<?php 

class Seed_technopoly extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'technopoly';
        $event->name = 'TECHNOPOLY';
        $event->objective = '<p> A mind boggling event of technical quiz combined with monopoly where the participants will have to answer technical questions to move forward in the game. </p>';
        $event->tagline = '<p>A conventional technical quiz, with some unconventional points system like that of in monopoly and real unconventional fun.</p>';
        $event->fee = 'Rs. 20/- Per Head (Team of 2)';
        $event->date = '31ST JANUARY 2013 AND 1ST FEBRUARY 2013';
        $event->time = '1.00 PM onwards';
        $event->venue = 'GROUND ';
        $event->spotentry = 'YES (ONLY FOR 1ST ROUND)';
        $event->reentry = 'NA';
        $event->prize = 'Rs.1050/-  ';
        $event->rules = '<ol>
                            <li>
                                Each team consists of 2 members.
                            </li>
                            <li>
                                The event consists of three rounds.
                            </li>
                            <li>
                                1<sup>st</sup> round will have general knowledge questions and the subsequent rounds will consist of technical questions.
                            </li>
                            <li>
                                Points of 2<sup>nd</sup> and 3<sup>rd</sup> rounds are added to declare the winner.
                            </li>
                            <li>
                                The game of monopoly will be played with two dice; one for going ahead and the other for question no.
                            </li>
                        </ol>
                        <p>
                            <strong>BLOCK RULES:</strong>
                        </p>
                        <ol>
                            <li>
                                Blank box: No question will be asked.
                            </li>
                            <li>
                                Jail: Either miss a turn or&nbsp; lose 5 points
                            </li>
                            <li>
                                Bonus block :+10 points
                            </li>
                            <li>
                                Danger block: -10 points
                            </li>
                            <li>
                                Go-to-back box
                            </li>
                            <li>
                                Move-some-steps box
                            </li>
                            <li>
                                Swap box
                            </li>
                        </ol>';
        $event->certificate = '<p>Certificate of merit will be awarded to the winner and the runner-up.</p>';
        $event->manager = 'Sonali Narwadkar - +91-9769770969';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 113;
    }

}