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
        Schema::create('ship_want_routes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Ship::class)
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('from_port_id')
                ->constrained('ports')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('to_port_id')
                ->constrained('ports')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamp('start_sailing_at');
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
        Schema::dropIfExists('ship_want_routes');
    }
};
