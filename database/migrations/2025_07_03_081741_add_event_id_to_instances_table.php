<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table( 'spektrix_instances', function ( Blueprint $table ) {
            $table->foreignId( 'spektrix_event_id' )->constrained()->cascadeOnDelete();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table( 'spektrix_instances', function ( Blueprint $table ) {
            $table->dropColumn( 'spektrix_event_id' );
        } );
    }
};
