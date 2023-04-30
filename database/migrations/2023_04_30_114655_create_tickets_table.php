<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('poster');
            $table->string('title');
            $table->string('subtitle');
            $table->integer('price');
            $table->timestamps();
        });
    }
};
