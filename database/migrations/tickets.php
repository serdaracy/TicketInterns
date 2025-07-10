<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tickets', function (Blueprint $t) {
            $t->id();
            $t->foreignId('employee_id');
            $t->foreignId('department_id');
            $t->string('subject');
            $t->text('message');
            $t->enum('status', ['open', 'answered', 'closed'])->default('open');
            $t->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('tickets');
    }
};