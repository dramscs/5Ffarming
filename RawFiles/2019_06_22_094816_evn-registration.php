<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EvnRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evn_registration', function (Blueprint $table) {
            $table->bigIncrements('registration_id');
            $table->integer('event_id');
            $table->string('registration_type');
            $table->string('name_title');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('occupation');
            $table->string('single_day');
            $table->string('price');
            $table->string('message');
            $table->integer('active');
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
