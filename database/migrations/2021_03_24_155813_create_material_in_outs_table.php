<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialInOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_in_outs', function (Blueprint $table) {
            $table->id();
            $table->char('type',1);
            $table->char('inner_type',1);
            $table->char('material_id', 5);
            $table->char('customer_id', 5);
            $table->date('wdate');
            $table->char('attach_id', 5)->nullable();
            $table->mediumText('etc')->nullable();
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
        Schema::dropIfExists('material_in_outs');
    }
}
