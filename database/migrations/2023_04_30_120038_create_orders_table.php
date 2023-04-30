<?php

use App\Models\Ticket;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Ticket::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('email');
            $table->string('hash');
            $table->timestamps();
        });
    }
};
