<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('phone_of_client');
            $table->string('num_automat');
            $table->string('sum_promo');
            $table->text('notice');
            $table->timestamp('expired')->nullable();
            $table->timestamp('used_promo')->nullable();
            $table->string('rand_gen');
            $table->string('appeal_status');
            $table->string('filename')->nullable();
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
        Schema::dropIfExists('appeals');
    }
}
