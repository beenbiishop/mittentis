<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_order_spektrix_ticket', function ( Blueprint $table ) {
            $table->foreignId( 'spektrix_order_id' )->constrained()->cascadeOnDelete();
            $table->foreignId( 'spektrix_ticket_id' )->constrained()->cascadeOnDelete();
            $table->primary( [ 'spektrix_order_id', 'spektrix_ticket_id' ] );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_order_spektrix_ticket' );
    }
};
