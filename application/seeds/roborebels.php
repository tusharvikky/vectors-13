<?php 

class Seed_roborebels extends \S2\Seed {

    public function grow()
    {
        $event = new Techfest();
        $event->permalink = 'robo-rebels';
        $event->name = 'ROBO REBELS';
        $event->tagline = '<p>Revelling under the glory of Robots with some friendly rivalry.</p>';
        $event->date = '31ST JANUARY AND 1ST FEBRUARY 2013';
        $event->spotentry = 'YES.';
        $event->reentry = 'YES.*';
        $event->certificate = '<p>Certificates of merit will be awarded to the 1st and 2nd prize winners.</p>';
        $event->manager = 'Ajinkya Shinde - +91-9870892977
                            Rohan Kulkarni - +91-9664886922
                            Chinmay Parab - +91-8097411195
                            Siddhi Mohta - +91-9702783799
                            Sangeeth Sadanand - +91-8655456841';

        $event->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 119;
    }

}