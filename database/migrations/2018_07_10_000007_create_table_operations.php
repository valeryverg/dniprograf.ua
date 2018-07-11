<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOperations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_oper');
            $table->integer('amount');
            $table->unsignedInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials');
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type_operations');
            $table->unsignedInteger('user_id')->default(1);
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
}
