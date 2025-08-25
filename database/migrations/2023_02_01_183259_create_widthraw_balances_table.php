<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widthraw_balances', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('widthraw_name');
            $table->string('widthraw_num');
            $table->string('widthraw_bank');
            $table->string('widthraw_amount');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('widthraw_balances');
    }
};
