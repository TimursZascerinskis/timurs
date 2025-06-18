<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('client_group_client', function (Blueprint $table) {
        $table->foreignId('client_id')->constrained()->onDelete('cascade');
        $table->foreignId('client_group_id')->constrained()->onDelete('cascade');
        $table->primary(['client_id', 'client_group_id']);
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_group_client');
    }
};
