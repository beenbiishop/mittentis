<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'spektrix_tag_groups', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'spektrix_id' )->unique();
            $table->string( 'name' );
            $table->string( 'description' )->nullable();
            $table->boolean( 'is_web' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'spektrix_tag_groups' );
    }
};
