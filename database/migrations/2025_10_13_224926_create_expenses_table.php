<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('category', [
            'Food',
            'Transport',
            'Housing',
            'Health',
            'Education',
            'Entertainment',
            'Finance',
            'Leisure',
            'Others'
            ]);

            $table->decimal('mount', 10, 2);//número total de digitos y número de dígitos después del punto decimal
            $table->string('description');
            $table->date('purchase_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
