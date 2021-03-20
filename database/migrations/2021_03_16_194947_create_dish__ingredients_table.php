<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish__ingredients', function (Blueprint $table) {
            $table->id();
            $table->integer('dish_id');
            $table->integer('ingredient_id');
            $table->double('quantity')->nullable()->default(null);
            $table->string('unit')->nullable()->default(null);
            $table->longText('quote')->nullable()->default(null);
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
        Schema::dropIfExists('dish__ingredients');
    }
}
