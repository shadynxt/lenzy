<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ads', function($table) {
            $table->increments('id');
            $table->string('ad_title');
            $table->integer('section_id');
            $table->integer('city_id');
            $table->integer('make_id');
            $table->integer('model_id');
            $table->integer('year_id');
            $table->string('lat');
            $table->string('long');
            $table->integer('aqar_type');
            $table->string('ad_tags');
            $table->integer('ad_status');
            $table->string('ad_contact');
            $table->integer('user_id');
            $table->integer('ad_allow');
            $table->integer('allow_comment');
            $table->integer('ad_paned');
            $table->text('image');
            $table->text('description');
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
