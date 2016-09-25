<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('point', function($table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('money');
            $table->string('bank');
            $table->string('transfer_name');
            $table->string('email');
            $table->string('ad_num');
            $table->string('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
