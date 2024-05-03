<?php

use App\Models\User;
use App\Models\Chismis;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->uuid();
            $table->string('subject');
            $table->text('content');
            $table->integer('reacts');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Chismis::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
