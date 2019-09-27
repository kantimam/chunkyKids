<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');

            $table->float('calories')->default(0);

            $table->float('average_size')->default(0);

            /* unit is g for every field per 100mg*/
            $table->float('water')->default(0);
            $table->float('protein')->default(0);
            $table->float('carbohydrates')->default(0);
            $table->float('fiber')->default(0);
            $table->float('fat')->default(0);
            $table->float('cholesterol')->default(0);
            $table->float('vitamin_d')->default(0);
            $table->float('calcium')->default(0);
            $table->float('vitamin_c')->default(0);
            $table->float('folic acid')->default(0);
            $table->float('iron')->default(0);
            $table->float('zinc')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
