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
        Schema::create('buy_order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buy_order_id');
            $table->unsignedBigInteger('article_id');
            $table->integer('quantity');
            $table->float('price')->nullable();
            $table->timestamps();
        });

        Schema::table('buy_order_details', function (Blueprint $table) {
            $table->foreign('buy_order_id')->references('id')->on('buy_orders')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('articles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_order_details');
    }
};
