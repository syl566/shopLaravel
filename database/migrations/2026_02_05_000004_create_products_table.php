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
            $table->id();   // Clé primaire auto-incrémentée
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();;
            $table->string('name');          // VARCHAR(255)                      
            $table->string('slug')->unique();
            $table->text('description')->nullable(); // TEXT
            $table->decimal('price', 8, 2);  // DECIMAL(8,2) pour les prix
            $table->integer('stock');        // INTEGER
            $table->boolean('active')->default(true);
            $table->timestamps();            // créé_à et mis_à_jour
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