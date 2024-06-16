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
        Schema::create('integral_velocities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\IntegralVelocityPoint::class)
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamp('for_date_at');
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
        Schema::dropIfExists('integral_velocities');
    }
};
