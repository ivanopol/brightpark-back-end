<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtmLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utm_labels', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->collation = 'utf8mb4_general_ci';
            $table->bigIncrements('id');
            $table->string('bp_uid', 25);
            $table->string('user_ip', 16)->nullable();
            $table->dateTime('date');
            $table->string('utm_medium')->nullable();
            $table->string('utm_source')->nullable();
            $table->string('utm_campaign')->nullable();
            $table->text('utm_term')->nullable();
            $table->string('block')->nullable();
            $table->string('source')->nullable();
            $table->string('yclid')->nullable();
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
        Schema::dropIfExists('utm_labels');
    }
}
