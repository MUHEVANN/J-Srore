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

        Schema::create('cloths', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('category_id');
            $table->string('harga');
            $table->string('foto');
            $table->integer('stock');
            $table->enum('gender',["L","P"]);
            $table->string('desc');
            $table->timestamps();
           
           
           
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloths');
    }
};