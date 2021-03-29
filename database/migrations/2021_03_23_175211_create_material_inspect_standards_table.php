<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialInspectStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_inspect_standards', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->bigInteger('material_id');
            $table->boolean('weight_use')->nullable();
            $table->boolean('length_use')->nullable();
            $table->boolean('eye_use')->nullable();
            $table->integer('attach_id')->nullable();
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
        Schema::dropIfExists('material_inspect_standards');
    }
}
