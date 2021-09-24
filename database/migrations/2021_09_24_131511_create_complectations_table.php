<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complectations', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->collation = 'utf8mb4_general_ci';
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('car_models');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('car_types');
            $table->string('engine', 20);
            $table->string('flap', 20);
            $table->string('capacity', 20);
            $table->string('transmission', 20);
            $table->string('title', 100);
            $table->integer('price')->unsigned();
            $table->tinyInteger('sort')->unsigned();
        });

        Artisan::call('db:seed', [
            '--class' => ComplectationTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complectations');
    }
}
