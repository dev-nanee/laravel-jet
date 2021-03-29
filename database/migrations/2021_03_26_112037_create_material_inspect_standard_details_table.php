<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialInspectStandardDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_inspect_standard_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('material_inspect_standard_id');
            $table->char('type',1);
            $table->text('name',1000);
            $table->integer('decimal_point_amount')->nullable();
            $table->integer('sample_amount')->nullable();
            $table->float('minimum_value')->nullable();
            $table->float('standard_value')->nullable();
            $table->float('maximum_value')->nullable();
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
        Schema::dropIfExists('material_inspect_standard_details');
    }
}
