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
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name', 60);

            $table->string('email', 100);
            $table->enum('gender', ['male', 'female', 'others']);
            $table->text('address');
            $table->date('dob');
            $table->string('password');
            $table->boolean('status');
            $table->integer('points');
            $table->timestamps();
            $table->comment('Business calculations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
};
