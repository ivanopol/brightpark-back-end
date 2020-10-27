<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_cities', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->collation = 'utf8mb4_general_ci';
            $table->bigInteger('seo_id')->unsigned();
          //  $table->foreign('seo_id')->references('id')->on('seo')->onDelete('cascade');
            $table->integer('city_id');
            $table->unique(['seo_id', 'city_id']);
        });

        Artisan::call('db:seed', [
            '--class' => SeoCitiesTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_cities');
    }
}
