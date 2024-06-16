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
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ice_class_ship_id')->nullable()
                ->constrained('ice_class_ships')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('title');
            $table->text('description')->nullable();
            $table->tinyInteger('max_speed_in_water');
            $table->boolean('active')->default(true);
            $table->enum('status_movement',['movement','station']);
            $table->magellanPoint('location', 4326);
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
        Schema::dropIfExists('ships');
    }
};
