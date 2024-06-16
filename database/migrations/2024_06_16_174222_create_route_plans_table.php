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
        Schema::create('route_plans', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->magellanPoint('route_line', 4326);
            $table->foreignId('from_port_id')
                ->constrained('ports')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('to_port_id')
                ->constrained('ports')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignIdFor(\MoonShine\Models\MoonshineUser::class)
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
        });
        Schema::create('route_plan_ships',function (Blueprint $table){
            $table->foreignId('route_plan_id')
                ->constrained('route_plans')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('ship_id')
                ->constrained('ships')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_plans');
    }
};
