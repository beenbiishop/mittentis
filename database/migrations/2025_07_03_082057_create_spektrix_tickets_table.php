<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_tickets', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'team_id' )->constrained()->cascadeOnDelete();
            $table->string( 'spektrix_id' )->unique();
            $table->string( 'barcode' )->nullable();
            $table->float( 'discount' )->default( 0 );
            $table->float( 'price' );
            $table->float( 'total' );
            $table->foreignId( 'spektrix_plan_id' )->constrained()->restrictOnDelete();
            $table->foreignId( 'spektrix_seat_id' )->nullable()->constrained()->nullOnDelete();
            $table->foreignId( 'spektrix_ticket_type_id' )->constrained()->restrictOnDelete();
            $table->foreignId( 'spektrix_instance_id' )->constrained()->cascadeOnDelete();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_tickets' );
    }
};
