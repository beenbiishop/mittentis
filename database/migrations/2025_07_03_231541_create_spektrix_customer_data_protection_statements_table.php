<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_customer_data_protection_statements', function ( Blueprint $table ) {
            $table->foreignId( 'customer_id' )->constrained( 'spektrix_customers' )->cascadeOnDelete();
            $table->foreignId( 'data_protection_statement_id' )
                  ->constrained( 'spektrix_data_protection_statements' )
                  ->cascadeOnDelete();
            $table->primary( [ 'customer_id', 'data_protection_statement_id' ] );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_customer_data_protection_statements' );
    }
};
