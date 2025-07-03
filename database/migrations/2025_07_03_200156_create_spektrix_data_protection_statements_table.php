<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_data_protection_statements', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'spektrix_id' )->unique();
            $table->string( 'text' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_data_protection_statements' );
    }
};
