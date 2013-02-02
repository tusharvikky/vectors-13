<?php 

class Seed_cs extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'counterstrike';
        $event->name = 'COUNTERSTRIKE';
        $event->objective = '<p></p>';
        $event->fee = 'RS. 200/- PER TEAM (TEAM OF 5)';
        $event->time = '10.00 AM ONWARDS';
        $event->venue = 'COMPUTER LABS. ROOM NO.320 & 321';
        $event->prize = 'RS.5000/-';
        $event->rules = '<ol style="margin-left: 40px;">
                                <li>
                                    Shouting and screaming inside the gaming venue is strictly prohibited.
                                </li>
                                <li>
                                    The match will be 5 v/s 5.
                                </li>
                                <li>
                                    Freeze time, round time, etc will be according to WCG.
                                </li>
                                <li>
                                    First round <strong>Dust 2</strong>(race to 8)
                                </li>
                                <li>
                                    Second round <strong>Inferno</strong>(race to 10)
                                </li>
                                <li>
                                    Semi-finals and finals-Knife Toss
                                </li>
                                <li>
                                    Knife Toss for CT/Terrorist
                                </li>
                                <li>
                                    Third round <strong>Nuke</strong>(race to 12)
                                </li>
                                <li>
                                    Use of sniper is not allowed.
                                </li>
                                <li>
                                    Scrollduck is not allowed.
                                </li>
                                <li>
                                    Participants should bring their own headphones.
                                </li>
                                <li>
                                    Using pen drives is not allowed.
                                </li>
                                <li>
                                    1<sup>st</sup> round knockouts re-entry allowed.
                                </li>
                            </ol>';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 108;
    }

}