<?php 

class Seed_survival extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'survival-smartest';
        $event->name = 'SURVIVAL OF THE SMARTEST';
        $event->objective = '<p>The participants have to excel in a given task to go to the next round else withstand the eliminations. The task can be either a technical or a normal one.</p>';
        $event->tagline = '<p>We want to test your agility....mental and physical! A task oriented game that will test how well you flex your muscles and the depth of your Gray Matter.</p>';
        $event->fee = 'Rs.30/-';
        $event->date = '31ST JANUARY 2013';
        $event->time = '10.00 AM onwards';
        $event->venue = 'SEMINAR HALL (3RD FLR)';
        $event->spotentry = 'NA';
        $event->reentry = 'NA';
        $event->prize = 'Rs.800/-';
        $event->rules = '<ol>
                            <li>
                                Elimination rounds of events will be on the basis of vote system.
                            </li>
                            <li>
                                Every round will have different modified rules.
                            </li>
                            <li>
                                Organisers will form random groups for different rounds.
                            </li>
                            <li>
                                Finale will be between the two finalists.
                            </li>
                        </ol>';
        $event->certificate = '<p>The participants have to excel in a given task to go to the next round else withstand the eliminations. The task can be either a technical or a normal one.</p>';
        $event->manager = 'Ruchira Jundare - +91-8097023802';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 110;
    }

}