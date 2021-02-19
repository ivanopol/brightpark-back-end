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
            $table->string('user_ip', 16);
            $table->dateTime('date');
            $table->string('utm_medium');
            $table->string('utm_source');
            $table->string('utm_campaign');
            $table->text('utm_term');
            $table->string('block');
            $table->string('source');
            $table->string('yclid');
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
