<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_order_tickets', function ( Blueprint $table ) {
            $table->foreignId( 'order_id' )->constrained( 'spektrix_orders' )->cascadeOnDelete();
            $table->foreignId( 'ticket_id' )->constrained( 'spektrix_tickets' )->cascadeOnDelete();
            $table->primary( [ 'order_id', 'ticket_id' ] );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_order_tickets' );
    }
};
