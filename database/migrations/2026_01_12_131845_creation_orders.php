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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') // Mise en place de la clé étrangère
                ->constrained('users')
                ->cascadeOnDelete();
            $table->string('amount');
            $table->string('status');
            $table->timestamps();
            $table->unique('user_id'); // One-to-One : une seul « address » par user
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
