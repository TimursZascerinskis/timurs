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
    Schema::table('clients', function (Blueprint $table) {
        $table->string('entry_type')->nullable();
        $table->string('legal_address')->nullable();
        $table->boolean('is_vat_payer')->nullable();
        $table->string('vat_rate')->nullable();
        $table->string('personal_code')->nullable();
        $table->string('full_name')->nullable();
        $table->string('address')->nullable();
        $table->string('physical_address')->nullable();
        $table->string('correspondence_address')->nullable();
        $table->string('country')->nullable();
        $table->string('client_id_number')->nullable();
        $table->string('document_email')->nullable();
        $table->decimal('balance', 10, 2)->nullable();
        $table->integer('payment_days')->nullable();
        $table->decimal('discount', 5, 2)->nullable();
        $table->text('notes')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('clients', function (Blueprint $table) {
        $table->dropColumn([
            'entry_type',
            'legal_address',
            'is_vat_payer',
            'vat_rate',
            'personal_code',
            'full_name',
            'address',
            'physical_address',
            'correspondence_address',
            'country',
            'client_id_number',
            'document_email',
            'balance',
            'payment_days',
            'discount',
            'notes',
        ]);
    });
}
};
