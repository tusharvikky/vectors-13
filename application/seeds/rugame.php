<?php 

class Seed_rugame extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'are-you-game';
        $event->name = 'R U GAME?';
        $event->tagline = '<p>Get your fix of adrenaline rush with action packed games like FIFA NFS Most Wanted Dota and CS.</p>';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013';
        $event->spotentry = 'YES';
        $event->reentry = 'YES *(FIRST ROUND ONLY)';
        $event->certificate = '<p>Certificate of merit will be awarded to the winner and the runner-up.</p>';
        $event->manager = 'Sanket Patil - +91-9870032292<br>
                            Varun Ramani - +91-9867884183';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 114;
    }

}