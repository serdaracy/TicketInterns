
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\Ticket;
 

return new class extends Migration {
    public function up(): void {
        Schema::create('supports', function (Blueprint $t) {
            $t->id();
            $t->varchar('name',50);
            $t->varchar('email',100);
            $t->varchar('password',100);
            $t->foreignId('department_id');
            $t->foreignId('role_id');
            $t->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('supports');
    }
};
