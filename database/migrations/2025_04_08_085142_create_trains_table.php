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
        Schema::create('trains', function (Blueprint $table) {
            $table->string('code_train')->unique();
            $table->time('arrive_train');
            $table->time('departure_train');
            $table->string('arrive_station');
            $table->string('departure_station');
            $table->boolean('train_on_time');
            $table->boolean('canceled_trein');
            $table->unsignedInteger('number_carriages');
            $table->string('agency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
