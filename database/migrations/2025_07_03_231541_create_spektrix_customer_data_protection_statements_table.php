<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_customer_spektrix_data_protection_statement', function ( Blueprint $table ) {
            $table->foreignId( 'spektrix_customer_id' )->constrained()->cascadeOnDelete();
            $table->foreignId( 'spektrix_data_protection_statement_id' )->constrained()->cascadeOnDelete();
            $table->boolean( 'agreed' )->nullable();
            $table->primary( [ 'spektrix_customer_id', 'spektrix_data_protection_statement_id' ] );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_customer_spektrix_data_protection_statement' );
    }
};
