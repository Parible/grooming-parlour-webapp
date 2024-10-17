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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id');
            $table->string('customer_name');
            $table->string('contact', 255); 
            $table->string('author');
            $table->string('staff_name',255);
            $table->string('location',255);
            $table->string('additionals',255)->nullable();
            $table->string('services');
            $table->float('service_amt', 8, 2);
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
        Schema::dropIfExists('transactions');
    }
};
