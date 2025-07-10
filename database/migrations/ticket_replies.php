<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('ticket_replies', function (Blueprint $t) {
            $t->id();
            $t->foreignId('ticket_id');
            $t->foreignId('support_id');
            $t->text('message');
            $t->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('ticket_replies');
    }
};