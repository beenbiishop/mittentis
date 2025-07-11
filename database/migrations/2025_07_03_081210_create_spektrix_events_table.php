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
            $table->foreignId( 'team_id' )->constrained()->cascadeOnDelete();
            $table->string( 'spektrix_id' )->unique();
            $table->string( 'web_event_id' )->nullable();
            $table->string( 'name' );
            $table->string( 'short_name' )->nullable();
            $table->text( 'description' )->nullable(); // Changed to text
            $table->boolean( 'is_on_sale' )->nullable();
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
