<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_orders', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'spektrix_id' )->unique();
            $table->dateTime( 'first_transaction' )->nullable();
            $table->dateTime( 'last_transaction' )->nullable();
            $table->float( 'total' );
            $table->foreignId( 'customer_id' )->constrained( 'spektrix_customers' )->cascadeOnDelete();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_orders' );
    }
};
