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
        Schema::create('registerusers_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registeruser_id');
            $table->unsignedBigInteger('address_id');
            $table->foreign('registeruser_id')->references('id')->on('register_users')->constrained()->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registerusers_addresses');
    }
};
