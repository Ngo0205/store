<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_registers',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('phone');
            $table->string('user_name');
            $table->string('password');
            $table->string('email');
            $table->string('gender');
            $table->string('birthday');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_registers');
    }
};
