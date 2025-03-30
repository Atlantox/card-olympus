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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('multiverseid');
            $table->string('name', 255);
            $table->text('text')->nullable();
            $table->text('full_image_url');
            $table->text('art_image_url');
            $table->string('flavor')->nullable();
            $table->integer('quantity');
            $table->boolean('foil')->default(false);
            $table->string('price')->nullable();
            $table->string('price_foil')->nullable();
            $table->string('set');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
