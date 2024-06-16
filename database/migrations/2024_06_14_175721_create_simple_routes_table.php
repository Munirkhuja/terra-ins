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
        Schema::create('simple_routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from_port_id')
                ->constrained('ports')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('to_port_id')
                ->constrained('ports')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->float('distance');
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
        Schema::dropIfExists('simple_routes');
    }
};
