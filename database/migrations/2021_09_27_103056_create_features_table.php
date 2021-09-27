<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->collation = 'utf8mb4_general_ci';
            $table->bigIncrements('id');
            $table->bigInteger('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('car_models');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('car_types');
            $table->string('name', 50)->nullable();
            $table->string('title', 50)->nullable();
            $table->string('icon', 50)->nullable();
        });

        Artisan::call('db:seed', [
            '--class' => FeaturesTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
}
