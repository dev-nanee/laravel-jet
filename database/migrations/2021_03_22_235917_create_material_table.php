<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->char('code',5)->unique();
            $table->char('type',5);
            $table->string('name');
            $table->string('short_name')->nullable();
            $table->char('model_code',5);
            $table->string('color')->nullable();
            $table->string('unit_code')->nullable();
            $table->string('unit_qty')->nullable();
            $table->char('sales_code')->nullable();
            $table->char('buyer_code')->nullable();
            $table->float('preorder_stock')->nullable();
            $table->float('safety_stock')->nullable();
            $table->integer('attach_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
