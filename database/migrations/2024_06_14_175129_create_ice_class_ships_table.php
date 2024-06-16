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
        Schema::create('ice_class_ships', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\IceIntegral::class)
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('title');
            $table->enum('movement_on_ice_ocean',['forbidden','under_wiring','independent']);
            $table->enum('speed_type',['max','custom'])->nullable();
            $table->tinyInteger('speed_from')->nullable();
            $table->tinyInteger('speed_to')->nullable();
            $table->tinyInteger('speed_max_slowdown')->nullable();
            $table->foreignIdFor(\MoonShine\Models\MoonshineUser::class)
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ice_class_ships');
    }
};
