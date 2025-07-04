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
            $table->foreignId( 'plan_id' )->constrained( 'spektrix_plans' )->restrictOnDelete();
            $table->foreignId( 'seat_id' )->nullable()->constrained( 'spektrix_seats' )->nullOnDelete();
            $table->foreignId( 'ticket_type_id' )->constrained( 'spektrix_ticket_types' )->restrictOnDelete();
            $table->foreignId( 'instance_id' )->constrained( 'spektrix_instances' )->cascadeOnDelete();
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
