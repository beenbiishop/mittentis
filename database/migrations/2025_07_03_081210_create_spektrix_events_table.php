<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_events', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'spektrix_id' )->unique();
            $table->string( 'web_event_id' )->nullable();
            $table->string( 'name' );
            $table->string( 'short_name' )->nullable();
            $table->string( 'description' )->nullable();
            $table->boolean( 'is_on_sale' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_events' );
    }
};
