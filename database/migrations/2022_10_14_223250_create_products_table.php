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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('status')->default('draft');
            $table->string('slug');
            $table->json('summary')->nullable();
            $table->json('text')->nullable();
            $table->text('changelog')->nullable();
            $table->string('version')->nullable();
            $table->string('vendor')->nullable();
            $table->string('vendor_product_id')->nullable();
            $table->string('checkout_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
