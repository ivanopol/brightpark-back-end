<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_about', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->collation = 'utf8mb4_general_ci';
            $table->bigIncrements('id');
            $table->bigInteger('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('car_models');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('car_types');
            $table->string('image');
            $table->string('image_mobile');
            $table->string('title');
            $table->text('description');
            $table->string('type', 10);
        });

        Artisan::call('db:seed', [
            '--class' => ModelAboutTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_about');
    }
}
