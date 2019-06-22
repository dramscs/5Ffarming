<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Speakers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('speakers', function($table)
            {
                $table->increments('speaker_id');
                $table->string('name')->index();
                $table->string('designation')->nullable();
                $table->string('avatar');
                $table->string('active');
                $table->timestamps();

            });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
