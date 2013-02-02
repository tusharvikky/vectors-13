<?php 

class Seed_techmela extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'tech-mela';
        $event->name = 'TECH MELA';
        $event->objective = '<p>A fun fair consisting of a variety of technical but entertaining events with on the spot prize money transaction.</p>';
        $event->tagline = '<p>Bringing to you the Great Indian Mela with a technical twist with a melange of games, it’s a win-win for you as you select the game you want to play.</p>';
        $event->fee = 'Combo Pack for Rs30/-
                        <ul>
                            <li>
                                3 events of Rs 5/-
                            </li>
                            <li">
                                2 events of Rs10/-
                            </li>
                        </ul>
                            Combo Pack for Rs50/-
                        <ul>
                            <li>
                                4 events of Rs 5/-
                            </li>
                            <li>
                                4 events of Rs10/-
                            </li>
                        </ul>
                            Combo Pack for Rs100/-
                        <ul>
                            <li>
                                all events (only first level)
                            </li>
                        </ul>';
        $event->date = '31st January & 1st February';
        $event->time = '10:00 AM Onwards';
        $event->venue = '1st Floor - Open Space';
        $event->spotentry = 'NA';
        $event->reentry = 'NA';
        $event->prize = 'NA';
        $event->rules = '<ol>
                            <li>
                                The fair will comprise of 16 events at different locations all over the college.
                            </li>
                            <li>
                                The events are fun games with a technical twist.
                            </li>
                            <li>
                                Entry fee for an event will be only for a single game.
                            </li>
                            <li>
                                Rules of the events will be explained to the participants by their respective organisers.
                            </li>
                            <li>
                                Cheating will not be tolerated.
                            </li>
                            <li>
                                A few events amongst these are as follows:
                            </li>
                        </ol>Ohm G!, Catapult, Shoot out at ACPCE, Strike zero voltage, Paper ka pilot.';
        $event->certificate = '<p></p>';
        $event->manager = 'Sandesh Jadhav - +91-9029456762
                            Anil Bamane - +91-9029795013';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 112;
    }

}