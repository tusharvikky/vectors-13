<?php

class Create_Techfest_Table {    

	public function up()
    {
		Schema::create('techfest', function($table) {
			$table->increments('id');
			$table->string('permalink');
			$table->string('name');
			$table->string('objective')->nullable();
			$table->text('tagline')->nullable();
			$table->text('fee')->nullable();
			$table->string('date');
			$table->text('time')->nullable();
			$table->string('venue')->nullable();
			$table->string('spotentry');
			$table->string('reentry');
			$table->string('prize')->nullable();
			$table->text('rules')->nullable();
			$table->string('certificate');
			$table->text('manager');
			$table->timestamps();
			$table->unique('permalink');
	});

    }    

	public function down()
    {
		Schema::drop('techfest');

    }

}