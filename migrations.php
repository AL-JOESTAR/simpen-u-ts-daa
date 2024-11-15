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
        Schema::create('restorans', function (Blueprint $table) {
            $table->id();
            $table->string('menu'); //menu makanan
            $table->string('category'); // category makanan
            $table->string('description'); //deskripsi makanan
            $table->decimal('price', 15, 2); //harga makanan
            $table->string('availability'); //tersedia atau tidak
            $table->timestamps(); //create at and update at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restorans');
    }
};
