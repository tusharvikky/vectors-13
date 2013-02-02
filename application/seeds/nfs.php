<?php 

class Seed_nfs extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'nfs-most-wanted';
        $event->name = 'NFS MOST WANTED';
        $event->objective = '<p></p>';
        $event->tagline = '<p></p>';
        $event->fee = 'RS. 35/-';
        $event->time = '10.00 AM ONWARDS';
        $event->venue = 'COMPUTER LABS. ROOM NO.320 &321';
        $event->prize = 'RS. 1500/-';
        $event->rules = '<ol style="margin-left: 40px;">
                                <li>
                                    Only 4 players can participate in a race.
                                </li>
                                <li>
                                    Same cars will be provided to all participants.
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